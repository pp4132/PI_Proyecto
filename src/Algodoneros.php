<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Algodoneros de Unión Laguna</title>

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

    <img src="img/Equipos/Algodoneros.svg"
         alt="Logo de Algodoneros de Unión Laguna">

    <div>

        <h1>Algodoneros de Unión Laguna</h1>

        <p>Torreón, Coahuila</p>

        <p>Fundado en 1940</p>

        <p>2 campeonatos de LMB</p>

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
                Los Algodoneros de Unión Laguna son un
                equipo profesional de béisbol que
                representa a la Comarca Lagunera,
                teniendo como sede la ciudad de
                Torreón, Coahuila.
            </p>

            <p>
                Su historia dentro de la Liga Mexicana
                de Beisbol comenzó en 1940. Desde sus
                primeros años, el equipo se convirtió
                en uno de los representantes más
                importantes del béisbol en el norte
                de México.
            </p>

            <p>
                Los Algodoneros consiguieron su primer
                campeonato de Liga Mexicana en 1942,
                consolidándose como una organización
                competitiva dentro del circuito.
            </p>

            <p>
                Su segundo campeonato llegó en 1950,
                convirtiéndose en uno de los momentos
                más importantes de su historia.
            </p>

            <p>
                A lo largo de los años, la organización
                atravesó diferentes etapas y cambios
                de nombre. Durante un periodo fue
                conocida como Vaqueros Laguna,
                denominación que utilizó entre 2003
                y 2016.
            </p>

            <p>
                Posteriormente, el equipo recuperó
                la identidad de Algodoneros de Unión
                Laguna, nombre con el que regresó
                a representar a la Comarca Lagunera.
            </p>

            <p>
                Son conocidos como la Máquina Guinda,
                debido a sus colores tradicionales
                y a la identidad que los caracteriza.
                Su mascota es el Pollo Algodonero.
            </p>

            <p>
                En 2023 consiguieron el campeonato
                de la Zona Norte, llegando nuevamente
                a una Serie de Campeonato de zona.
            </p>

            <p>
                Los Algodoneros mantienen una de las
                aficiones con mayor tradición dentro
                del béisbol mexicano y continúan
                representando a Torreón en la
                Liga Mexicana de Beisbol.
            </p>

        </section>


        <!-- CANCHA -->
        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha algodoneros.jpg"
                     alt="Estadio de la Revolución">

                <div>

                    <h3>Estadio de la Revolución</h3>

                    <p>Torreón, Coahuila.</p>

                    <p>
                        Es la casa de los Algodoneros
                        de Unión Laguna y uno de los
                        estadios con mayor tradición
                        dentro de la Liga Mexicana
                        de Beisbol.
                    </p>

                    <p>
                        Fue inaugurado el 15 de
                        septiembre de 1932 y desde
                        entonces ha sido un escenario
                        importante para el béisbol
                        de la Comarca Lagunera.
                    </p>

                    <p>
                        Cuenta con una capacidad
                        aproximada de 7,640 espectadores.
                    </p>

                    <p>
                        Se encuentra ubicado en el
                        centro de Torreón, Coahuila.
                    </p>

                    <p>
                        Es considerado uno de los
                        estadios más antiguos que
                        continúan en funcionamiento
                        dentro de la Liga Mexicana
                        de Beisbol.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Algodoneros
                de Unión Laguna correspondiente al
                roster publicado para la temporada
                2026 de la Liga Mexicana de Beisbol.
            </p>

            <p>
                Las fotografías se cargan mediante
                direcciones externas. No es necesario
                guardar las imágenes en el servidor
                de este sitio.
            </p>

            <?php

            $grupos = [

                "Lanzadores" => [

                    ["Aldo Montes", 37, ""],
                    ["Ángel Perdomo", 26, ""],
                    ["Austin Pope", 40, ""],
                    ["Brandon Brennan", 65, ""],
                    ["Eddy Demurias", 31, ""],
                    ["Héctor Pérez", 8, ""],
                    ["Jacob Barnes", 67, ""],
                    ["Luke Albright", 32, ""],
                    ["Lupe Chávez", 98, ""],
                    ["Matt Foster", 80, ""],
                    ["Miguel Vázquez", 56, ""],
                    ["Omar Araujo", 46, ""],
                    ["Roenis Elías", 55, ""],
                    ["Ryan Hendrix", 68, ""],
                    ["Thomas McIlraith", 95, ""],
                    ["Touki Toussaint", 88, ""]

                ],

                "Receptores" => [

                    ["Dean Nevárez", 5, ""],
                    ["Francisco Arcia", 39, ""],
                    ["Jorge Ramírez", 64, ""]

                ],

                "Jugadores de cuadro" => [

                    ["Adrián Tovalín", 99, ""],
                    ["Albert Lara", 62, ""],
                    ["Didi Gregorius", 18, ""],
                    ["Eguy Rosario", 13, ""],
                    ["Isan Díaz", 1, ""],
                    ["Mason Martin", 31, ""]

                ],

                "Jardineros" => [

                    ["Edgar Robles", 66, ""],
                    ["Edward Olivares", 53, ""],
                    ["Je'Von Ward", 36, ""],
                    ["Julián Escobedo", 3, ""],
                    ["Nicholas Torres", 10, ""],
                    ["Valentín Hernández", 54, ""],
                    ["Yadir Drake", 33, ""]

                ]

            ];


            foreach ($grupos as $posicion => $jugadores) {

                echo '<div class="grupo_jugadores">';

                echo '<h3>' .
                    htmlspecialchars($posicion) .
                    '</h3>';

                echo '<div class="contenedor_jugadores">';

                foreach ($jugadores as $jugador) {

                    $nombre = $jugador[0];
                    $numero = $jugador[1];
                    $imagen = $jugador[2];

                    echo '<div class="jugador">';

                    if (!empty($imagen)) {

                        echo '<img
                            src="' . htmlspecialchars($imagen, ENT_QUOTES, 'UTF-8') . '"
                            alt="Fotografía de ' . htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') . '"
                            loading="lazy"
                            onerror="this.style.display=\'none\';this.nextElementSibling.style.display=\'flex\';"
                        >';

                        echo '<div class="sin_fotografia" style="display:none;">
                            Fotografía no disponible
                        </div>';

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

                    echo '<p>Número: ' .
                        htmlspecialchars((string)$numero) .
                        '</p>';

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

            <p>
                Temporada regular 2026 de la
                Liga Mexicana de Beisbol.
            </p>

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
                        <td>46</td>
                        <td>47</td>
                        <td>.495</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Los Algodoneros finalizaron en el
                sexto lugar de la Zona Norte durante
                la temporada regular 2026.
            </p>

            <p>
                <strong>Campeonatos de LMB:</strong> 2.
            </p>

            <p>
                <strong>Años de campeonato:</strong>
                1942 y 1950.
            </p>

            <p>
                <strong>Último campeonato:</strong>
                1950.
            </p>

            <p>
                <strong>Zona:</strong> Norte.
            </p>

        </section>

    </article>

</div>

</main>

<?php include('Footer.php')?>

<script src="js/Usuario_pestaña.js"></script>

</body>
</html>