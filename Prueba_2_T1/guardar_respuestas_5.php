<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta9 = $_POST["pregunta9"];
    $respuesta10 = $_POST["pregunta10"];

    // Crear una cadena con el mensaje y las respuestas
    $respuestas9 = "Pregunta 9: $respuesta9\n";
    $respuestas10 = "Pregunta 10: $respuesta10\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas9 . $respuestas10); // Corregido aquí
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Tarea_2.6.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>