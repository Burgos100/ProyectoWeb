<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\styles.css">
    <title>Login</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Iniciar sesión</h2>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellido" required>

        <label for="rut">Rut:</label>
        <input type="text" name="rut" required>

        <input type="submit" value="Iniciar sesión">
    </form>
    <?php
    // Verificar si se enviaron datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener valores del formulario
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $rut = $_POST["rut"];

        // Validar y procesar los datos según tus necesidades
        // En este ejemplo, simplemente los mostramos en pantalla
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellidos: " . $apellidos . "<br>";
        echo "Rut: " . $rut . "<br>";

        // Aquí puedes guardar los datos en un archivo o en una base de datos
        // Por ejemplo, para guardar en un archivo (ten en cuenta que esto es solo un ejemplo y no es seguro en un entorno de producción)
        $archivo = fopen("usuario.txt", "a");
        fwrite($archivo, "Nombre: " . $nombre . ", Apellidos: " . $apellido . ", Rut: " . $rut . "\n");
        fclose($archivo);
                // Redirigir a la página final
                header("Location: Prueba_1_T1\Prueba1.html");
                exit(); // Asegurarse de que no se ejecuten más códigos después de la redirección
            }
            ?>
</body>
</html>
