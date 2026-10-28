
<?php
session_start();

// Aceptar únicamente solicitudes POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: Conversaciones.php');
    exit;
}

// Destruir los datos de la sesión.
$_SESSION = [];

// Eliminar la cookie de sesión, si está habilitada.
if (ini_get('session.use_cookies')) {
    $parametros = session_get_cookie_params();

    setcookie(
        session_name(),
        '',
        time() - 42000,
        $parametros['path'],
        $parametros['domain'],
        $parametros['secure'],
        $parametros['httponly']
    );
}

session_destroy();

// Redirigir al inicio de sesión.
header('Location: Login.php');
exit;
