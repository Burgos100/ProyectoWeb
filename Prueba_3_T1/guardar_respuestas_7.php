<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta13 = isset($_POST["foto13"]) ? $_POST["foto13"] : "";
    $respuesta14 = isset($_POST["foto14"]) ? $_POST["foto14"] : "";

    // Crear una cadena con el mensaje y las respuestas
    $respuestas = "Pregunta 13: $respuesta13\n";
    $respuestas .= "Pregunta 14: $respuesta14\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: prueba3.7.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
