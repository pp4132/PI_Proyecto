<!DOCTYPE html>
<html lang="en">
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados</title>
        <link rel="stylesheet" href="css/StyleGeneral.css">
        <link rel="stylesheet" href="css/Style_resultados.css">

    </head>
    <body>
        <!--Encabezado principal-->
        <?php include('Header.php')?>

        <main>
            
           <?php include('SideBar&Buttons.php')?>


            <!--Los Resultados-->
            <section class="seccion_resultados">

                <h1>Resultados</h1>

                <div class="contenedor_resultados">

                    <!-- Partido 1 -->

                    <div class="tarjeta_resultado">

                        <div class="cabecera_resultado">

                            <span>
                                19 de agosto de 2026
                            </span>

                            <strong>
                                FINAL
                            </strong>

                        </div>


                        <div class="equipos_resultado">

                            <div class="equipo_resultado">

                                <img
                                    src="img/Equipos/Sultanes.svg"
                                    alt="Sultanes de Monterrey"
                                >

                                <h2>
                                    Sultanes de Monterrey
                                </h2>

                                <span class="marcador ganador">
                                    5
                                </span>

                            </div>


                            <span class="separador">
                                -
                            </span>


                            <div class="equipo_resultado">

                                <img
                                    src="img/Equipos/Acereros.svg"
                                    alt="Acereros de Monclova"
                                >

                                <h2>
                                    Acereros de Monclova
                                </h2>

                                <span class="marcador">
                                    3
                                </span>

                            </div>

                        </div>


                        <div class="estadio_resultado">

                            Estadio Mobil Super

                        </div>

                    </div>


                    <!-- Partido 2 -->

                    <div class="tarjeta_resultado">

                        <div class="cabecera_resultado">

                            <span>
                                18 de agosto de 2026
                            </span>

                            <strong>
                                FINAL
                            </strong>

                        </div>


                        <div class="equipos_resultado">

                            <div class="equipo_resultado">

                                <img
                                    src="img/Equipos/Saraperos.jpg"
                                    alt="Saraperos de Saltillo"
                                >

                                <h2>
                                    Saraperos de Saltillo
                                </h2>

                                <span class="marcador">
                                    2
                                </span>

                            </div>


                            <span class="separador">
                                -
                            </span>


                            <div class="equipo_resultado">

                                <img
                                    src="img/Equipos/Algodoneros.svg"
                                    alt="Algodoneros del Unión Laguna"
                                >

                                <h2>
                                    Algodoneros del Unión Laguna
                                </h2>

                                <span class="marcador ganador">
                                    6
                                </span>

                            </div>

                        </div>


                        <div class="estadio_resultado">

                            Estadio Francisco I. Madero

                        </div>

                    </div>

                </div>

            </section>
        
        </main>

        <?php include('Footer.php')?>

        <script src="js/Usuario_pestaña.js"></script>
    </body>
</html>
