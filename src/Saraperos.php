<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Saraperos de Saltillo</title>

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

    <img src="img/Equipos/Saraperos.jpg"
         alt="Logo de Saraperos de Saltillo">

    <div>

        <h1>Saraperos de Saltillo</h1>

        <p>Saltillo, Coahuila</p>

        <p>Fundado en 1970</p>

        <p>3 campeonatos de LMB</p>

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
                Los Saraperos de Saltillo son un equipo
                profesional de béisbol que representa
                a la ciudad de Saltillo, Coahuila,
                dentro de la Liga Mexicana de Beisbol.
            </p>

            <p>
                El nacimiento de la organización surgió
                a partir de una reunión del Comité
                Pro-Obras de la Catedral de Saltillo,
                en la que se comenzó a gestionar
                la llegada de una franquicia
                profesional de béisbol a la ciudad.
            </p>

            <p>
                Los Saraperos debutaron en la Liga
                Mexicana de Beisbol el 18 de marzo
                de 1970, enfrentándose a los Sultanes
                de Monterrey en el Parque Cuauhtémoc.
                El equipo saltillense consiguió
                la victoria por marcador de 6-3.
            </p>

            <p>
                Tres días después, el 21 de marzo
                de 1970, disputaron su primer
                encuentro como locales en el
                Estadio Francisco I. Madero,
                derrotando a los Broncos de Reynosa
                por marcador de 9-3.
            </p>

            <p>
                Durante sus primeros años, los
                Saraperos comenzaron a construir
                una importante rivalidad con otros
                equipos del norte del país,
                especialmente con los Sultanes
                de Monterrey, dando origen al
                conocido Clásico del Norte.
            </p>

            <p>
                Uno de los primeros grandes logros
                de la organización llegó en 1980,
                cuando consiguieron su primer
                campeonato de Liga Mexicana
                de Beisbol.
            </p>

            <p>
                Posteriormente, el equipo atravesó
                diferentes etapas deportivas y
                administrativas, manteniéndose
                como una de las organizaciones
                tradicionales del circuito.
            </p>

            <p>
                En 2009 consiguieron su segundo
                campeonato al derrotar a los
                Tigres de Quintana Roo en la
                Serie del Rey.
            </p>

            <p>
                Un año después, en 2010, volvieron
                a conquistar el título, consiguiendo
                el bicampeonato y uno de los
                momentos más importantes de
                su historia.
            </p>

            <p>
                Debido a sus colores tradicionales,
                son conocidos como la Nave Verde.
                Su mascota es Kike Conejo.
            </p>

            <p>
                Actualmente representan a Saltillo
                y al estado de Coahuila dentro
                de la Zona Norte de la Liga
                Mexicana de Beisbol.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha saraperos.jpg"
                     alt="Estadio Francisco I. Madero">

                <div>

                    <h3>Estadio Francisco I. Madero</h3>

                    <p>Saltillo, Coahuila.</p>

                    <p>
                        Es la casa de los Saraperos
                        de Saltillo y uno de los
                        estadios con mayor tradición
                        dentro de la Liga Mexicana
                        de Beisbol.
                    </p>

                    <p>
                        Fue inaugurado el 30 de marzo
                        de 1963 y comenzó a recibir
                        encuentros de Liga Mexicana
                        de Beisbol en 1970.
                    </p>

                    <p>
                        Cuenta con una capacidad
                        aproximada de 11,000
                        espectadores.
                    </p>

                    <p>
                        En este estadio los Saraperos
                        consiguieron sus campeonatos
                        de 2009 y 2010.
                    </p>

                    <p>
                        También ha sido sede de
                        diferentes acontecimientos
                        importantes, incluyendo
                        Juegos de Estrellas de
                        la Liga Mexicana de Beisbol.
                    </p>

                    <p>
                        En 2026 recibió importantes
                        remodelaciones para mejorar
                        las instalaciones y la
                        experiencia de los aficionados.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Saraperos
                de Saltillo correspondiente al
                roster publicado para la temporada
                2026 de la Liga Mexicana de Beisbol.
            </p>

            <p>
                Las fotografías se cargan mediante
                direcciones externas. No es necesario
                almacenar las imágenes en el servidor
                de este sitio.
            </p>

            <?php

            $grupos = [

                "Lanzadores" => [

                    ["Alex Claudio", 57, ""],
                    ["Aníbal Cervantes", 75, ""],
                    ["Daniel Juárez", 97, ""],
                    ["Deolis Guerra", 59, ""],
                    ["Erich Uelmen", 41, ""],
                    ["Jeff Brigham", 40, ""],
                    ["Jesús Cruz", 49, ""],
                    ["Jorge López", 32, ""],
                    ["Luis Frías", 65, ""],
                    ["Luis Payán", 94, ""],
                    ["Matt Givin", 35, ""],
                    ["Óscar Rojas", 11, ""],
                    ["Sergio García-Repper", 83, ""],
                    ["Wilmer Font", 63, ""],
                    ["Zach Mort", 72, ""]

                ],

                "Receptores" => [

                    ["Donny Sands", 2, ""],
                    ["Jorge Morales", 81, ""],
                    ["José Lizárraga", 38, ""],
                    ["Óscar Campos", 36, ""]

                ],

                "Jugadores de cuadro" => [

                    ["Brandon Villarreal", 92, ""],
                    ["Christian Villanueva", 22, ""],
                    ["Cristian Pacheco", 66, ""],
                    ["Emmanuel Rivera", 10, ""],
                    ["Luis Guillorme", 13, ""],
                    ["Niko Vásquez", 15, ""],
                    ["Ramón Ríos", 4, ""],
                    ["Thairo Estrada", 29, ""]

                ],

                "Jardineros" => [

                    ["Fernando Villegas", 8, ""],
                    ["J.P. Martínez", 51, ""],
                    ["Leonardo Delgado", 37, ""],
                    ["Óscar Colás", 24, ""],
                    ["River Town", 48, ""]

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
                        <td>38</td>
                        <td>55</td>
                        <td>.409</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Los Saraperos finalizaron en el
                octavo lugar de la Zona Norte
                durante la temporada regular 2026.
            </p>

            <p>
                El equipo no consiguió clasificar
                a la postemporada de la Liga
                Mexicana de Beisbol.
            </p>

            <p>
                <strong>Campeonatos de LMB:</strong> 3.
            </p>

            <p>
                <strong>Años de campeonato:</strong>
                1980, 2009 y 2010.
            </p>

            <p>
                <strong>Último campeonato:</strong> 2010.
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