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
        <h1>Inicio de Sesion</h1>
        <form action="procesar_login.php" method="post">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Iniciar Sesion</button>
        </form>
        <p>¿No tienes cuenta? <a href="registro.php">Registrate aqui</a></p>
    </div>
</body>
</html>