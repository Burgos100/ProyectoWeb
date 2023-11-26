<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta3 = isset($_POST["foto3"]) ? $_POST["foto3"] : "";
    $respuesta4 = isset($_POST["foto4"]) ? $_POST["foto4"] : "";

    // Crear una cadena con el mensaje y las respuestas
    $respuestas = "Pregunta 3: $respuesta3\n";
    $respuestas .= "Pregunta 4: $respuesta4\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: prueba3.2.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>
