<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta1 = $_POST["pregunta1"];
    $respuesta2 = $_POST["pregunta2"];

    // Crear una cadena con el mensaje y las respuestas
    $mensaje = "\nPrueba II: Pensamiento Analógico\n";
    $respuestas = "Pregunta 1: $respuesta1\n";
    $respuestas .= "Pregunta 2: $respuesta2\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $mensaje . $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Tarea_2.2.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>