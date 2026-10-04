<!DOCTYPE html>
<html lang="en">
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de inicio</title>
        <link rel="stylesheet" href="css/StyleGeneral.css">
        <link rel="stylesheet" href="css/Style_trivia.css">

    </head>
    <body>
        <!--Encabezado principal-->
        <?php include('Header.php')?>

        <main>
            
           <?php include('SideBar&Buttons.php')?>

            <section class="contenedor_trivia">

                <h1>Trivia Sultanes de Monterrey</h1>

                <p>
                    ¿Cuánto sabes sobre los Sultanes?
                </p>


                <div class="pregunta">

                    <h2>
                        1. ¿En qué ciudad juegan los Sultanes?
                    </h2>

                    <label>
                        <input type="radio" name="pregunta1">
                        Monterrey
                    </label>

                    <label>
                        <input type="radio" name="pregunta1">
                        Saltillo
                    </label>

                    <label>
                        <input type="radio" name="pregunta1">
                        Torreón
                    </label>

                    <label>
                        <input type="radio" name="pregunta1">
                        Chihuahua
                    </label>

                </div>


                <button class="boton_siguiente">
                    Siguiente
                </button>

            </section>


        </main>

        <?php include('Footer.php')?>

        <script src="js/Usuario_pestaña.js"></script>
    </body>
</html>
