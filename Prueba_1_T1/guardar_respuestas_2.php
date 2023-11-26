<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta6 = $_POST["pregunta6"];
    $respuesta7 = $_POST["pregunta7"];
    $respuesta8 = $_POST["pregunta8"];
    $respuesta9 = $_POST["pregunta9"];
    $respuesta10 = $_POST["pregunta10"];

    // Crear una cadena con las respuestas
    $respuestas2 = "Respuesta 6: $respuesta6\nRespuesta 7: $respuesta7\nRespuesta 8: $respuesta8\nRespuesta 9: $respuesta9\nRespuesta 10: $respuesta10\n";

    // Guardar las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas2);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: ../Prueba_2_T1/Tarea_2.1.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>