<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Chat</title>

    <link rel="stylesheet"
          href="css/StyleGeneral.css">

    <link rel="stylesheet"
          href="css/Style_chat.css">

</head>

<body>
    <!--Encabezado principal-->
    <?php include('Header.php')?>

    <main>

        <?php include('SideBar&Buttons.php')?>

        <section class="seccion_chat">

            <h1>Comunidad</h1>

            <p class="descripcion_chat">
                Únete a las conversaciones sobre béisbol.
            </p>


            <div class="contenedor_temas">


                <!-- Tema 1 -->

                <a href="Chat/General.html"
                   class="tema_chat">

                    <div class="icono_tema">
                        ⚾
                    </div>

                    <div class="informacion_tema">

                        <h2>
                            Béisbol en general
                        </h2>

                        <p>
                            Habla sobre béisbol, jugadores,
                            temporadas y todo lo relacionado
                            con este deporte.
                        </p>

                        <span>
                            124 conversaciones
                        </span>

                    </div>

                </a>


                <!-- Tema 2 -->

                <a href="Chat/ZonaNorte.html"
                   class="tema_chat">

                    <div class="icono_tema">
                        🏟️
                    </div>

                    <div class="informacion_tema">

                        <h2>
                            Zona Norte
                        </h2>

                        <p>
                            Discute sobre los equipos y
                            acontecimientos de la Zona Norte.
                        </p>

                        <span>
                            87 conversaciones
                        </span>

                    </div>

                </a>


                <!-- Tema 3 -->

                <a href="Chat/Equipos.html"
                   class="tema_chat">

                    <div class="icono_tema">
                        🧢
                    </div>

                    <div class="informacion_tema">

                        <h2>
                            Equipos
                        </h2>

                        <p>
                            Conversaciones sobre nuestros
                            equipos favoritos.
                        </p>

                        <span>
                            65 conversaciones
                        </span>

                    </div>

                </a>


                <!-- Tema 4 -->

                <a href="Chat/Jugadores.html"
                   class="tema_chat">

                    <div class="icono_tema">
                        👤
                    </div>

                    <div class="informacion_tema">

                        <h2>
                            Jugadores
                        </h2>

                        <p>
                            Habla sobre jugadores actuales,
                            históricos y futuras promesas.
                        </p>

                        <span>
                            43 conversaciones
                        </span>

                    </div>

                </a>


                <!-- Tema 5 -->

                <a href="Chat/Noticias.html"
                   class="tema_chat">

                    <div class="icono_tema">
                        📰
                    </div>

                    <div class="informacion_tema">

                        <h2>
                            Noticias
                        </h2>

                        <p>
                            Comenta las noticias más recientes
                            del mundo del béisbol.
                        </p>

                        <span>
                            38 conversaciones
                        </span>

                    </div>

                </a>


                <!-- Tema 6 -->

                <a href="Chat/Trivia.html"
                   class="tema_chat">

                    <div class="icono_tema">
                        ❓
                    </div>

                    <div class="informacion_tema">

                        <h2>
                            Trivia y datos curiosos
                        </h2>

                        <p>
                            Comparte datos curiosos y demuestra
                            cuánto sabes de béisbol.
                        </p>

                        <span>
                            29 conversaciones
                        </span>

                    </div>

                </a>


            </div>

        </section>

    </main>


   <?php include('Footer.php')?>


    <script src="js/Usuario_pestaña.js"></script>

</body>

</html>
