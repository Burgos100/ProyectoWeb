<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $palabra1_3 = isset($_POST["palabra1_3"]) ? $_POST["palabra1_3"] : "";
    $palabra2_3 = isset($_POST["palabra2_3"]) ? $_POST["palabra2_3"] : "";
    $palabra3_3 = isset($_POST["palabra3_3"]) ? $_POST["palabra3_3"] : "";
    $palabra4_3 = isset($_POST["palabra4_3"]) ? $_POST["palabra4_3"] : "";
    $palabra5_3 = isset($_POST["palabra5_3"]) ? $_POST["palabra5_3"] : "";

    $palabra1_4 = isset($_POST["palabra1_4"]) ? $_POST["palabra1_4"] : "";
    $palabra2_4 = isset($_POST["palabra2_4"]) ? $_POST["palabra2_4"] : "";
    $palabra3_4 = isset($_POST["palabra3_4"]) ? $_POST["palabra3_4"] : "";
    $palabra4_4 = isset($_POST["palabra4_4"]) ? $_POST["palabra4_4"] : "";
    $palabra5_4 = isset($_POST["palabra5_4"]) ? $_POST["palabra5_4"] : "";

    $palabra1_5 = isset($_POST["palabra1_5"]) ? $_POST["palabra1_5"] : "";
    $palabra2_5 = isset($_POST["palabra2_5"]) ? $_POST["palabra2_5"] : "";
    $palabra3_5 = isset($_POST["palabra3_5"]) ? $_POST["palabra3_5"] : "";
    $palabra4_5 = isset($_POST["palabra4_5"]) ? $_POST["palabra4_5"] : "";
    $palabra5_5 = isset($_POST["palabra5_5"]) ? $_POST["palabra5_5"] : "";

    // Crear una cadena con las respuestas
    $respuestas = "\nPregunta 3:\n";
    $respuestas .= "Palabra 1: $palabra1_3\n";
    $respuestas .= "Palabra 2: $palabra2_3\n";
    $respuestas .= "Palabra 3: $palabra3_3\n";
    $respuestas .= "Palabra 4: $palabra4_3\n";
    $respuestas .= "Palabra 5: $palabra5_3\n";

    $respuestas .= "\nPregunta 4:\n";
    $respuestas .= "Palabra 1: $palabra1_4\n";
    $respuestas .= "Palabra 2: $palabra2_4\n";
    $respuestas .= "Palabra 3: $palabra3_4\n";
    $respuestas .= "Palabra 4: $palabra4_4\n";
    $respuestas .= "Palabra 5: $palabra5_4\n";

    $respuestas .= "\nPregunta 5:\n";
    $respuestas .= "Palabra 1: $palabra1_5\n";
    $respuestas .= "Palabra 2: $palabra2_5\n";
    $respuestas .= "Palabra 3: $palabra3_5\n";
    $respuestas .= "Palabra 4: $palabra4_5\n";
    $respuestas .= "Palabra 5: $palabra5_5\n";

    // Guardar las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a");
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: ../Prueba_4_T3/Lamina1.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
