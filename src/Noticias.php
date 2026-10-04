<!DOCTYPE html>
<html lang="en">
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de inicio</title>
        <link rel="stylesheet" href="css/StyleGeneral.css">
        <link rel="stylesheet" href="css/Style_noticias.css">

    </head>
    <body>
        <!--Encabezado principal-->
        <?php include('Header.php')?>

        <main>

            <?php include('SideBar&Buttons.php')?>

            <section class="catalogo_noticias">

                <h1>Noticias</h1>

                <div class="contenedor_noticias">

                    <a href="Noticias/Noticia1.php" class="tarjeta_noticia">

                        <div class="imagen_noticia">
                            <img
                                src="img/Noticiaimg.jpg"
                                alt="Descripción de la noticia"
                            >
                        </div>

                        <div class="contenido_noticia">

                            <span class="fecha_noticia">
                                19 de agosto de 2026
                            </span>

                            <h2>
                                Título de la noticia
                            </h2>

                            <p>
                                Breve descripción de la noticia.
                                Aquí puedes colocar dos o tres líneas
                                para que el usuario sepa de qué trata.
                            </p>

                        </div>

                    </a>

                    <a href="Noticias/Noticia2.php" class="tarjeta_noticia">

                        <div class="imagen_noticia">
                            <img
                                src="img/Noticiaimg.jpg"
                                alt="Descripción de la noticia"
                            >
                        </div>
                        <div class="contenido_noticia">
                            <span class="fecha_noticia">
                                18 de agosto de 2026
                            </span>
                            <h2>
                                Segunda noticia
                            </h2>
                            <p>
                                Breve descripción de la segunda noticia.
                            </p>
                        </div>
                    </a>

                </div>
            </section>
        </main>

        <?php include('Footer')?>

        <script src="js/Usuario_pestaña.js"></script>
    </body>
</html>
