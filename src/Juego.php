<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Juego</title>

    <link rel="stylesheet" href="css/StyleGeneral.css">
    <link rel="stylesheet" href="css/Style_juego.css">

</head>

<body>
    <!--Encabezado principal-->
    <?php include('Header.php')?>

    <main class="pagina_juego">

        <h1>Juego</h1>
        <p>
            Próximamente...
        </p>

   <section class="area_juego">
    <div class="marcador_juego">
        <span id="puntuacion">Puntos: 0</span>
        <span id="vidas">Vidas: 3</span>
    </div>

    <div class="contenedor_canvas">
        <canvas id="canvasJuego" width="800" height="450"></canvas>

        <div id="pantallaInicio" class="pantalla_juego">
            <h2>Viaje espacial</h2>
            <p>
                Muévete, dispara y sobrevive todo lo que puedas.
            </p>
            <button id="botonComenzar">
                Comenzar
            </button>
        </div>

        <div id="pantallaGameOver" class="pantalla_juego oculto">
            <h2>Fin del viaje</h2>
            <p id="puntuacionFinal">
                Puntos: 0
            </p>
            <button id="botonReiniciar">
                Volver a jugar
            </button>
        </div>
    </div>
    <p class="controles_juego">
        <strong>Movimiento:</strong> WASD / Flechas
        &nbsp;&nbsp; | &nbsp;&nbsp;
        <strong>Disparar:</strong> Espacio
    </p>
</section>

    </main>


    <?php include('Footer.php')?>

    <script src="js/Usuario_pestaña.js"></script>
    <script src="js/Juego.js"></script>

</body>

</html>
