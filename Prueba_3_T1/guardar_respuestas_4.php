<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta7 = isset($_POST["foto7"]) ? $_POST["foto7"] : "";
    $respuesta8 = isset($_POST["foto8"]) ? $_POST["foto8"] : "";

    // Crear una cadena con el mensaje y las respuestas
    $respuestas = "Pregunta 7: $respuesta7\n";
    $respuestas .= "Pregunta 8: $respuesta8\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: prueba3.4.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
