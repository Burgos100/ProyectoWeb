<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las respuestas del formulario
    $respuesta5 = isset($_POST["respuesta5"]) ? $_POST["respuesta5"] : "";

    // Crear una cadena con el mensaje y las respuestas
    $respuestas = "Pregunta 5: $respuesta5\n";

    // Guardar el mensaje y las respuestas en un archivo de texto
    $archivo = fopen("../usuario.txt", "a"); // Abre el archivo en modo de escritura al final del archivo
    fwrite($archivo, $respuestas);
    fclose($archivo);

    // Redirigir al siguiente HTML
    header("Location: ../Prueba_4_T2/Tarea2.1.html");
    exit();
} else {
    echo "Error: Acceso no válido";
}
?>