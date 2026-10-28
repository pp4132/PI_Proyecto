
<?php
require_once __DIR__ . '/../auth/autenticación.php';
require_once __DIR__ . '/../conexion.php';

header('Content-Type: application/json; charset=utf-8');

try {
    $idUsuario = usuarioActual();

    // Verificar que la cuenta esté activa.
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

    $idChat = filter_input(
        INPUT_GET,
        'id_chat',
        FILTER_VALIDATE_INT
    );

    if (!$idChat || $idChat < 1) {
        http_response_code(400);
        echo json_encode(['error' => 'Foro inválido.']);
        exit;
    }

    // Verificar que el foro esté activo.
    $stmt = $pdo->prepare(
        "SELECT id_chat
         FROM conversaciones
         WHERE id_chat = :id
           AND estatus = 'activo'"
    );
    $stmt->execute(['id' => $idChat]);

    if (!$stmt->fetch()) {
        http_response_code(404);
        echo json_encode(['error' => 'Foro no encontrado.']);
        exit;
    }

    $stmt = $pdo->prepare(
        "SELECT
            c.id_comentario,
            c.contenido,
            c.fecha_creacion,
            c.id_padre,
            u.id_usuario,
            u.apodo
         FROM comentario c
         INNER JOIN usuario u
            ON u.id_usuario = c.id_usuario
         WHERE c.id_chat = :id_chat
           AND u.estatus = 'activo'
         ORDER BY c.fecha_creacion ASC,
                  c.id_comentario ASC"
    );

    $stmt->execute(['id_chat' => $idChat]);

    echo json_encode(
        $stmt->fetchAll(),
        JSON_UNESCAPED_UNICODE |
        JSON_INVALID_UTF8_SUBSTITUTE
    );

} catch (Throwable $e) {
    error_log('Error al listar mensajes: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'No se pudieron cargar los mensajes.']);
}
