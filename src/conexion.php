<?php
require_once __DIR__ . '/Env.php';

Env::cargar(__DIR__ . '/.env');

$servidor = $_ENV['db_host'] ?? 'localhost';
$port = $_ENV['db_port'] ?? '3307';
$dbname = $_ENV['db_name'] ?? '';
$usuario = $_ENV['db_user'] ?? '';
$password = $_ENV['db_pass'] ?? '';

try {
    $dsn = "mysql:host={$servidor};port={$port};dbname={$dbname};charset=utf8mb4";

    $pdo = new PDO($dsn, $usuario, $password, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
    //echo("Conexión exitosa");

} catch (PDOException $e) {
    error_log('Error de conexión a MySQL: ' . $e->getMessage());

    http_response_code(500);
    exit('No se pudo conectar con la base de datos.');
}