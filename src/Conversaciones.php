
<?php
require_once __DIR__ . '/auth/autenticación.php';
require_once __DIR__ . '/conexion.php';

$idUsuario = usuarioActual();

$stmtUsuario = $pdo->prepare(
    "SELECT estatus
     FROM usuario
     WHERE id_usuario = :id"
);
$stmtUsuario->execute(['id' => $idUsuario]);
$usuario = $stmtUsuario->fetch();

if (!$usuario || $usuario['estatus'] !== 'activo') {
    http_response_code(403);
    exit('Tu cuenta no tiene acceso a los foros.');
}

$sql = "
    SELECT
        c.id_chat,
        c.titulo,
        c.descripcion,
        COUNT(co.id_comentario) AS total_mensajes
    FROM conversaciones c
    LEFT JOIN comentario co
        ON co.id_chat = c.id_chat
    WHERE c.estatus = 'activo'
    GROUP BY
        c.id_chat,
        c.titulo,
        c.descripcion,
        c.fecha_creacion
    ORDER BY c.fecha_creacion DESC
";

$stmt = $pdo->query($sql);
$foros = $stmt->fetchAll();

$stmt = $pdo->query($sql);
$foros = $stmt->fetchAll();

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
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Comunidad de béisbol</title>

    <link rel="stylesheet" href="css/StyleGeneral.css">
    <link rel="stylesheet" href="css/Style_chat.css">
</head>
<body>

<?php include __DIR__ . '/Header.php'; ?>

<main>
    <?php include __DIR__ . '/SideBar&Buttons.php'; ?>

    <section class="seccion_chat">
        <h1>Comunidad</h1>

        <p class="descripcion_chat">
            Únete a las conversaciones sobre béisbol.
        </p>

        <div class="contenedor_temas">

            <?php if (empty($foros)): ?>
                <p>Por el momento no hay foros disponibles.</p>
            <?php else: ?>

                <?php foreach ($foros as $foro): ?>
                    <a
                        href="Chat.php?id=<?= (int) $foro['id_chat'] ?>"
                        class="tema_chat"
                    >
                        <div class="icono_tema">
                            <?= '💬' ?>
                        </div>

                        <div class="informacion_tema">
                            <h2>
                                <?= escapar($foro['titulo']) ?>
                            </h2>

                            <p>
                                <?= escapar(
                                    $foro['descripcion'] ?? ''
                                ) ?>
                            </p>

                            <span>
                                <?= (int) $foro['total_mensajes'] ?>
                                mensajes
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>

            <?php endif; ?>

        </div>
    </section>
</main>
<form action="CerrarSesion.php" method="POST">
    <button type="submit" class="btn-cerrar-sesion">
        Cerrar sesión
    </button>
</form>

<?php include __DIR__ . '/Footer.php'; ?>

<script src="js/Usuario_pestaña.js"></script>
</body>
</html>
