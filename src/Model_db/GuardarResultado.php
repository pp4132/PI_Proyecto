
<?php

session_start();

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__ . '/../conexion.php';

// =====================================
// COMPROBAR SESIÓN
// =====================================

if (!isset($_SESSION['id_usuario'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Debes iniciar sesión.'
    ]);
    exit;
}

$id_usuario = (int) $_SESSION['id_usuario'];

// Comprobar método
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);

    echo json_encode([
        'success' => false,
        'message' => 'Método no permitido.'
    ]);
    exit;
}

// =====================================
// RECIBIR RESPUESTAS
// =====================================

$data = json_decode(file_get_contents('php://input'), true);

if (
    !isset($data['respuestas']) ||
    !is_array($data['respuestas']) ||
    count($data['respuestas']) !== 5
) {
    echo json_encode([
        'success' => false,
        'message' => 'Datos de la trivia inválidos.'
    ]);
    exit;
}

// =====================================
// RESPUESTAS CORRECTAS
// =====================================

$correctAnswers = [

    "¿En qué año se fundó la Liga Mexicana de Beisbol?"
        => "1925",

    "¿En qué siglo comenzó a difundirse el beisbol en México?"
        => "Siglo XIX",

    "¿Qué cronista fue conocido como Fray Nano?"
        => "Alejandro Aguilar Reyes",

    "¿Cuántos equipos integran la Zona Norte de la LMB en 2026?"
        => "10",

    "¿Qué equipo juega en Monterrey?"
        => "Sultanes",

    "¿Qué equipo representa a Monclova?"
        => "Acereros",

    "¿Qué equipo tiene sede en Torreón?"
        => "Algodoneros de Unión Laguna",

    "¿Qué equipo lleva el nombre de una prenda tradicional de Saltillo?"
        => "Saraperos",

    "¿Qué equipo homenajea la tradición ferroviaria?"
        => "Rieleros de Aguascalientes",

    "¿Qué club representa a dos ciudades fronterizas de México y Estados Unidos?"
        => "Tecos de los Dos Laredos",

    "¿Qué equipo de la Zona Norte juega en Tijuana?"
        => "Toros",

    "¿Qué equipo regresó a la LMB en 2024 y juega en Chihuahua?"
        => "Dorados",

    "¿Qué equipo adoptó su actual proyecto en Durango en 2024?"
        => "Caliente de Durango",

    "¿Qué equipo tiene como sede el área metropolitana de Guadalajara?"
        => "Charros de Jalisco",

    "¿Qué equipo ganó su primer campeonato de LMB en 2019?"
        => "Acereros de Monclova"

];

// =====================================
// VALIDAR RESPUESTAS
// =====================================

$correctas = 0;
$preguntasContestadas = [];

foreach ($data['respuestas'] as $respuesta) {

    if (
        !isset($respuesta['pregunta'], $respuesta['respuesta']) ||
        !is_string($respuesta['pregunta']) ||
        !is_string($respuesta['respuesta'])
    ) {
        echo json_encode([
            'success' => false,
            'message' => 'Formato de respuestas inválido.'
        ]);
        exit;
    }

    $pregunta = $respuesta['pregunta'];
    $opcion = $respuesta['respuesta'];

    if (!array_key_exists($pregunta, $correctAnswers)) {
        echo json_encode([
            'success' => false,
            'message' => 'Pregunta no válida.'
        ]);
        exit;
    }

    if (in_array($pregunta, $preguntasContestadas, true)) {
        echo json_encode([
            'success' => false,
            'message' => 'Hay preguntas repetidas.'
        ]);
        exit;
    }

    $preguntasContestadas[] = $pregunta;

    if ($opcion === $correctAnswers[$pregunta]) {
        $correctas++;
    }
}

// =====================================
// CALCULAR PUNTOS
// =====================================

$puntosGanados = $correctas * 10;

try {

    // Iniciar transacción
    $pdo->beginTransaction();

    // =====================================
    // GUARDAR PARTIDA
    // =====================================

    $sql = "INSERT INTO score_trivia
            (id_usuario, puntaje)
            VALUES (:usuario, :puntaje)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':usuario' => $id_usuario,
        ':puntaje' => $puntosGanados
    ]);

    // =====================================
    // ACTUALIZAR PUNTAJE ACUMULADO
    // =====================================

    $sql = "INSERT INTO puntaje
            (id_usuario, acumulado)
            VALUES (:usuario, :puntaje)
            ON DUPLICATE KEY UPDATE
            acumulado = acumulado + VALUES(acumulado)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':usuario' => $id_usuario,
        ':puntaje' => $puntosGanados
    ]);

    // =====================================
    // CONSULTAR PUNTAJE
    // =====================================

    $sql = "SELECT acumulado
            FROM puntaje
            WHERE id_usuario = :usuario";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':usuario' => $id_usuario
    ]);

    $acumulado = (int) $stmt->fetchColumn();

    // =====================================
    // BUSCAR INSIGNIAS NUEVAS
    // =====================================

    $sql = "SELECT i.id_ins, i.nombre
            FROM insignias i
            LEFT JOIN usuario_insignia ui
                ON i.id_ins = ui.id_ins
                AND ui.id_usuario = :usuario
            WHERE i.puntos_necesarios <= :puntos
            AND ui.id_ins IS NULL";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':usuario' => $id_usuario,
        ':puntos' => $acumulado
    ]);

    $insignias = $stmt->fetchAll();

    // =====================================
    // REGISTRAR INSIGNIAS
    // =====================================

    if (!empty($insignias)) {

        $sql = "INSERT INTO usuario_insignia
                (id_usuario, id_ins)
                VALUES (:usuario, :insignia)";

        $stmt = $pdo->prepare($sql);

        foreach ($insignias as $insignia) {

            $stmt->execute([
                ':usuario' => $id_usuario,
                ':insignia' => $insignia['id_ins']
            ]);

        }
    }

    // Confirmar operaciones
    $pdo->commit();

    // =====================================
    // RESPUESTA JSON
    // =====================================

    echo json_encode([
        'success' => true,
        'correctas' => $correctas,
        'puntos_ganados' => $puntosGanados,
        'acumulado' => $acumulado,
        'insignias' => array_column($insignias, 'nombre')
    ]);

} catch (Throwable $e) {

    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }

    error_log('Error al guardar trivia: ' . $e->getMessage());

    http_response_code(500);

    echo json_encode([
        'success' => false,
        'message' => 'Ocurrió un error al guardar los resultados.'
    ]);

}
