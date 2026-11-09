<?php

$carpetaCapturas = __DIR__ . '/img/Galeria_RA/';

$capturas = [];

if (is_dir($carpetaCapturas)) {

    $archivos = glob($carpetaCapturas . '*.png');

    if ($archivos !== false) {

        // Ordenar de la más reciente a la más antigua
        usort($archivos, function($a, $b) {
            return filemtime($b) <=> filemtime($a);
        });

        foreach ($archivos as $archivo) {

            $capturas[] = [
                'nombre' => basename($archivo),
                'ruta' => 'img/Galeria_RA/' . basename($archivo),
                'fecha' => filemtime($archivo)
            ];

        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Galería RA | Béisbol Mexicano Zona Norte</title>

    <link rel="stylesheet" href="css/StyleGeneral.css">
    <link rel="stylesheet" href="css/Style_galeria.css">

</head>

<body>

    <?php include('Header.php')?>

    <main class="galeria">

        <?php include('SideBar&Buttons.php')?>

        <h1>Galería de Realidad Aumentada</h1>

        <p>
            Aquí puedes encontrar todas las fotografías
            tomadas durante tus experiencias de realidad
            aumentada del béisbol mexicano.
        </p>


        <!-- MENSAJE DE CAPTURA -->

        <?php if (
            isset($_GET['captura']) &&
            $_GET['captura'] === 'guardada'
        ): ?>

            <div class="mensaje_captura">

                📸 ¡Tu fotografía se guardó correctamente!

            </div>

        <?php endif; ?>


        <!-- GALERÍA RA -->
        <section class="seccion_capturas">

            <h2>Mis capturas</h2>

            <p>
                Fotografías almacenadas en nuestra
                galería de realidad aumentada.
            </p>

            <?php if (count($capturas) > 0): ?>

                <div class="galeria_contenedor">

                    <?php foreach ($capturas as $captura): ?>

                        <article class="elemento_galeria">

                            <img
                                src="<?php echo htmlspecialchars($captura['ruta'], ENT_QUOTES, 'UTF-8'); ?>"
                                alt="Captura de realidad aumentada"
                                loading="lazy">

                            <h3>Captura de realidad aumentada</h3>

                            <p>
                                Fecha:

                                <?php
                                echo date(
                                    'd/m/Y H:i',
                                    $captura['fecha']
                                );
                                ?>
                            </p>

                            <a
                                href="<?php echo htmlspecialchars($captura['ruta'], ENT_QUOTES, 'UTF-8'); ?>"
                                download="<?php echo htmlspecialchars($captura['nombre'], ENT_QUOTES, 'UTF-8'); ?>"
                                class="boton_descargar">

                                💾 Descargar captura

                            </a>

                        </article>

                    <?php endforeach; ?>

                </div>

            <?php else: ?>

                <div class="galeria_vacia">

                    <h3>📷 Todavía no tienes fotografías</h3>

                    <p>
                        Aún no has realizado ninguna captura
                        de realidad aumentada.
                    </p>

                    <a href="RealidadAumentada.php">
                        Activar realidad aumentada
                    </a>

                </div>

            <?php endif; ?>

        </section>

    </main>


    <?php include('Footer.php')?>

    <script src="js/Usuario_pestaña.js"></script>

</body>

</html>