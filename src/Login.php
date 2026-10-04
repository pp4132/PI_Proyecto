<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro</title>
    <!--Solo estoy reutilizando el estilo del registro-->
    <link rel="stylesheet" href="css/Style_login.css">
</head>

<body>
    <!-- Botón para regresar -->
    <a href="Index.php" class="boton_regresar">
        ← Regresar
    </a>

    <main class="contenedor_login">

        <section class="login">

            <h1>Inicio de sesión</h1>

            <form>
                <div class="campo">

                    <label for="correo">
                        Correo electrónico
                    </label>
                    <input
                        type="email" id="correo" name="correo"
                        placeholder="correo@ejemplo.com" required>

                </div>

                <div class="campo">
                    <label for="contrasena">
                        Contraseña
                    </label>
                    <input type="password" id="contrasena" name="contrasena" 
                    placeholder="Contraseña" required>

                </div>

                <button type="submit" class="boton_login">
                    Inicio de sesión
                </button>
            </form>


            <p class="registrarse">
                ¿No tienes aún una cuenta?
                <a href="Registro.php">
                    Registrarse
                </a>
            </p>

        </section>

    </main>

</body>
</html>
