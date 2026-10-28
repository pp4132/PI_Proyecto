
<?php
require_once __DIR__ . '/../includes/autenticacion.php';
require_once __DIR__ . '/../includes/conexion.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido.']);
    exit;
}

try {
    $idUsuario = usuarioActual();

    $csrf = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';

    if (
        empty($_SESSION['csrf_chat']) ||
        !is_string($csrf) ||
        !hash_equals($_SESSION['csrf_chat'], $csrf)
    ) {
        http_response_code(403);
        echo json_encode(['error' => 'Token de seguridad inválido.']);
        exit;
    }

    $estado = $pdo->prepare(
        "SELECT estatus FROM usuario WHERE id_usuario = ?"
    );
    $estado->execute([$idUsuario]);
    $usuario = $estado->fetch();

    if (!$usuario || $usuario['estatus'] !== 'activo') {
        http_response_code(403);
        echo json_encode(['error' => 'Cuenta no disponible.']);
        exit;
    }

    $datos = json_decode(
        file_get_contents('php://input'),
        true
    );

    if (!is_array($datos)) {
        http_response_code(400);
        echo json_encode(['error' => 'Solicitud inválida.']);
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
        echo json_encode(['error' => 'Sala no válida.']);
        exit;
    }

    if (!is_string($contenido) || $contenido === '') {
        http_response_code(400);
        echo json_encode(['error' => 'Escribe un mensaje.']);
        exit;
    }

    if (mb_strlen($contenido, 'UTF-8') > 2000) {
        http_response_code(400);
        echo json_encode(['error' => 'Máximo 2000 caracteres.']);
        exit;
    }

    // Verificar que la sala exista.
    $stmt = $pdo->prepare(
        "SELECT id_chat FROM conversaciones WHERE id_chat = ?"
    );
    $stmt->execute([$idChat]);

    if (!$stmt->fetch()) {
        http_response_code(404);
        echo json_encode(['error' => 'La sala no existe.']);
        exit;
    }

    // Validar que la respuesta pertenezca a esta misma sala.
    if ($idPadre !== null && $idPadre !== '') {
        $idPadre = filter_var($idPadre, FILTER_VALIDATE_INT);

        if (!$idPadre || $idPadre < 1) {
            http_response_code(400);
            echo json_encode(['error' => 'Respuesta no válida.']);
            exit;
        }

        $stmt = $pdo->prepare("
            SELECT id_comentario
            FROM comentario
            WHERE id_comentario = ?
              AND id_chat = ?
        ");
        $stmt->execute([$idPadre, $idChat]);

        if (!$stmt->fetch()) {
            http_response_code(400);
            echo json_encode([
                'error' => 'El mensaje original no pertenece a esta sala.'
            ]);
            exit;
        }
    } else {
        $idPadre = null;
    }

    $stmt = $pdo->prepare("
        INSERT INTO comentario
            (contenido, id_chat, id_usuario, id_padre)
        VALUES (?, ?, ?, ?)
    ");

    $stmt->execute([
        $contenido,
        $idChat,
        $idUsuario,
        $idPadre
    ]);

    echo json_encode([
        'ok' => true,
        'id_comentario' => (int)$pdo->lastInsertId()
    ], JSON_UNESCAPED_UNICODE);

} catch (Throwable $e) {
    error_log($e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'No se pudo enviar el mensaje.']);
}