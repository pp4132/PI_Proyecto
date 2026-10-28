<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function usuarioActual(): int
{
    $id = $_SESSION['id_usuario'] ?? null;

    if (!is_numeric($id) || (int)$id < 1) {
        http_response_code(401);
        header('Location: ../src/Login.php');
        exit;
    }

    return (int)$id;
}
