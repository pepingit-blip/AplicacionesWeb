<?php
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];
// Leer archivo de usuarios
$usuarios = file("usuarios.txt", FILE_IGNORE_NEW_LINES);
$login_exitoso = false;
foreach ($usuarios as $linea) {
list($user, $hash) = explode(":", $linea);
if ($user === $usuario && password_verify($password, $hash)) {
$login_exitoso = true;
$_SESSION['usuario'] = $usuario;
break;
}
}
if ($login_exitoso) {
header("Location: bienvenida.php");
exit;
} else {
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario o contraseña incorrectos</title>
    <style>
        body {
            font-family: Arial,;
            background: linear-gradient(135deg, #f8f8f8ff, #e21f1fff);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; 
        }

    </style>
</head>
<body>
    <h1>Usuario o contraseña incorrectos ❌</h1>
    <p><a href='login.php'>Volver a intentar</a></p>
</body>
</html>