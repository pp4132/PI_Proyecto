
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sultanes de Monterrey</title>

    <link rel="stylesheet" href="css/StyleGeneral.css">
    <link rel="stylesheet" href="css/StyleEquipo.css">

</head>

<body>

<?php include('Header.php')?>

<main>

<?php include('SideBar&Buttons.php')?>

<a href="Trivias.php" class="boton_trivia" title="Trivia">
    ❓
</a>

<!-- PRESENTACIÓN -->

<section class="presentacion_equipo">

    <img src="img/Equipos/Sultanes.svg"
         alt="Logo de Sultanes de Monterrey">

    <div>

        <h1>Sultanes de Monterrey</h1>

        <p>Monterrey, Nuevo León</p>

        <p>Fundado el 20 de mayo de 1939</p>

        <p>10 campeonatos de LMB</p>

    </div>

</section>


<div class="contenido_equipo">

    <!-- ÍNDICE -->

    <aside class="indice_equipo">

        <h2>Índice</h2>

        <a href="#historia">Historia</a>
        <a href="#cancha">Cancha</a>
        <a href="#jugadores">Jugadores</a>
        <a href="#estadisticas">Estadísticas</a>

    </aside>


    <article class="informacion_equipo">

        <!-- HISTORIA -->

        <section id="historia">

            <h2>Historia</h2>

            <p>
                Los Sultanes de Monterrey fueron fundados el
                20 de mayo de 1939. Son uno de los equipos con
                mayor tradición dentro de la Liga Mexicana
                de Beisbol.
            </p>

            <p>
                Originalmente fueron conocidos como Carta
                Blanca de Monterrey. Con el paso del tiempo
                adoptaron el nombre de Sultanes, convirtiéndose
                en uno de los equipos más representativos
                del norte de México.
            </p>

            <p>
                El equipo cuenta con diez campeonatos de Liga
                Mexicana de Beisbol. Entre sus títulos más
                importantes destacan los obtenidos en 1947,
                1948, 1949, 1962, 1991, 1995, 1996, 2007
                y 2018, además de otros campeonatos históricos.
            </p>

            <p>
                Son conocidos como los Fantasmas Grises y
                representan a la ciudad de Monterrey,
                Nuevo León.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha sultanes.jpg"
                     alt="Walmart Park">

                <div>

                    <h3>Walmart Park</h3>

                    <p>Monterrey, Nuevo León.</p>

                    <p>
                        Estadio inaugurado en 1990, donde
                        los Sultanes disputan sus encuentros
                        como equipo local.
                    </p>

                    <p>
                        Cuenta con capacidad aproximada
                        de 22,078 espectadores.
                    </p>

                    <p>
                        Anteriormente fue conocido como
                        Estadio Monterrey y Estadio Mobil Super.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->
        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Sultanes de Monterrey.
                Las fotografías corresponden a imágenes oficiales
                alojadas externamente.
            </p>

            <?php

            $grupos = [

                "Lanzadores" => [

                    ["Juan Gámez", 43, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a7fe8c5dd5a1bbbe&width=400"],
                    ["Manny Bañuelos", 92, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020c999561ced42&width=400"],
                    ["Jesús Pirela", 41, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020dfbb111a60fb&width=400"],
                    ["Alexis Vera", 28, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a0213be43957f60e&width=400"],
                    ["Daniel Cruz", 80, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a02127372dd9d70e&width=400"],
                    ["Joe Riley", 99, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/69e678e1395fd6097&width=400"],
                    ["José Miranda", 64, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a7530503383ffac2&width=400"],
                    ["Richard Rodríguez", 48, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a0209e5c0bfecf6e&width=400"],
                    ["Alonso Becerra", 66, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a147fbcd73ee5d45&width=400"],
                    ["Oliver Ortega", 44, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a233aaf5bc7ffd70&width=400"],
                    ["Chris Ellis", 75, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a147fee05afb7fb7&width=400"],
                    ["Gerónimo Franzua", 97, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a0215b78ed0d9efe&width=400"],
                    ["Daniel Mengden", 73, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a56c5a7cae8c5a9a&width=400"],
                    ["Justus Sheffield", 61, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020d0cc9db4bfd7&width=400"],
                    ["Ronaldo Alesandro", 54, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a02099282c986157&width=400"],
                    ["Geovani Lucero", 82, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a7273e8234afa279&width=400"],
                    ["Jacob Higginbotham", 12, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020e6a093cb9df0&width=400"],
                    ["Alejandro Castro", 46, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a0213e1028eb2b61&width=400"],
                    ["Manuel Urías", 18, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a039f1d54c7bd3b4&width=400"],
                    ["Junior Fernández", 97, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a726d2aa8dd6a5f3&width=400"]
                ],

                "Receptores" => [

                    ["Omar Rentería", 40, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020b5c6a7102487&width=400"],
                    ["Carlos Soto", 8, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a02133272553f045&width=400"],
                    ["Ricardo Genovés", 39, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020a191bab05671&width=400"],
                    ["Omar Narváez", 38, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020b87ae1f5b8b9&width=400"]

                ],

                "Jugadores de cuadro" => [

                    ["Ramiro Peña", 19, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020ae209540cd34&width=400"],
                    ["Luis Santos", 62, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020cdb2af27e44f&width=400"],
                    ["Víctor Mendoza", 25, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a02080384feed0c1&width=400"],
                    ["Javier Salazar", 2, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020e3d877b44caf&width=400"],
                    ["Johan López", 3, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020da34e58076d4&width=400"],
                    ["Yonny Hernández", 29, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a726d4c7103f35a7&width=400"],
                    ["Josh Lester", 58, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a020d4108ba42cc2&width=400"],
                    ["Maikel Franco", 65, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a45ad0ecf266846a&width=400"]
                ],

                "Jardineros" => [

                    ["Héctor Jacquez", 79, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a0210cbb8f76733a&width=400"],
                    ["Harold Ramírez", 45, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a56c5bcb12002341&width=400"],
                    ["Sócrates Brito", 30, "https://imgopt.sportsmanager.tv/?url=https://da1m5e30jl2p8.cloudfront.net/6a02095abd8f35a34&width=400"]

                ]

            ];

            foreach ($grupos as $posicion => $jugadores) {

                echo '<div class="grupo_jugadores">';

                echo '<h3>' . htmlspecialchars($posicion) . '</h3>';

                echo '<div class="contenedor_jugadores">';

                foreach ($jugadores as $jugador) {

                    $nombre = $jugador[0];
                    $numero = $jugador[1];
                    $imagen = $jugador[2];

                    echo '<div class="jugador">';

                    if (!empty($imagen)) {

                        echo '<img
                            src="' . htmlspecialchars($imagen) . '"
                            alt="' . htmlspecialchars($nombre) . '"
                            loading="lazy"
                        >';

                    } else {

                        echo '<div class="sin_fotografia">
                            Fotografía pendiente
                        </div>';

                    }

                    echo '<h4>' .
                        htmlspecialchars($nombre) .
                        '</h4>';

                    echo '<p>' .
                        htmlspecialchars($posicion) .
                        '</p>';

                    echo '<p>Número: ' . $numero . '</p>';

                    echo '</div>';

                }

                echo '</div>';

                echo '</div>';

            }

            ?>

        </section>



        <!-- ESTADÍSTICAS -->

        <section id="estadisticas">

            <h2>Estadísticas</h2>

            <p>Temporada regular 2026 de LMB.</p>

            <table>

                <thead>

                    <tr>
                        <th>Temporada</th>
                        <th>JG</th>
                        <th>JP</th>
                        <th>%</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>2026</td>
                        <td>49</td>
                        <td>44</td>
                        <td>.527</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Los Sultanes finalizaron en el tercer lugar
                de la Zona Norte durante la temporada regular
                2026 y llegaron a la Serie de Campeonato
                de su zona.
            </p>

            <p>
                <strong>Campeonatos:</strong> 10.
            </p>

            <p>
                <strong>Último campeonato:</strong> 2018.
            </p>

        </section>

    </article>

</div>

</main>

<?php include('Footer.php')?>

<script src="js/Usuario_pestaña.js"></script>

</body>
</html>
