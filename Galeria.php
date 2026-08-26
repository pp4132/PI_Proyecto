<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Galería</title>

    <link rel="stylesheet"
          href="css/StyleGeneral.css">

    <link rel="stylesheet"
          href="css/Style_galeria.css">

</head>

<body>
    <!--Encabezado-->
    <?php include('Header.php')?>


    <main class="galeria">
        <?php include('SideBar&Buttons.php')?>

        <h1>Galería</h1>

        <p>
            Imágenes y videos relacionados con el béisbol.
        </p>


        <section class="galeria_contenedor">

            <article class="elemento_galeria">

                <img
                    src="img/beisbol1.jpg"
                    alt="Partido de béisbol"
                >

            </article>


            <article class="elemento_galeria">

                <img
                    src="img/beisbol2.jpg"
                    alt="Estadio de béisbol"
                >

            </article>


            <article class="elemento_galeria">

                <img
                    src="img/beisbol3.jpg"
                    alt="Jugador de béisbol"
                >

            </article>


            <article class="elemento_galeria video">

                <video controls>

                    <source
                        src="videos/video1.mp4"
                        type="video/mp4"
                    >

                    Tu navegador no soporta videos.

                </video>

            </article>


        </section>

    </main>


    <?php include('Footer.php')?>


    <script src="js/Usuario_pestaña.js"></script>

</body>

</html>
