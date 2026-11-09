<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dorados de Chihuahua</title>

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

    <img src="img/Equipos/Dorados.svg"
         alt="Logo de Dorados de Chihuahua">

    <div>

        <h1>Dorados de Chihuahua</h1>

        <p>Chihuahua, Chihuahua</p>

        <p>Fundación histórica: 1936</p>

        <p>Regreso a la LMB: 2024</p>

        <p>Campeonatos de LMB: 0</p>

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
                Los Dorados de Chihuahua son un equipo
                representativo del béisbol del estado de
                Chihuahua. Son conocidos como la División
                del Norte y representan a la capital del
                estado dentro de la Liga Mexicana de
                Beisbol.
            </p>

            <p>
                La historia del béisbol organizado de
                Chihuahua se remonta a 1936, año relacionado
                con los primeros antecedentes del equipo
                en las competencias estatales.
            </p>

            <p>
                Dentro de la Liga Mexicana de Beisbol,
                Chihuahua ha tenido diferentes etapas de
                participación. Su primera aparición fue
                en 1940. Posteriormente regresó en 1973,
                permaneciendo hasta 1982.
            </p>

            <p>
                Una tercera etapa comenzó en 2007,
                cuando la franquicia volvió al circuito
                profesional. Durante este periodo, los
                Dorados participaron hasta 2010.
            </p>

            <p>
                Después de varios años de ausencia,
                el equipo regresó oficialmente a la
                Liga Mexicana de Beisbol en 2024,
                luego de 14 años sin participar en
                el circuito.
            </p>

            <p>
                Desde su regreso, los Dorados buscan
                consolidar nuevamente el béisbol
                profesional en Chihuahua y fortalecer
                la conexión con su afición.
            </p>

            <p>
                Su apodo, la División del Norte,
                hace referencia a la historia y
                tradición revolucionaria del estado
                de Chihuahua.
            </p>

            <p>
                Hasta la temporada 2026, el equipo
                no ha conseguido un campeonato de
                la Liga Mexicana de Beisbol.
            </p>

        </section>


        <!-- CANCHA -->

        <section id="cancha">

            <h2>Cancha</h2>

            <div class="informacion_cancha">

                <img src="img/Canchas/Cancha dorados.jpg"
                     alt="Estadio Héctor Espino">

                <div>

                    <h3>Estadio Héctor Espino</h3>

                    <p>Chihuahua, Chihuahua.</p>

                    <p>
                        Es la casa de los Dorados de
                        Chihuahua durante sus encuentros
                        como equipo local en la Liga
                        Mexicana de Beisbol.
                    </p>

                    <p>
                        Anteriormente era conocido como
                        Estadio Monumental Chihuahua.
                        El 24 de abril de 2026 recibió
                        oficialmente el nombre de
                        Estadio Héctor Espino, en honor
                        al histórico pelotero chihuahuense.
                    </p>

                    <p>
                        Cuenta con una capacidad
                        aproximada de 15,500 espectadores.
                    </p>

                    <p>
                        El inmueble se encuentra ubicado
                        al sur de la ciudad de Chihuahua
                        y es uno de los escenarios más
                        importantes del béisbol en el estado.
                    </p>

                </div>

            </div>

            <h3>Parque Manuel L. Almanza</h3>

            <p>
                Otro recinto importante en la historia
                de los Dorados es el Estadio Manuel L.
                Almanza, inaugurado el 14 de septiembre
                de 1949.
            </p>

            <p>
                Fue una de las antiguas casas de la
                División del Norte y forma parte de
                la tradición del béisbol chihuahuense.
            </p>

        </section>


        <!-- JUGADORES -->

        <section id="jugadores">

            <h2>Jugadores</h2>

            <p>
                Plantilla de jugadores de Dorados de
                Chihuahua correspondiente al roster
                publicado para la temporada 2026 de
                la Liga Mexicana de Beisbol.
            </p>

            <p>
                Las fotografías se pueden agregar
                posteriormente en cada registro.
                Se muestran espacios pendientes cuando
                no se dispone de una imagen oficial
                verificada.
            </p>

            <?php
            $grupos = [

                "Lanzadores" => [

                    ["Adrián Martínez", 70, ""],
                    ["Arturo Roque", 22, ""],
                    ["Caleb Smith", 23, ""],
                    ["César Valdez", 51, ""],
                    ["Daniel de la Fuente", 63, ""],
                    ["David Leal", 30, ""],
                    ["Demetrio Gutiérrez", 33, ""],
                    ["Dereck Rodríguez", 57, ""],
                    ["Edgar Navarro", 40, ""],
                    ["Elián Leyva", 53, ""],
                    ["Josué Gómez", 59, ""],
                    ["Landen Bourassa", 97, ""],
                    ["Nick Struck", 55, ""],
                    ["Ralph Garza Jr.", 61, ""],
                    ["Raúl Barrón", 54, ""],
                    ["Samuel Alvarado", 50, ""],
                    ["Vidal Nuño", 6, ""]

                ],

                "Receptores" => [

                    ["Cristian Almanza", 99, ""],
                    ["Gilberto Vizcarra", 73, ""],
                    ["Gustavo Ruiz", 60, ""]

                ],

                "Jugadores de cuadro" => [

                    ["Aarón Lugo", 1, ""],
                    ["Andre Lipcius", 25, ""],
                    ["Andrelton Simmons", 19, ""],
                    ["Brainer Bonaci", 14, ""],
                    ["Carlos Muñoz", 29, ""],
                    ["Coco Montes", 24, ""],
                    ["Damon Dues", 11, ""],
                    ["Joel Flores", 91, ""],
                    ["Juan Yépez", 17, ""]

                ],

                "Jardineros" => [

                    ["Dairon Miranda", 48, ""],
                    ["Jacob Rhinesmith", 96, ""],
                    ["Rafael Franco", 4, ""]

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
                        <td>35</td>
                        <td>58</td>
                        <td>.376</td>
                    </tr>

                </tbody>

            </table>

            <p>
                Durante la temporada regular 2026,
                los Dorados finalizaron en el décimo
                lugar de la Zona Norte con 35 victorias
                y 58 derrotas.
            </p>

            <p>
                El equipo no consiguió clasificarse
                a la postemporada de la temporada 2026.
            </p>

            <p>
                <strong>Campeonatos de LMB:</strong> 0.
            </p>

            <p>
                <strong>
                    Último regreso a la LMB:
                </strong>
                2024.
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