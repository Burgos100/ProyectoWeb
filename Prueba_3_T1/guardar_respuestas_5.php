<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta9 = isset($_POST["foto9"]) ? $_POST["foto9"] : "";
    $respuesta10 = isset($_POST["foto10"]) ? $_POST["foto10"] : "";

    // Crear una cadena con el mensaje y las respuestas
    $respuestas = "Pregunta 9: $respuesta9\n";
    $respuestas .= "Pregunta 10: $respuesta10\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: prueba3.5.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
