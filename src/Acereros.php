<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acereros de Monclova</title>

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

    <img src="img/Equipos/Acereros.svg"
         alt="Logo de Acereros de Monclova">

    <div>

        <h1>Acereros de Monclova</h1>

        <p>Monclova, Coahuila</p>

        <p>Fundado como equipo: 1980</p>

        <p>1 campeonato de LMB</p>

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
                Los Acereros de Monclova son un equipo
                profesional de béisbol que representa
                a la ciudad de Monclova, Coahuila,
                dentro de la Liga Mexicana de Beisbol.
            </p>

            <p>
                La historia del béisbol profesional
                en Monclova comenzó en 1974, gracias
                a las gestiones del empresario Harold
                R. Pape y Salvador Benavides Pedroza.
                En aquel entonces, la ciudad recibió
                encuentros de los Mineros de Coahuila,
                que también jugaban en Sabinas.
            </p>

            <p>
                El 16 de marzo de 1975 fue inaugurado
                el Estadio Monclova. Posteriormente,
                en 1980, el equipo adoptó oficialmente
                el nombre de Acereros de Monclova,
                identificándose con la actividad
                industrial de la ciudad.
            </p>

            <p>
                En 1982 la organización participó
                temporalmente bajo el nombre de
                Astros de Monclova. Finalmente,
                en 1983 regresó el nombre de
                Acereros, identidad que se ha
                mantenido desde entonces.
            </p>

            <p>
                Durante 1992 comenzó una nueva etapa
                administrativa con la llegada del
                Grupo Acerero del Norte, que impulsó
                el crecimiento de la organización.
            </p>

            <p>
                En febrero de 2017, Gerardo Benavides
                Pape adquirió el equipo, dando inicio
                a una nueva etapa deportiva y
                administrativa.
            </p>

            <p>
                Uno de los momentos más importantes
                de su historia llegó en 2019,
                cuando consiguieron su primer
                campeonato de la Liga Mexicana
                de Beisbol.
            </p>

            <p>
                Durante aquella postemporada,
                los Acereros superaron a Sultanes
                de Monterrey, Toros de Tijuana
                y Leones de Yucatán para conquistar
                la Serie del Rey.
            </p>

            <p>
                Son conocidos como la Furia Azul
                y representan el orgullo industrial
                de Monclova. Sus colores tradicionales
                son el azul y el blanco.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha acereros.jpg"
                     alt="Estadio Kickapoo Lucky Eagle">

                <div>

                    <h3>Estadio Kickapoo Lucky Eagle</h3>

                    <p>Monclova, Coahuila.</p>

                    <p>
                        Es la casa de los Acereros
                        de Monclova durante sus
                        encuentros como equipo local
                        en la Liga Mexicana de Beisbol.
                    </p>

                    <p>
                        El inmueble fue inaugurado
                        el 16 de marzo de 1975,
                        originalmente bajo el nombre
                        de Estadio Monclova.
                    </p>

                    <p>
                        Cuenta con una capacidad
                        aproximada de 8,500 espectadores.
                    </p>

                    <p>
                        A lo largo de su historia
                        ha sido escenario de tres
                        Series Finales de la Liga
                        Mexicana de Beisbol y
                        diversos acontecimientos
                        importantes para la afición.
                    </p>

                    <p>
                        Actualmente es conocido
                        como Estadio Kickapoo Lucky Eagle.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Acereros
                de Monclova correspondiente al
                roster publicado para la temporada
                2026 de la Liga Mexicana de Beisbol.
            </p>

            <p>
                Las fotografías se cargan desde
                direcciones externas. No es necesario
                almacenar las imágenes en el servidor
                de este sitio.
            </p>

            <?php

            $grupos = [

                "Lanzadores" => [

                    ["Amílcar Carreón", 35, ""],
                    ["Ángel Felipe", 53, ""],
                    ["Colten Brewer", 57, ""],
                    ["Edgar Arredondo", 17, ""],
                    ["Estalin Ortiz", 51, ""],
                    ["Ian Churchill", 59, ""],
                    ["Iván Armstrong", 77, ""],
                    ["Jackson Goddard", 32, ""],
                    ["Jake McSteen", 26, ""],
                    ["Jonathan López", 93, ""],
                    ["Jorge Rodríguez", 69, ""],
                    ["Jorge Tavarez", 45, ""],
                    ["Óscar Soria", 75, ""],
                    ["Robinson Martínez", 99, ""],
                    ["Ryley Gilliam", 44, ""],
                    ["Wilmer Ríos", 20, ""]

                ],

                "Receptores" => [

                    ["José Heberto Félix", 92, ""],
                    ["Óscar Jiménez", 71, ""],
                    ["Rusber Estrada", 29, ""]

                ],

                "Jugadores de cuadro" => [

                    ["Abiam Cruz", 19, ""],
                    ["Alan Trejo", 13, ""],
                    ["Aldo Núñez", 55, ""],
                    ["Andretty Cordero", 22, ""],
                    ["Elvin Carrillo", 12, ""],
                    ["Jecksson Flores", 66, ""],
                    ["Juan Mora", 70, ""],
                    ["Ramón Hernández", 41, ""],
                    ["Rodolfo Amador", 48, ""]

                ],

                "Jardineros" => [

                    ["Bryan Corral", 95, ""],
                    ["Leo Heras", 3, ""],
                    ["Magneuris Sierra", 82, ""]

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
                        <td>48</td>
                        <td>45</td>
                        <td>.516</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Los Acereros finalizaron en el
                quinto lugar de la Zona Norte
                durante la temporada regular 2026.
            </p>

            <p>
                El equipo clasificó a la
                postemporada y enfrentó a
                Caliente de Durango en la
                primera ronda.
            </p>

            <p>
                Los Acereros fueron eliminados
                en dicha serie, concluyendo
                su participación en los playoffs.
            </p>

            <p>
                <strong>Campeonatos de LMB:</strong> 1.
            </p>

            <p>
                <strong>Año del campeonato:</strong> 2019.
            </p>

            <p>
                <strong>Último campeonato:</strong> 2019.
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