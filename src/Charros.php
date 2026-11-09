<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Charros de Jalisco</title>

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

    <img src="img/Equipos/Charros.svg"
         alt="Logo de Charros de Jalisco">

    <div>

        <h1>Charros de Jalisco</h1>

        <p>Zapopan, Jalisco</p>

        <p>Fundado en 1949</p>

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
                Los Charros de Jalisco son un equipo
                profesional de béisbol que representa
                al estado de Jalisco y tiene como
                sede la zona metropolitana de
                Guadalajara.
            </p>

            <p>
                Sus antecedentes se remontan
                a la década de 1940, cuando
                existieron equipos jaliscienses
                que participaron en diferentes
                competencias regionales.
            </p>

            <p>
                La organización adoptó el nombre
                de Charros de Jalisco y comenzó
                su participación en la Liga
                Mexicana de Beisbol en 1949.
            </p>

            <p>
                Durante sus primeras etapas
                dentro de la LMB, el equipo
                representó a Jalisco en diferentes
                temporadas, construyendo una
                importante afición por el
                béisbol en la región.
            </p>

            <p>
                Uno de sus primeros grandes
                logros llegó en 1967, cuando
                consiguieron su primer campeonato
                de Liga Mexicana de Beisbol.
            </p>

            <p>
                Posteriormente, en 1971,
                volvieron a conquistar el título,
                consiguiendo su segundo
                campeonato de LMB.
            </p>

            <p>
                Después de diferentes etapas
                y ausencias dentro del circuito,
                los Charros dejaron de participar
                en la Liga Mexicana de Beisbol
                durante varios años.
            </p>

            <p>
                En 2014 la organización regresó
                al béisbol profesional mexicano,
                esta vez participando en la
                Liga Mexicana del Pacífico,
                donde rápidamente se convirtió
                en un equipo protagonista.
            </p>

            <p>
                En la LMP conquistaron los
                campeonatos de 2018-2019,
                2021-2022 y 2024-2025,
                además de conseguir otros
                importantes logros.
            </p>

            <p>
                En 2024 regresaron a la
                Liga Mexicana de Beisbol
                después de adquirir la franquicia
                de Mariachis de Guadalajara.
            </p>

            <p>
                En su regreso a la LMB,
                consiguieron llegar a la
                Serie del Rey de 2025,
                después de conquistar
                el campeonato de la Zona Norte.
            </p>

            <p>
                Son conocidos por su uniforme
                azul y blanco, inspirado en
                la tradicional vestimenta
                de los charros mexicanos.
            </p>

            <p>
                Actualmente participan tanto
                en la Liga Mexicana de Beisbol
                como en la Liga Mexicana
                del Pacífico.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha charros.jpg"
                     alt="Estadio Panamericano de Charros">

                <div>

                    <h3>Estadio Panamericano</h3>

                    <p>Zapopan, Jalisco.</p>

                    <p>
                        Es la casa de los Charros
                        de Jalisco durante sus
                        encuentros como equipo
                        local.
                    </p>

                    <p>
                        El estadio fue inaugurado
                        en octubre de 2011 y
                        originalmente fue construido
                        para albergar competencias
                        de béisbol durante los
                        Juegos Panamericanos
                        de Guadalajara 2011.
                    </p>

                    <p>
                        Cuenta con una capacidad
                        aproximada de 16,500
                        espectadores.
                    </p>

                    <p>
                        Se encuentra ubicado
                        en Zapopan, dentro
                        de la zona metropolitana
                        de Guadalajara.
                    </p>

                    <p>
                        El inmueble ha recibido
                        encuentros importantes
                        de la Liga Mexicana
                        del Pacífico y de la
                        Liga Mexicana de Beisbol.
                    </p>

                    <p>
                        También fue escenario
                        de importantes competencias
                        internacionales, incluyendo
                        la Serie del Caribe
                        de 2018 y 2026.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Charros
                de Jalisco correspondiente al
                roster inaugural de la temporada
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

                    ["Austin Puckett", null, ""],
                    ["Zach Plesac", null, ""],
                    ["Luis Iván Rodríguez", null, ""],
                    ["Rafael Córdova", null, ""],
                    ["Kurt Heyer", null, ""],
                    ["Elkin Alcalá", null, ""],
                    ["Zach Grotz", null, ""],
                    ["José Montijo", null, ""],
                    ["Stephen Gonsalves", null, ""],
                    ["Josh Green", null, ""],
                    ["Aaron McGarity", null, ""],
                    ["César Gómez", null, ""],
                    ["Juan Robles", null, ""],
                    ["Luis Payán", null, ""],
                    ["Miguel Aguilar", null, ""]

                ],

                "Receptores" => [

                    ["Alfredo Hurtado", null, ""],
                    ["Jesús Córdova", null, ""],
                    ["Donny Sands", null, ""]

                ],

                "Jugadores de cuadro" => [

                    ["Luis Carlos Martínez", null, ""],
                    ["Irving López", null, ""],
                    ["Hugo Sánchez", null, ""],
                    ["Mateo Gil", null, ""],
                    ["Willie Calhoun", null, ""],
                    ["Joshua Fuentes", null, ""],
                    ["Kyle Garlick", null, ""]

                ],

                "Jardineros" => [

                    ["José Aguilar", null, ""],
                    ["Billy Hamilton", null, ""],
                    ["Johneshwy Fargas", null, ""],
                    ["Allen Córdoba", null, ""],
                    ["Jared Walsh", null, ""],
                    ["Alejandro Quezada", null, ""]

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

                    if ($numero !== null) {

                        echo '<p>Número: ' .
                            htmlspecialchars((string)$numero) .
                            '</p>';

                    }

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
                Los Charros finalizaron en
                el cuarto lugar de la Zona Norte
                durante la temporada regular
                2026, con 48 victorias y
                45 derrotas.
            </p>

            <p>
                Durante la postemporada
                consiguieron avanzar hasta
                las Series de Zona, donde
                fueron eliminados por
                los Toros de Tijuana.
            </p>

            <p>
                <strong>Campeonatos de LMB:</strong> 2.
            </p>

            <p>
                <strong>Años de campeonato:</strong>
                1967 y 1971.
            </p>

            <p>
                <strong>Último campeonato de LMB:</strong>
                1971.
            </p>

            <p>
                <strong>Campeonatos de LMP:</strong> 3.

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