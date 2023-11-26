<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta5 = isset($_POST["foto5"]) ? $_POST["foto5"] : "";
    $respuesta6 = isset($_POST["foto6"]) ? $_POST["foto6"] : "";

    // Crear una cadena con el mensaje y las respuestas
    $respuestas = "Pregunta 5: $respuesta5\n";
    $respuestas .= "Pregunta 6: $respuesta6\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: prueba3.3.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
