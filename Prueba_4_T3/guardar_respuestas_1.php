<?php
$data = json_decode(file_get_contents("php://input"), true);

$lamina = $data["lamina"];
$respuesta = $data["respuesta"];

$contadorRespuestas = intval(file_get_contents("contador_respuestas.txt"));

$respuestaString = '';

if ($contadorRespuestas === 0) {
    $respuestaString .= "\nPrueba IV: Memoria-Atención Tarea 3\n";
}

$contadorRespuestas++;
$respuestaString .= "Respuesta " . $contadorRespuestas . ": " . $respuesta . PHP_EOL;

file_put_contents("contador_respuestas.txt", $contadorRespuestas);
file_put_contents("../usuario.txt", $respuestaString, FILE_APPEND);

echo "Respuesta guardada con éxito.";
?>