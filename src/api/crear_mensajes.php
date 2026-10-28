
<?php
require_once __DIR__ . '/../auth/autenticación.php';
require_once __DIR__ . '/../conexion.php';

header('Content-Type: application/json; charset=utf-8');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Allow: POST');
        http_response_code(405);
        echo json_encode(['error' => 'Método no permitido.']);
        exit;
    }

    $idUsuario = usuarioActual();

    $stmt = $pdo->prepare(
        "SELECT estatus
         FROM usuario
         WHERE id_usuario = :id"
    );
    $stmt->execute(['id' => $idUsuario]);
    $usuario = $stmt->fetch();

    if (!$usuario || $usuario['estatus'] !== 'activo') {
        http_response_code(403);
        echo json_encode(['error' => 'Cuenta sin acceso.']);
        exit;
    }

    // Leer el JSON enviado por fetch().
    $datos = json_decode(
        file_get_contents('php://input'),
        true
    );

    if (!is_array($datos)) {
        http_response_code(400);
        echo json_encode(['error' => 'Solicitud inválida.']);
        exit;
    }

    $token = $datos['csrf'] ?? '';

    if (
        !is_string($token) ||
        !hash_equals($_SESSION['csrf_chat'] ?? '', $token)
    ) {
        http_response_code(403);
        echo json_encode(['error' => 'Token CSRF inválido.']);
        exit;
    }

    $idChat = filter_var(
        $datos['id_chat'] ?? null,
        FILTER_VALIDATE_INT
    );

    $contenido = trim($datos['contenido'] ?? '');
    $idPadre = $datos['id_padre'] ?? null;

    if (!$idChat || $idChat < 1) {
        http_response_code(400);
        echo json_encode(['error' => 'Foro inválido.']);
        exit;
    }

    if (!is_string($contenido) || $contenido === '') {
        http_response_code(400);
        echo json_encode(['error' => 'Escribe un mensaje.']);
        exit;
    }

    if (mb_strlen($contenido, 'UTF-8') > 2000) {
        http_response_code(400);
        echo json_encode(['error' => 'El mensaje supera los 2000 caracteres.']);
        exit;
    }

    // Comprobar que el foro está activo.
    $stmt = $pdo->prepare(
        "SELECT id_chat
         FROM conversaciones
         WHERE id_chat = :id
           AND estatus = 'activo'"
    );
    $stmt->execute(['id' => $idChat]);

    if (!$stmt->fetch()) {
        http_response_code(404);
        echo json_encode(['error' => 'Foro no encontrado o cerrado.']);
        exit;
    }

    // Validar la respuesta, si se proporcionó un comentario padre.
    if ($idPadre !== null) {
        $idPadre = filter_var(
            $idPadre,
            FILTER_VALIDATE_INT
        );

        if (!$idPadre || $idPadre < 1) {
            http_response_code(400);
            echo json_encode(['error' => 'Respuesta inválida.']);
            exit;
        }

        $stmt = $pdo->prepare(
            "SELECT id_comentario
             FROM comentario
             WHERE id_comentario = :padre
               AND id_chat = :chat"
        );

        $stmt->execute([
            'padre' => $idPadre,
            'chat' => $idChat
        ]);

        if (!$stmt->fetch()) {
            http_response_code(400);
            echo json_encode([
                'error' => 'El comentario al que respondes no pertenece a este foro.'
            ]);
            exit;
        }
    }

    $stmt = $pdo->prepare(
        "INSERT INTO comentario
            (contenido, id_padre, id_chat, id_usuario)
         VALUES
            (:contenido, :padre, :chat, :usuario)"
    );

    $stmt->execute([
        'contenido' => $contenido,
        'padre' => $idPadre,
        'chat' => $idChat,
        'usuario' => $idUsuario
    ]);

    echo json_encode([
        'ok' => true,
        'id_comentario' => (int) $pdo->lastInsertId()
    ]);

} catch (Throwable $e) {
    error_log('Error al crear mensaje: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'No se pudo guardar el mensaje.']);
}
