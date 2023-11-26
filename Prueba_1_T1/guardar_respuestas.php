<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta1 = $_POST["pregunta1"];
    $respuesta2 = $_POST["pregunta2"];
    $respuesta3 = $_POST["pregunta3"];
    $respuesta4 = $_POST["pregunta4"];
    $respuesta5 = $_POST["pregunta5"];

    // Crear una cadena con las respuestas
    $mensaje = "\nPrueba I: Reflexividad\n";
    $respuestas = "\nRespuesta 1: $respuesta1\nRespuesta 2: $respuesta2\nRespuesta 3: $respuesta3\nRespuesta 4: $respuesta4\nRespuesta 5: $respuesta5\n";

    // Guardar las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $mensaje . $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: Parte2.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
