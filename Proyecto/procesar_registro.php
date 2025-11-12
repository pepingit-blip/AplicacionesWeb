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
    <style> body { 
            font-family: Arial,;
            background: linear-gradient(135deg, #ffffffff, #4ff12eff);
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
    <h2>Usuario registrado correctamente</h2>
    <a style="margin-bottom: 30px;" class="final" href='login.php'>Iniciar sesión</a>
</body>
</html>