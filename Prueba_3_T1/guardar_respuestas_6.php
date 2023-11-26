<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta11 = isset($_POST["foto11"]) ? $_POST["foto11"] : "";
    $respuesta12 = isset($_POST["foto12"]) ? $_POST["foto12"] : "";

    // Crear una cadena con el mensaje y las respuestas
    $respuestas = "Pregunta 11: $respuesta11\n";
    $respuestas .= "Pregunta 12: $respuesta12\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: prueba3.6.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
