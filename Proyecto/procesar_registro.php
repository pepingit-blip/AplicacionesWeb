<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
// Guardamos en un archivo de texto (usuario:contraseña encriptada)
$file = fopen("usuarios.txt", "a");
fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
fclose($file);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro_correcto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Usuario registrado correctamente</h2>
    <p style="margin-top: 20px;">
    <a href='login.php'>Iniciar sesión</a>
</p>
</body>
</html>