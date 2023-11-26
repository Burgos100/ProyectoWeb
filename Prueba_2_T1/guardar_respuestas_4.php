<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta7 = $_POST["pregunta7"];
    $respuesta8 = $_POST["pregunta8"];

    // Crear una cadena con el mensaje y las respuestas
    $respuestas7 = "Pregunta 7: $respuesta7\n";
    $respuestas8 = "Pregunta 8: $respuesta8\n"; // Corregido aquí

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas7 . $respuestas8);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Tarea_2.5.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
