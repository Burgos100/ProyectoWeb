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
        <h2>Registra tus datos</h2>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellido" required>

        <label for="rut">Rut:</label>
        <input type="text" name="rut" required>

        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $rut = $_POST["rut"];

        echo "Nombre: " . $nombre . "<br>";
        echo "Apellidos: " . $apellidos . "<br>";
        echo "Rut: " . $rut . "<br>";

        $archivo = fopen("usuario.txt", "a");
        fwrite($archivo, "Nombre: " . $nombre . ", Apellidos: " . $apellido . ", Rut: " . $rut . "\n");
        fclose($archivo);
                header("Location: Prueba_1_T1\Prueba1.html");
                exit();
            }
            ?>
</body>
</html>
