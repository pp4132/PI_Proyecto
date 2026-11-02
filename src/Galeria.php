
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galería | Béisbol Mexicano Zona Norte</title>

    <link rel="stylesheet" href="css/StyleGeneral.css">
    <link rel="stylesheet" href="css/Style_galeria.css">
</head>

<body>

    <!-- Encabezado -->
    <?php include('Header.php')?>

    <main class="galeria">

        <?php include('SideBar&Buttons.php')?>

        <h1>Galería del Béisbol Mexicano</h1>

        <p>
            Revive los mejores momentos de la Liga Mexicana de Béisbol
            en su Zona Norte: jugadas, estadios, equipos y aficionados.
        </p>

        <!-- Galería de fotografías -->
        <section class="galeria_contenedor">

            <article class="elemento_galeria">
                <img
                    src="https://img.mlbstatic.com/milb-images/image/upload/t_16x9/t_w2208/milb/lwhz7kxgyz7u4daw8gid"
                    alt="Jugadores de Sultanes de Monterrey celebrando una victoria">
                <h3>Sultanes de Monterrey</h3>
                <p>La emoción de los encuentros de la novena regiomontana.</p>
            </article>

            <article class="elemento_galeria">
                <img
                    src="https://cdn2.telediario.mx/uploads/media/2025/05/28/mil-aficionados-pitcher-ganador-jorge.jpg"
                    alt="Acción de un partido entre Acereros y Sultanes">
                <h3>Duelo de grandes equipos</h3>
                <p>La intensidad de los enfrentamientos de la Zona Norte.</p>
            </article>

            <article class="elemento_galeria">
                <img
                    src="https://cdn2.telediario.mx/uploads/media/2025/04/25/nolan-kidman-pitcher-ganador-salvamento.jpg"
                    alt="Jugadores de Sultanes celebrando en el terreno">
                <h3>Celebración en el diamante</h3>
                <p>El esfuerzo y el trabajo en equipo después de cada jugada.</p>
            </article>

            <article class="elemento_galeria">
                <img
                    src="https://cdn.milenio.com/uploads/media/2023/08/24/tecolotes-vencen-sultanes-monterrey-toma_64_0_1074_678.jpg"
                    alt="Jugadores de Tecos y Sultanes durante la competencia">
                <h3>Tecos de los Dos Laredos</h3>
                <p>Rivalidad y pasión en los encuentros de la frontera.</p>
            </article>

            <article class="elemento_galeria">
                <img
                    src="https://vanguardia.com.mx/binrepository/1200x675/1c0/1200d630/down-right/11604/TIGQ/zona-norte_1-12818464_20250818191315.png"
                    alt="Jugadores destacados de la Zona Norte">
                <h3>Protagonistas de la Zona Norte</h3>
                <p>Los equipos que hacen grande al béisbol mexicano.</p>
            </article>

            <article class="elemento_galeria">
                <img
                    src="https://iphonegr.elnorte.com/libre/online07/imagetransformer2/ImageTransformer.aspx?imagencompleta=1&img=https%3A%2F%2Fimg.gruporeforma.com%2Fimagenes%2F960x640%2F6%2F778%2F5777910.jpg"
                    alt="Jugador de Sultanes corriendo hacia primera base">
                <h3>La emoción de cada carrera</h3>
                <p>Velocidad, estrategia y pasión en cada entrada.</p>
            </article>

        </section>

        <!-- Sección de videos -->        
        <section class="seccion_videos">

            <h2>Videos de la Zona Norte</h2>

            <p>
                Disfruta de los mejores momentos del béisbol
                mexicano directamente desde nuestra galería.
            </p>

            <div class="galeria_contenedor">

                <article class="elemento_galeria video">

                    <iframe
                        src="https://www.youtube.com/embed/cr9HYWo_SQk"
                        title="Sultanes vs Tecos - Highlights 2025"
                        allowfullscreen
                        loading="lazy">
                    </iframe>

                    <h3>Sultanes vs Tecos</h3>

                    <p>
                        Resumen del encuentro entre Monterrey
                        y los Tecos de los Dos Laredos.
                    </p>

                </article>

                <article class="elemento_galeria video">

                    <iframe
                        src="https://www.youtube.com/embed/w6VmGVuI9Lo"
                        title="Sultanes vs Tecos - Highlights 2026"
                        allowfullscreen
                        loading="lazy">
                    </iframe>

                    <h3>Duelo de la Zona Norte</h3>

                    <p>
                        Mejores momentos del encuentro entre
                        Sultanes y Tecos en 2026.
                    </p>

                </article>

            </div>

        </section>



    </main>

    <!-- Pie de página -->
    <?php include('Footer.php')?>

    <script src="js/Usuario_pestaña.js"></script>

</body>
</html>
