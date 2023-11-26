<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta13 = $_POST["pregunta13"];
    $respuesta14 = $_POST["pregunta14"];

    // Crear una cadena con el mensaje y las respuestas
    $respuestas13 = "Pregunta 13: $respuesta13\n";
    $respuestas14 = "Pregunta 14: $respuesta14\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas13 . $respuestas14); // Corregido aquí
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Tarea_2.8.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>