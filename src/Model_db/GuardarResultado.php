
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

// RESPUESTAS CORRECTAS
$correctAnswers = [
    "¿En qué ciudad juega Acereros de Monclova?"
    => "Monclova",

    "¿En qué año llegó por primera vez el beisbol profesional de la LMB a Monclova?"
        => "1974",

    "¿Qué actividad económica inspira el nombre de Acereros de Monclova?"
        => "La industria del acero",

    "¿En qué año ganó Acereros de Monclova su primer campeonato de la LMB?"
        => "2019",

    "¿Cómo se conoce por patrocinio el estadio de Acereros de Monclova?"
        => "Kickapoo Lucky Eagle",


    "¿En qué ciudad juega Algodoneros de Unión Laguna?"
        => "Torreón",

    "¿En qué año se incorporó Algodoneros de Unión Laguna a la LMB?"
        => "1940",

    "¿Qué actividad regional inspira el nombre de Algodoneros de Unión Laguna?"
        => "El cultivo del algodón",

    "¿Cómo se llama el estadio de Algodoneros de Unión Laguna?"
        => "Estadio de la Revolución",

    "¿En qué año consiguió Algodoneros de Unión Laguna su primer campeonato de liga?"
        => "1942",


    "¿En qué ciudad juega Caliente de Durango?"
        => "Durango",

    "¿En qué temporada comenzó a competir Caliente de Durango en la LMB?"
        => "2024",

    "¿Cómo se llama el estadio de Caliente de Durango?"
        => "Francisco Villa",

    "¿Qué objetivo tuvo la llegada de Caliente de Durango a la LMB en 2024?"
        => "Mantener el beisbol profesional de verano en Durango",

    "¿Qué número de equipo representó Caliente de Durango en la LMB al incorporarse en 2024?"
        => "El número 20",


    "¿En qué zona metropolitana juega Charros de Jalisco?"
        => "Guadalajara",

    "¿En qué año regresó Charros de Jalisco al circuito de verano de la LMB?"
        => "2024",

    "¿Qué tradición cultural inspira el nombre de Charros de Jalisco?"
        => "La charrería",

    "¿Cómo se llama el estadio de Charros de Jalisco?"
        => "Estadio Panamericano",

    "¿Después de aproximadamente cuánto tiempo regresó Charros de Jalisco a la LMB en 2024?"
        => "Casi tres décadas",


    "¿Qué ciudad representa Dorados de Chihuahua?"
        => "Chihuahua",

    "¿En qué año regresó Dorados de Chihuahua a la LMB?"
        => "2024",

    "¿Cuántos años de ausencia habían transcurrido antes del regreso de Dorados de Chihuahua en 2024?"
        => "14 años",

    "¿En qué estadio juega Dorados de Chihuahua?"
        => "Estadio Monumental Chihuahua",

    "¿Contra qué equipo disputó Dorados de Chihuahua la serie inaugural de su regreso en 2024?"
        => "Rieleros de Aguascalientes",


    "¿En qué ciudad juega Rieleros de Aguascalientes?"
        => "Aguascalientes",

    "¿En qué año debutó Rieleros de Aguascalientes en la LMB?"
        => "1975",

    "¿Qué tradición de Aguascalientes inspira el nombre de Rieleros?"
        => "La ferroviaria",

    "¿Cómo se llama el estadio de Rieleros de Aguascalientes?"
        => "Alberto Romo Chávez",

    "¿En qué año ganó Rieleros de Aguascalientes el campeonato de la LMB?"
        => "1978",


    "¿En qué ciudad juega Saraperos de Saltillo?"
        => "Saltillo",

    "¿En qué año debutó Saraperos de Saltillo en la LMB?"
        => "1970",

    "¿Qué prenda tradicional de Saltillo inspira el nombre de Saraperos?"
        => "El sarape",

    "¿Cómo se llama el estadio de Saraperos de Saltillo?"
        => "Francisco I. Madero",

    "¿En qué años consiguió Saraperos de Saltillo sus tres campeonatos de LMB?"
        => "1980, 2009 y 2010",


    "¿En qué ciudad juega Sultanes de Monterrey?"
        => "Monterrey",

    "¿En qué año comenzó la historia de Sultanes de Monterrey en la LMB?"
        => "1939",

    "¿Cuál fue uno de los primeros nombres de la organización de Sultanes de Monterrey?"
        => "Carta Blanca",

    "¿Cuántos campeonatos de la LMB registra Sultanes de Monterrey?"
        => "10",

    "¿Cómo se llama el estadio de Sultanes de Monterrey?"
        => "Mobil Super",


    "¿Qué ciudades representa Tecos de los Dos Laredos?"
        => "Nuevo Laredo y Laredo",

    "¿Con qué nombre comenzó la franquicia de Tecos de los Dos Laredos en 1940?"
        => "La Junta de Nuevo Laredo",

    "¿En qué año adoptó la franquicia de Tecos de los Dos Laredos el nombre Tecolotes de Nuevo Laredo?"
        => "1949",

    "¿Qué hecho distingue a Tecos de los Dos Laredos desde 1985?"
        => "Jugar en dos países",

    "¿Qué característica describe mejor a Tecos de los Dos Laredos?"
        => "Es la novena binacional de la LMB",


    "¿En qué ciudad juega Toros de Tijuana?"
        => "Tijuana",

    "¿En qué año regresó Toros de Tijuana a la LMB para su etapa actual?"
        => "2014",

    "¿En qué años ganó Toros de Tijuana sus campeonatos de liga?"
        => "2017 y 2021",

    "¿Cómo se llama el estadio de Toros de Tijuana?"
        => "Estadio Chevron",

    "¿Qué remontada logró Toros de Tijuana en la Serie del Rey de 2021?"
        => "Volvió de un 0-3 ante Leones de Yucatán"

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
