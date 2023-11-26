<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta15 = isset($_POST["foto15"]) ? $_POST["foto15"] : "";
    $respuesta16 = isset($_POST["foto16"]) ? $_POST["foto16"] : "";

    // Crear una cadena con el mensaje y las respuestas
    $respuestas = "Pregunta 15: $respuesta15\n";
    $respuestas .= "Pregunta 16: $respuesta16\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: ../Prueba_4_T1/Tarea_1.1.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
