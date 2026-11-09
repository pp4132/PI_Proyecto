<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rieleros de Aguascalientes</title>

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

    <img src="img/Equipos/Rieleros.png"
         alt="Logo de Rieleros de Aguascalientes">

    <div>

        <h1>Rieleros de Aguascalientes</h1>

        <p>Aguascalientes, Aguascalientes</p>

        <p>Fundado en 1975</p>

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
                Los Rieleros de Aguascalientes son un
                equipo profesional de béisbol que
                representa a la ciudad de Aguascalientes
                dentro de la Liga Mexicana de Beisbol.
            </p>

            <p>
                La organización nació en 1975,
                cuando Aguascalientes recibió una
                franquicia de la Liga Mexicana
                de Beisbol. Su nombre está relacionado
                con la importante tradición ferroviaria
                de la ciudad, que durante décadas
                fue uno de los principales centros
                ferroviarios de México.
            </p>

            <p>
                Desde sus primeros años, el equipo
                comenzó a construir una identidad
                propia entre los aficionados
                hidrocálidos, convirtiéndose en
                uno de los representantes deportivos
                más importantes del estado.
            </p>

            <p>
                Uno de los momentos más importantes
                de su historia llegó en 1978,
                cuando los Rieleros consiguieron
                su primer y hasta ahora único
                campeonato de la Liga Mexicana
                de Beisbol.
            </p>

            <p>
                Después de diferentes etapas,
                cambios de administración y
                ausencias dentro del circuito,
                el equipo tuvo varias interrupciones
                en su participación.
            </p>

            <p>
                Los Rieleros regresaron a la
                Liga Mexicana de Beisbol en 2012,
                recuperando su lugar dentro
                de la Zona Norte.
            </p>

            <p>
                Son conocidos como la Máquina
                Rielera y su mascota es Cornelio,
                un personaje que representa
                la identidad ferroviaria
                del equipo.
            </p>

            <p>
                Sus colores tradicionales
                son el azul y el blanco,
                y representan el orgullo
                deportivo de Aguascalientes.
            </p>

            <p>
                Desde su regreso en 2012,
                la organización ha buscado
                consolidarse como un equipo
                competitivo dentro de la
                Liga Mexicana de Beisbol.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha rieleros.jpg"
                     alt="Parque Alberto Romo Chávez">

                <div>

                    <h3>Parque Alberto Romo Chávez</h3>

                    <p>Aguascalientes, Aguascalientes.</p>

                    <p>
                        Es la casa de los Rieleros
                        de Aguascalientes durante
                        sus encuentros como equipo
                        local en la Liga Mexicana
                        de Beisbol.
                    </p>

                    <p>
                        El inmueble fue inaugurado
                        originalmente en 1946 y
                        comenzó a recibir encuentros
                        de Liga Mexicana de Beisbol
                        en 1975.
                    </p>

                    <p>
                        Cuenta con una capacidad
                        aproximada de 6,500
                        espectadores.
                    </p>

                    <p>
                        El estadio lleva el nombre
                        de Alberto Romo Chávez,
                        personaje relacionado con
                        la historia deportiva
                        de Aguascalientes.
                    </p>

                    <p>
                        También es conocido como
                        el Andén del Romo Chávez,
                        haciendo referencia
                        a la identidad ferroviaria
                        de los Rieleros.
                    </p>

                    <p>
                        Ha sido escenario de
                        importantes encuentros
                        de la Liga Mexicana
                        de Beisbol, incluyendo
                        el Juego de Estrellas
                        de 1984.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Rieleros
                de Aguascalientes correspondiente
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

                    ["Adrián Almeida", 19, ""],
                    ["Cam Robinson", 50, ""],
                    ["Christian Cosby", 79, ""],
                    ["Greg Duncan", 35, ""],
                    ["Harol González", 17, ""],
                    ["Isaac Briones", 64, ""],
                    ["Jimmy Burnette", 24, ""],
                    ["Jonathan Vargas", 37, ""],
                    ["Juan Mercedes", 85, ""],
                    ["Luis Pacheco", 75, ""],
                    ["Nick Trogrlic-Iverson", 29, ""],
                    ["Óscar Cuello", 84, ""],
                    ["Óscar de la Cruz", 49, ""],
                    ["Pablo Téllez", 58, ""],
                    ["Porfirio Guerrero", 81, ""],
                    ["Ronald Medrano", 36, ""]

                ],

                "Receptores" => [

                    ["Aaron Antonini", 5, ""],
                    ["Ángel Reyes", 30, ""],
                    ["Carlos Mendívil", 1, ""],
                    ["David Rodríguez", 79, ""],
                    ["Fernando Villalobos", 3, ""],
                    ["Heber Villalobos", 73, ""]

                ],

                "Jugadores de cuadro" => [

                    ["Ángel Camacho", 15, ""],
                    ["Ángel Erro", 4, ""],
                    ["Gabriel Noriega", 16, ""],
                    ["Jomar Reyes", 2, ""],
                    ["Matt McDermott", 14, ""],
                    ["Matthew Batten", 6, ""]

                ],

                "Jardineros" => [

                    ["Amílcar Gómez", 27, ""],
                    ["José Manuel Orozco", 20, ""],
                    ["Maikel Serrano", 32, ""],
                    ["Sergio Pérez", 47, ""]

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
                        <td>42</td>
                        <td>47</td>
                        <td>.472</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Los Rieleros finalizaron en el
                séptimo lugar de la Zona Norte
                durante la temporada regular 2026.
            </p>

            <p>
                <strong>Campeonatos de LMB:</strong> 1.
            </p>

            <p>
                <strong>Año del campeonato:</strong> 1978.
            </p>

            <p>
                <strong>Último campeonato:</strong> 1978.
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