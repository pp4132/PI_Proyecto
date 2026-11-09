<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Caliente de Durango</title>

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

    <img src="img/Equipos/Caliente.svg"
         alt="Logo de Caliente de Durango">

    <div>

        <h1>Caliente de Durango</h1>

        <p>Durango, Durango</p>

        <p>Fundado el 19 de marzo de 2024</p>

        <p>0 campeonatos de LMB</p>

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
                Caliente de Durango es un equipo profesional
                de béisbol que representa a la ciudad de
                Durango dentro de la Liga Mexicana de
                Beisbol.
            </p>

            <p>
                La organización fue presentada oficialmente
                el 19 de marzo de 2024, después de que
                Grupo Caliente adquiriera una nueva franquicia
                para mantener el béisbol profesional en
                la capital duranguense.
            </p>

            <p>
                Su llegada ocurrió tras la suspensión
                de los Generales de Durango, equipo que
                había participado en la LMB entre 2017
                y 2023. Caliente tomó el lugar de la
                organización anterior y permitió que
                Durango continuara teniendo representación
                en el circuito.
            </p>

            <p>
                El equipo debutó en la temporada 2024
                de la Liga Mexicana de Beisbol. Su primer
                encuentro fue contra los Saraperos de
                Saltillo, el 12 de abril de ese año.
            </p>

            <p>
                La historia del béisbol profesional
                en Durango es anterior a la creación
                de Caliente. Entre sus antecedentes
                destacan los Alacranes de Durango,
                que participaron en la LMB de 1976
                a 1979, y posteriormente los Generales.
            </p>

            <p>
                Los colores representativos de Caliente
                son el rojo y el negro. La organización
                busca consolidarse como uno de los
                equipos protagonistas de la Zona Norte.
            </p>

            <p>
                En la temporada 2026 consiguió una
                destacada participación al finalizar
                en el segundo lugar de la Zona Norte
                y avanzar hasta las Series de Zona.
            </p>

            <p>
                Hasta la temporada 2026, Caliente
                de Durango no ha conseguido un
                campeonato de la Liga Mexicana
                de Beisbol.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha caliente.jpg"
                     alt="Estadio Francisco Villa">

                <div>

                    <h3>Estadio Francisco Villa</h3>

                    <p>Durango, Durango.</p>

                    <p>
                        Es la casa de Caliente de Durango
                        durante sus encuentros como equipo
                        local en la Liga Mexicana de Beisbol.
                    </p>

                    <p>
                        También es conocido como
                        El Volcán de Villa, debido a
                        la pasión de su afición y al
                        ambiente que se vive durante
                        los encuentros.
                    </p>

                    <p>
                        El estadio fue inaugurado en
                        1972 y cuenta con una capacidad
                        aproximada de 5,000 espectadores.
                    </p>

                    <p>
                        Se encuentra ubicado en la ciudad
                        de Durango y es uno de los
                        escenarios deportivos más
                        representativos del estado.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Caliente
                de Durango correspondiente a la
                temporada 2026 de la Liga Mexicana
                de Beisbol.
            </p>

            <p>
                Las fotografías se cargan desde
                direcciones externas. No es necesario
                guardar las imágenes en el servidor
                de este sitio.
            </p>

            <?php

            $grupos = [

                "Lanzadores" => [

                    ["Derek West", 23, ""],
                    ["Devin Smeltzer", 76, ""],
                    ["Erick Casillas", 100, ""],
                    ["Helcris Olivárez", 3, ""],
                    ["Jake Sanchez", 47, ""],
                    ["Joan Adon", 20, ""],
                    ["Joe Corbett", 51, ""],
                    ["Jorge García", 15, ""],
                    ["Jorge Sauceda", 59, ""],
                    ["Manuel Chávez", 43, ""],
                    ["Néstor Anguamea", 87, ""],
                    ["Odrisamer Despaigne", 40, ""],
                    ["Scott Engler", 37, ""],
                    ["Spencer Turnbull", 31, ""],
                    ["Taylor Lehman", 89, ""]

                ],

                "Receptores" => [

                    ["Christopher Escárrega", 61, ""],
                    ["Julián León", 44, ""]

                ],

                "Jugadores de cuadro" => [

                    ["C.J. Hinojosa", 14, ""],
                    ["Drew Stankiewicz", 90, ""],
                    ["Jonathan Villar", 2, ""],
                    ["José Álvarez", 91, ""],
                    ["José Guadalupe Chávez", 9, ""],
                    ["Leobaldo Piña", 53, ""],
                    ["Reynaldo Rodríguez", 17, ""],
                    ["Víctor Márquez", 16, ""],
                    ["Webster Rivas", 27, ""],
                    ["Yariel González", 5, ""]

                ],

                "Jardineros" => [

                    ["Ángel Orozco", 25, ""],
                    ["José Carlos Ureña", 72, ""],
                    ["Daniel Johnson", 7, ""],
                    ["Estevan Florial", 10, ""],
                    ["Antonio Castañeda", 22, ""]

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
                        <td>51</td>
                        <td>42</td>
                        <td>.548</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Caliente de Durango finalizó en el
                segundo lugar de la Zona Norte
                durante la temporada regular 2026.
            </p>

            <p>
                El equipo consiguió avanzar a los
                playoffs y superar la primera ronda
                ante los Acereros de Monclova.
            </p>

            <p>
                Posteriormente llegó a las Series
                de Zona, donde enfrentó a los
                Sultanes de Monterrey.
            </p>

            <p>
                <strong>Campeonatos:</strong> 0.
            </p>

            <p>
                <strong>Última participación en playoffs:</strong>
                2026.
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