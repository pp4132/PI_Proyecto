<?php

header('Content-Type: application/json; charset=utf-8');

// Solo aceptar solicitudes POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Método no permitido.'
    ]);
    exit;
}

// Comprobar que se recibió una imagen
if (!isset($_FILES['captura'])) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'No se recibió ninguna captura.'
    ]);
    exit;
}

$archivo = $_FILES['captura'];

// Comprobar errores
if ($archivo['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Error al recibir la imagen.'
    ]);
    exit;
}

// Limitar tamaño a 8 MB
if ($archivo['size'] > 8 * 1024 * 1024) {
    http_response_code(413);
    echo json_encode([
        'success' => false,
        'message' => 'La imagen supera el límite de 8 MB.'
    ]);
    exit;
}

// Verificar el tipo real del archivo
$finfo = new finfo(FILEINFO_MIME_TYPE);
$tipo = $finfo->file($archivo['tmp_name']);

if ($tipo !== 'image/png') {
    http_response_code(415);
    echo json_encode([
        'success' => false,
        'message' => 'Solo se permiten imágenes PNG.'
    ]);
    exit;
}

// Verificar que sea una imagen válida
if (getimagesize($archivo['tmp_name']) === false) {
    http_response_code(415);
    echo json_encode([
        'success' => false,
        'message' => 'El archivo no es una imagen válida.'
    ]);
    exit;
}

// Carpeta de destino
$carpeta = __DIR__ . '/img/Galeria_RA/';

// Crear carpeta si no existe
if (!is_dir($carpeta)) {

    if (!mkdir($carpeta, 0755, true)) {
        http_response_code(500);
        echo json_encode([
            'success' => false,
            'message' => 'No se pudo crear la carpeta.'
        ]);
        exit;
    }
}

// Nombre único para evitar reemplazar imágenes
$nombre = 'captura_' .
          date('Ymd_His') . '_' .
          bin2hex(random_bytes(6)) .
          '.png';

$ruta = $carpeta . $nombre;

// Guardar imagen
if (move_uploaded_file($archivo['tmp_name'], $ruta)) {

    echo json_encode([
        'success' => true,
        'message' => 'Captura guardada correctamente.',
        'imagen' => 'img/Galeria_RA/' . $nombre
    ]);

} else {

    http_response_code(500);

    echo json_encode([
        'success' => false,
        'message' => 'No se pudo guardar la captura.'
    ]);

}

?>