<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="Contenedor1">
    <h1>Registro</h1>
    <form action="procesar_registro.php" method="post">
    <label>Usuario:</label>
    <input type="text" name="usuario" required><br><br>
    <label>Contraseña:</label>
    <input type="password" name="password" required><br><br>
    <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>
</body>
</html>