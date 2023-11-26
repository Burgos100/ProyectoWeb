<?php
$data = json_decode(file_get_contents("php://input"), true);

$lamina = $data["lamina"];
$respuesta = $data["respuesta"];

// Obtener el contador actual de respuestas
$contadorRespuestas = intval(file_get_contents("contador_respuestas.txt"));

// Construir el texto de la respuesta
$respuestaString = '';

// Si es la primera respuesta, añadir la línea de encabezado
if ($contadorRespuestas === 0) {
    $respuestaString .= "\nPrueba IV: Memoria-Atención Tarea 3\n";
}

// Incrementar el contador de respuestas y agregar la respuesta
$contadorRespuestas++;
$respuestaString .= "Respuesta " . $contadorRespuestas . ": " . $respuesta . PHP_EOL;

// Guardar el contador de respuestas actualizado
file_put_contents("contador_respuestas.txt", $contadorRespuestas);
// Agregar la respuesta al archivo
file_put_contents("../usuario.txt", $respuestaString, FILE_APPEND);

echo "Respuesta guardada con éxito.";
?>