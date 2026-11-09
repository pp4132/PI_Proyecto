<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tecos de los Dos Laredos</title>

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

    <img src="img/Equipos/Tecolotes.png"
         alt="Logo de Tecos de los Dos Laredos">

    <div>

        <h1>Tecos de los Dos Laredos</h1>

        <p>Nuevo Laredo, Tamaulipas / Laredo, Texas</p>

        <p>Fundado en 1940</p>

        <p>6 campeonatos de LMB</p>

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
                Los Tecos de los Dos Laredos son
                un equipo profesional de béisbol
                que representa a las ciudades
                fronterizas de Nuevo Laredo,
                Tamaulipas, y Laredo, Texas.
            </p>

            <p>
                Su historia comenzó en 1940,
                cuando participaron por primera
                vez en la Liga Mexicana de Beisbol
                bajo el nombre de La Junta
                de Nuevo Laredo.
            </p>

            <p>
                El nombre original hacía referencia
                a la Junta Federal de Mejoras
                Materiales, institución relacionada
                con las obras públicas de la ciudad.
            </p>

            <p>
                En 1949 el equipo adoptó el nombre
                de Tecolotes de Nuevo Laredo,
                denominación con la que comenzó
                a construir una identidad propia
                dentro del béisbol mexicano.
            </p>

            <p>
                A lo largo de su historia,
                los Tecolotes han conseguido
                seis campeonatos de Liga Mexicana
                de Beisbol, obtenidos en 1953,
                1954, 1958, 1977, 1989 y 2008.
            </p>

            <p>
                Uno de los acontecimientos más
                importantes llegó en 1985,
                cuando la organización se convirtió
                en el primer equipo de la Liga
                Mexicana de Beisbol en disputar
                sus encuentros en dos países:
                México y Estados Unidos.
            </p>

            <p>
                Desde entonces adoptaron el nombre
                de Tecolotes de los Dos Laredos,
                representando a ambas ciudades
                fronterizas.
            </p>

            <p>
                El equipo ha utilizado diferentes
                estadios a lo largo de su historia,
                manteniendo una identidad binacional
                que lo distingue del resto
                de las organizaciones de la LMB.
            </p>

            <p>
                Son conocidos como los Tecos
                y su mascota es un tecolote.
                Sus colores tradicionales
                son el azul y el blanco.
            </p>

            <p>
                Actualmente continúan participando
                en la Zona Norte de la Liga
                Mexicana de Beisbol.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha tecos.jpg"
                     alt="Parque La Junta de Nuevo Laredo">

                <div>

                    <h3>Parque La Junta</h3>

                    <p>Nuevo Laredo, Tamaulipas.</p>

                    <p>
                        Es uno de los estadios
                        históricos de los Tecos
                        de los Dos Laredos y
                        representa una parte
                        importante de la identidad
                        del equipo.
                    </p>

                    <p>
                        Fue el escenario donde
                        la organización comenzó
                        su historia en la Liga
                        Mexicana de Beisbol
                        en 1940.
                    </p>

                    <p>
                        El parque se encuentra
                        ubicado en Nuevo Laredo,
                        Tamaulipas, y continúa
                        formando parte de los
                        escenarios utilizados
                        por la organización.
                    </p>

                    <p>
                        La capacidad y las
                        instalaciones han tenido
                        modificaciones a lo largo
                        de los años.
                    </p>

                    <h3>Uni-Trade Stadium</h3>

                    <p>Laredo, Texas, Estados Unidos.</p>

                    <p>
                        Es el segundo estadio
                        utilizado por los Tecos
                        de los Dos Laredos para
                        disputar sus encuentros
                        como equipo local.
                    </p>

                    <p>
                        Fue inaugurado en 2012
                        y cuenta con una capacidad
                        aproximada de 6,000
                        espectadores.
                    </p>

                    <p>
                        Su ubicación en territorio
                        estadounidense permite
                        que la organización mantenga
                        su característica identidad
                        binacional.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Tecos
                de los Dos Laredos correspondiente
                al roster publicado para la
                temporada 2026 de la Liga
                Mexicana de Beisbol.
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

                    ["Adolfo Ramírez", 6, ""],
                    ["Adrián De Horta", 18, ""],
                    ["Carlos Contreras", 12, ""],
                    ["Darío Gardea", 50, ""],
                    ["Diego Hernández", 94, ""],
                    ["Drew Parrish", 82, ""],
                    ["Erick Rodríguez", 49, ""],
                    ["Franklyn Kilome", 53, ""],
                    ["Gil Luna", 39, ""],
                    ["Jackson Rees", 40, ""],
                    ["Jonathan Haab", 25, ""],
                    ["Leam Méndez", 13, ""],
                    ["Michael Gómez", 5, ""],
                    ["Nate Antone", 71, ""],
                    ["Ricardo Chapa", 30, ""],
                    ["Taylor Williams", 54, ""],
                    ["Tyler Ivey", 45, ""]

                ],

                "Receptores" => [

                    ["Alejandro Flores", 7, ""],
                    ["Eduardo Luna", 77, ""],
                    ["Francisco Córdoba", 44, ""]

                ],

                "Jugadores de cuadro" => [

                    ["Alan López", 65, ""],
                    ["Ali Castillo", 22, ""],
                    ["Jonathan Araúz", 24, ""],
                    ["José Rodríguez", 3, ""],
                    ["Luis De Los Santos", 23, ""],
                    ["Marcos Valenzuela", 86, ""]

                ],

                "Jardineros" => [

                    ["Cade Gotta", 99, ""],
                    ["Miles Simington", 75, ""],
                    ["Ryan Aguilar", 11, ""],
                    ["Yoelqui Céspedes", 37, ""],
                    ["Zoilo Almonte", 81, ""]

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
                        <td>36</td>
                        <td>57</td>
                        <td>.387</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Los Tecos finalizaron en el
                noveno lugar de la Zona Norte
                durante la temporada regular 2026.
            </p>

            <p>
                El equipo no consiguió clasificar
                a la postemporada de la Liga
                Mexicana de Beisbol.
            </p>

            <p>
                <strong>Campeonatos de LMB:</strong> 6.
            </p>

            <p>
                <strong>Años de campeonato:</strong>
                1953, 1954, 1958, 1977, 1989 y 2008.
            </p>

            <p>
                <strong>Último campeonato:</strong> 2008.
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