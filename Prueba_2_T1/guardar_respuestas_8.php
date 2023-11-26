<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta15 = $_POST["pregunta15"];
    $respuesta16 = $_POST["pregunta16"];

    // Crear una cadena con el mensaje y las respuestas
    $respuestas15 = "Pregunta 15: $respuesta15\n";
    $respuestas16 = "Pregunta 16: $respuesta16\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas15 . $respuestas16); // Corregido aquí
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: ../Prueba_3_T1/prueba3.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>