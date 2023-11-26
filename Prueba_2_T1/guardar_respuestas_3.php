<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta5 = $_POST["pregunta5"];
    $respuesta6 = $_POST["pregunta6"];

    // Crear una cadena con el mensaje y las respuestas
    $respuestas5 = "Pregunta 5: $respuesta5\n";
    $respuestas6 = "Pregunta 6: $respuesta6\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas5 . $respuestas6);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Tarea_2.4.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>