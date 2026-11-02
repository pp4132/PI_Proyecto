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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de inicio</title>
        <link rel="stylesheet" href="css/StyleGeneral.css">
        <link rel="stylesheet" href="css/Style_trivia.css">
    </head>
    <body>
        <!--Encabezado principal-->
        <?php include('Header.php')?>

        <main>
            
           <?php include('SideBar&Buttons.php')?>

           <section class="contenedor_trivia">
                <div class="tag">
                Liga Mexicana de Beisbol · Zona Norte
                </div>

                <h1>⚾ Trivia del Beisbol Mexicano</h1>

                <p class="muted" id="intro">
                Pon aprueba tus conocimientos
                </p>

                <!-- ======================================
                    PANTALLA DE INICIO
                ======================================= -->
                <section id="start">
                    <button class="btn" id="play">
                        Comenzar trivia
                    </button>
                </section>

                <!-- ======================================
                    PANTALLA DEL JUEGO
                ======================================= -->
                <section id="game" hidden>
                <div class="top">
                    <strong id="count"></strong>
                    <span id="score"></span>
                </div>
                
                <!-- Barra de progreso -->
                <div class="progress">
                    <div class="bar" id="bar"></div>
                </div>

                <!-- Pregunta actual -->
                <h2 id="question"></h2>

                <!-- Opciones de respuesta -->
                <div class="choices" id="choices"></div>

                <!-- Mensaje de respuesta -->
                <p
                    class="feedback"
                    id="feedback"
                    aria-live="polite">
                </p>

                <!-- Botón siguiente -->
                <button class="btn" id="next" disabled>
                    Siguiente pregunta
                </button>

                </section>

                <!-- ======================================
                    PANTALLA DE RESULTADOS
                ======================================= -->

                <section id="result" hidden>

                <h2 id="summary"></h2>

                <p class="muted">
                    Puedes jugar nuevamente para obtener
                    una selección diferente de preguntas.
                </p>
                <div id="newBadges"></div>

                <button class="btn" id="again">
                    Volver a jugar
                </button>

                </section>
            </section>

        </main>

        <?php include('Footer.php')?>

        <script src="js/Usuario_pestaña.js"></script>
        <script src="js/Encuesta.js"></script>
    </body>
</html>
