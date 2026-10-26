<?php
session_start();
require_once __DIR__ . '/../conexion.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /../Login.php');
    exit;
}

$correo = trim($_POST['correo'] ?? '');
$contrasena = $_POST['contrasena'] ?? '';

if ($correo === '' || $contrasena === '') {
    exit('Debes ingresar tu correo y contraseña.');
}

try {
    $sql = "SELECT id_usuario, nombre, apodo, correo, pass, tipo
            FROM usuario
            WHERE correo = :correo
              AND estatus = 'activo'
            LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['correo' => $correo]);

    $usuario = $stmt->fetch();

    if ($usuario && password_verify($contrasena, $usuario['pass'])) {
        // Evitar la fijación de sesión
        session_regenerate_id(true);

        // Guardar datos necesarios en la sesión
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['apodo'] = $usuario['apodo'];
        $_SESSION['tipo'] = $usuario['tipo'];

        header('Location: ../Conversaciones.php');
        exit;
    }

    exit('Correo o contraseña incorrectos.');

} catch (PDOException $e) {
    error_log('Error de inicio de sesión: ' . $e->getMessage());
    http_response_code(500);
    exit('Ocurrió un error. Inténtalo más tarde.');
}
