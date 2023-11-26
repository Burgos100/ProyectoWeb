<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra1_1 = isset($_POST["palabra1"]) ? $_POST["palabra1"] : "";
    $palabra2_1 = isset($_POST["palabra2"]) ? $_POST["palabra2"] : "";
    $palabra3_1 = isset($_POST["palabra3"]) ? $_POST["palabra3"] : "";
    $palabra4_1 = isset($_POST["palabra4"]) ? $_POST["palabra4"] : "";
    $palabra5_1 = isset($_POST["palabra5"]) ? $_POST["palabra5"] : "";

    $palabra1_2 = isset($_POST["palabra6"]) ? $_POST["palabra6"] : "";
    $palabra2_2 = isset($_POST["palabra7"]) ? $_POST["palabra7"] : "";
    $palabra3_2 = isset($_POST["palabra8"]) ? $_POST["palabra8"] : "";
    $palabra4_2 = isset($_POST["palabra9"]) ? $_POST["palabra9"] : "";
    $palabra5_2 = isset($_POST["palabra10"]) ? $_POST["palabra10"] : "";

    // Crear una cadena con las respuestas
    $respuestas = "\nPrueba IV: Memoria-Atención Tarea 2";
    $respuestas .= "\nPregunta 1:\n";
    $respuestas .= "Palabra 1: $palabra1_1\n";
    $respuestas .= "Palabra 2: $palabra2_1\n";
    $respuestas .= "Palabra 3: $palabra3_1\n";
    $respuestas .= "Palabra 4: $palabra4_1\n";
    $respuestas .= "Palabra 5: $palabra5_1\n";

    $respuestas .= "\nPregunta 2:\n";
    $respuestas .= "Palabra 1: $palabra1_2\n";
    $respuestas .= "Palabra 2: $palabra2_2\n";
    $respuestas .= "Palabra 3: $palabra3_2\n";
    $respuestas .= "Palabra 4: $palabra4_2\n";
    $respuestas .= "Palabra 5: $palabra5_2\n";

    // Guardar las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a");
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Tarea2.3.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>