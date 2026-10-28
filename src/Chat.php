
<?php
require_once __DIR__ . '/auth/autenticación.php';
require_once __DIR__ . '/conexion.php';

$idUsuario = usuarioActual();

// Validar que el usuario siga activo.
$stmt = $pdo->prepare(
    "SELECT apodo, estatus
     FROM usuario
     WHERE id_usuario = :id"
);

$stmt->execute(['id' => $idUsuario]);
$usuario = $stmt->fetch();

if (!$usuario || $usuario['estatus'] !== 'activo') {
    http_response_code(403);
    exit('Tu cuenta no tiene acceso al chat.');
}

// Obtener el identificador del foro.
$idChat = filter_input(
    INPUT_GET,
    'id',
    FILTER_VALIDATE_INT
);

if (!$idChat || $idChat < 1) {
    http_response_code(400);
    exit('Debes seleccionar un foro válido.');
}

// Consultar el foro seleccionado.
$stmt = $pdo->prepare(
    "SELECT id_chat, titulo, descripcion
     FROM conversaciones
     WHERE id_chat = :id
       AND estatus = 'activo'
     LIMIT 1"
);

$stmt->execute(['id' => $idChat]);
$foro = $stmt->fetch();

if (!$foro) {
    http_response_code(404);
    exit('El foro no existe o está cerrado.');
}

// Crear el token CSRF.
if (empty($_SESSION['csrf_chat'])) {
    $_SESSION['csrf_chat'] = bin2hex(random_bytes(32));
}

$csrfToken = $_SESSION['csrf_chat'];

function escapar($valor): string
{
    return htmlspecialchars(
        (string) $valor,
        ENT_QUOTES,
        'UTF-8'
    );
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= escapar($foro['titulo']) ?></title>

    <link rel="stylesheet" href="css/StyleGeneral.css">
    <link rel="stylesheet" href="css/Chat.css">
</head>

<body>

<?php include __DIR__ . '/Header.php'; ?>

<main class="pagina_chat">

    <div class="titulo_chat">
        <h1><?= escapar($foro['titulo']) ?></h1>

        <p>
            <?= escapar($foro['descripcion'] ?? '') ?>
        </p>

        <p>
            Participando como
            <strong><?= escapar($usuario['apodo']) ?></strong>
        </p>

        <a href="Conversaciones.php">
            ← Volver a los foros
        </a>
    </div>

    <section class="contenedor_chat">

        <section class="zona_mensajes">

            <div
                id="mensajes"
                class="mensajes"
                aria-live="polite"
                aria-label="Mensajes del foro"
            >
                <p>Cargando mensajes...</p>
            </div>

            <form
                id="form-mensaje"
                class="formulario_mensaje"
            >
                <label class="sr-only" for="contenido">
                    Escribe tu mensaje
                </label>

                <textarea
                    id="contenido"
                    name="contenido"
                    maxlength="2000"
                    placeholder="Escribe tu mensaje..."
                    required
                ></textarea>

                <button type="submit" id="btn-enviar">
                    Enviar
                </button>
            </form>

            <p id="estado-chat" role="status"></p>

        </section>

    </section>

</main>

<?php include __DIR__ . '/Footer.php'; ?>

<script>
window.CHAT_CONFIG = <?= json_encode(
    [
        'csrf' => $csrfToken,
        'idChat' => (int) $foro['id_chat']
    ],
    JSON_HEX_TAG |
    JSON_HEX_AMP |
    JSON_HEX_APOS |
    JSON_HEX_QUOT
) ?>;
</script>

<script src="js/Chat.js" defer></script>

</body>
</html>
