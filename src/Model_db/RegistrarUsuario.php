<?php
require_once __DIR__ . '/../conexion.php';

// Aceptar únicamente solicitudes POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /../Registro.php');
    exit;
}

// Obtener y limpiar los datos
$nombre = trim($_POST['nombre'] ?? '');
$apodo = trim($_POST['apodo'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$fechaNac = $_POST['fecha_nacimiento'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validar los campos
if (
    $nombre === '' ||
    $apodo === '' ||
    $correo === '' ||
    $fechaNac === '' ||
    $contrasena === ''
) {
    exit('Todos los campos son obligatorios.');
}

if (mb_strlen($nombre) > 100 || mb_strlen($apodo) > 30) {
    exit('El nombre o el apodo exceden la longitud permitida.');
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL) ||
    strlen($correo) > 150) {
    exit('El correo electrónico no es válido.');
}

if (strlen($contrasena) < 8 || strlen($contrasena) > 72) {
    exit('La contraseña debe tener entre 8 y 72 caracteres.');
}

// Validar la fecha de nacimiento
$fecha = DateTime::createFromFormat('!Y-m-d', $fechaNac);
$fechaValida = $fecha && $fecha->format('Y-m-d') === $fechaNac;

if (!$fechaValida || $fechaNac > date('Y-m-d')) {
    exit('La fecha de nacimiento no es válida.');
}

try {
    // Comprobar si el correo ya está registrado
    $sql = 'SELECT id_usuario
            FROM usuario
            WHERE correo = :correo
            LIMIT 1';

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['correo' => $correo]);

    if ($stmt->fetch()) {
        exit('Este correo electrónico ya está registrado.');
    }

    // Crear el hash de la contraseña
    $passHash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar el nuevo usuario
    $sql = 'INSERT INTO usuario
            (nombre, apodo, correo, pass, estatus, tipo, fecha_nac)
            VALUES
            (:nombre, :apodo, :correo, :pass, :estatus, :tipo, :fecha_nac)';

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        'nombre'    => $nombre,
        'apodo'     => $apodo,
        'correo'    => $correo,
        'pass'      => $passHash,
        'estatus'   => 'activo',
        'tipo'      => 'normal',
        'fecha_nac' => $fechaNac
    ]);

    // Redirigir al inicio de sesión tras el registro
    echo('Location: /../Conversaciones.php');
    exit;

} catch (PDOException $e) {
    error_log('Error al registrar usuario: ' . $e->getMessage());

    // El índice UNIQUE también protege ante registros simultáneos
    if ($e->getCode() === '23000') {
        exit('El correo electrónico ya está registrado.');
    }

    http_response_code(500);
    exit('Ocurrió un error al registrar la cuenta. Inténtalo más tarde.');
}