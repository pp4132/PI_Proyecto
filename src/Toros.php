<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Toros de Tijuana</title>

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

    <img src="img/Equipos/Toros.png"
         alt="Logo de Toros de Tijuana">

    <div>

        <h1>Toros de Tijuana</h1>

        <p>Tijuana, Baja California</p>

        <p>Fundado en 2004</p>

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
                Los Toros de Tijuana son un equipo
                profesional de béisbol que representa
                a la ciudad de Tijuana, Baja California,
                dentro de la Liga Mexicana de Beisbol.
            </p>

            <p>
                La primera etapa de la organización
                comenzó en 2004, cuando Tijuana
                recibió una franquicia para participar
                en la Liga Mexicana de Beisbol.
            </p>

            <p>
                Sin embargo, después de disputar
                aquella temporada, la franquicia
                cambió de sede y posteriormente
                adoptó otras denominaciones,
                entre ellas Potros de Tijuana
                y Broncos de Reynosa.
            </p>

            <p>
                La etapa actual de los Toros
                comenzó en 2014, cuando la
                franquicia regresó a Tijuana
                procedente de Minatitlán,
                Veracruz.
            </p>

            <p>
                Desde su regreso, el equipo
                comenzó a consolidarse como
                una de las organizaciones
                competitivas de la Zona Norte.
            </p>

            <p>
                En 2016 consiguió su primer
                campeonato de la Zona Norte,
                llegando a la Serie del Rey,
                aunque no pudo conseguir
                el título de liga.
            </p>

            <p>
                En 2017 llegó uno de los
                momentos más importantes
                de su historia, cuando los
                Toros conquistaron su primer
                campeonato de Liga Mexicana
                de Beisbol al derrotar a
                los Pericos de Puebla.
            </p>

            <p>
                En 2021 volvieron a conquistar
                el campeonato, derrotando
                a los Leones de Yucatán
                en la Serie del Rey.
            </p>

            <p>
                En 2026 consiguieron su tercer
                campeonato de Liga Mexicana
                de Beisbol, después de una
                destacada temporada regular
                y una gran participación
                en la postemporada.
            </p>

            <p>
                Los Toros son conocidos como
                los Astados y su mascota
                representa precisamente
                a un toro.
            </p>

            <p>
                Sus colores tradicionales
                son el rojo, negro y blanco,
                y representan el orgullo
                deportivo de Tijuana.
            </p>

            <p>
                Actualmente son una de las
                organizaciones protagonistas
                de la Zona Norte de la
                Liga Mexicana de Beisbol.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha toros.jpg"
                     alt="Estadio de Toros de Tijuana">

                <div>

                    <h3>Toros Mobil Park</h3>

                    <p>Tijuana, Baja California.</p>

                    <p>
                        Es la casa de los Toros
                        de Tijuana y uno de los
                        estadios más importantes
                        de la Liga Mexicana
                        de Beisbol.
                    </p>

                    <p>
                        El inmueble fue inaugurado
                        en 2004 y ha tenido
                        diferentes denominaciones
                        comerciales a lo largo
                        de su historia.
                    </p>

                    <p>
                        También es conocido como
                        Estadio Chevron.
                    </p>

                    <p>
                        Cuenta con una capacidad
                        aproximada de 17,000
                        espectadores.
                    </p>

                    <p>
                        El estadio se encuentra
                        ubicado en la zona de
                        Cerro Colorado, en Tijuana.
                    </p>

                    <p>
                        Ha sido escenario de
                        importantes encuentros
                        de postemporada, incluyendo
                        las celebraciones de los
                        campeonatos de 2017,
                        2021 y 2026.
                    </p>

                    <p>
                        Su ambiente y la afición
                        tijuanense lo convierten
                        en uno de los escenarios
                        más representativos
                        del béisbol mexicano.
                    </p>

                </div>

            </div>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Toros
                de Tijuana correspondiente al
                roster publicado para la
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

                    ["Adbert Alzolay", 73, ""],
                    ["Adonis Medina", 18, ""],
                    ["Brady Feigl", 23, ""],
                    ["Brett de Geus", 63, ""],
                    ["David Reyes", 40, ""],
                    ["Enny Romero", 16, ""],
                    ["Florencio Serrano", 51, ""],
                    ["Jonathan Aro", 49, ""],
                    ["Jorge Pérez", 35, ""],
                    ["Juan Hillman", 11, ""],
                    ["Luis Márquez", 29, ""],
                    ["Mario Meza", 50, ""],
                    ["Miguel Díaz", 45, ""],
                    ["Noah Skirrow", 32, ""],
                    ["Roel Ramírez", 53, ""]

                ],

                "Receptores" => [

                    ["Ali Solís", 4, ""],
                    ["Luis Amador", 60, ""],
                    ["Sergio Burruel", 12, ""],
                    ["Tomás Telis", 20, ""]

                ],

                "Jugadores de cuadro" => [

                    ["Abraham Favela", 58, ""],
                    ["Hernán Pérez", 14, ""],
                    ["Isaac Rodríguez", 74, ""],
                    ["Jack Mayfield", 25, ""],
                    ["Jonathan Guzmán", 7, ""],
                    ["Justin Turner", 10, ""],
                    ["Phillip Evans", 26, ""],
                    ["Wilmer Flores", 41, ""]

                ],

                "Jardineros" => [

                    ["Edson García", 99, ""],
                    ["Franchy Cordero", 38, ""],
                    ["Francisco Lugo", 43, ""],
                    ["Gilberto Celestino", 2, ""],
                    ["Junior Lake", 27, ""]

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
                        <td>60</td>
                        <td>31</td>
                        <td>.659</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Los Toros finalizaron en el
                primer lugar de la Zona Norte
                durante la temporada regular
                2026, con 60 victorias y
                31 derrotas.
            </p>

            <p>
                Posteriormente conquistaron
                el campeonato de la Zona Norte
                y consiguieron llegar a la
                Serie del Rey.
            </p>

            <p>
                En la Serie del Rey 2026
                consiguieron su tercer
                campeonato de Liga Mexicana
                de Beisbol.
            </p>

            <p>
                <strong>Campeonatos de LMB:</strong> 3.
            </p>

            <p>
                <strong>Años de campeonato:</strong>
                2017, 2021 y 2026.
            </p>

            <p>
                <strong>Último campeonato:</strong> 2026.
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