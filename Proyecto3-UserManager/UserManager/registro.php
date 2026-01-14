<?php
session_start();
require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../includes/db.php';

if (estaAutenticado()) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro - UserManager</title>
<link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="fondo-patron">
        <div class="Registro">
            <h1>Registro de usuario</h1>
            
            <form action="procesar_registro.php" method="post">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
                <input type="number" name="edad" placeholder="Edad" required>
                <button type="submit">Registrarse</button>
            </form>
            
            <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
        </div>
    </div>
</body>
</html>