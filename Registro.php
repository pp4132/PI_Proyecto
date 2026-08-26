<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Registro</title>

    <link rel="stylesheet"
          href="css/Style_registro.css">

</head>

<body>

    <!-- Botón para regresar -->

    <a href="Index.php" class="boton_regresar">
        ← Regresar
    </a>


    <!-- Formulario -->

    <main class="contenedor_registro">

        <section class="registro">

            <h1>Crear cuenta</h1>

            <form>


                <div class="campo">

                    <label for="nombre">
                        Nombre
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Nombre"
                        required
                    >

                </div>


                <div class="campo">

                    <label for="apodo">
                        Apodo
                    </label>

                    <input
                        type="text"
                        id="apodo"
                        name="apodo"
                        placeholder="Apodo"
                        required
                    >

                </div>


                <div class="campo">

                    <label for="correo">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        placeholder="correo@ejemplo.com"
                        required
                    >

                </div>


                <div class="campo">

                    <label for="fecha_nacimiento">
                        Fecha de nacimiento
                    </label>

                    <input
                        type="date"
                        id="fecha_nacimiento"
                        name="fecha_nacimiento"
                        required
                    >

                </div>


                <div class="campo">

                    <label for="contrasena">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        id="contrasena"
                        name="contrasena"
                        placeholder="Contraseña"
                        required
                    >

                </div>


                <button
                    type="submit"
                    class="boton_registro">

                    Registrarse

                </button>

            </form>


            <p class="inicio_sesion">

                ¿Ya tienes una cuenta?

                <a href="InicioSesion.php">
                    Inicia sesión
                </a>

            </p>

        </section>

    </main>

</body>

</html>
