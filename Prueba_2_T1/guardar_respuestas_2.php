<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta3 = $_POST["pregunta3"];
    $respuesta4 = $_POST["pregunta4"];

    // Crear una cadena con el mensaje y las respuestas
    $respuestas3 = "Pregunta 3: $respuesta3\n";
    $respuestas4 = "Pregunta 4: $respuesta4\n"; // Corregido aquí

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas3 . $respuestas4); // Corregido aquí
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Tarea_2.3.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>