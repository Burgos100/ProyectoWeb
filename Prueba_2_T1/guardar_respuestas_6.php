<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta11 = $_POST["pregunta11"];
    $respuesta12 = $_POST["pregunta12"];

    // Crear una cadena con el mensaje y las respuestas
    $respuestas11 = "Pregunta 11: $respuesta11\n";
    $respuestas12 = "Pregunta 12: $respuesta12\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas11 . $respuestas12); // Corregido aquí
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Tarea_2.7.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>