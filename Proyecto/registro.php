<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial,;
            background: linear-gradient(135deg, #cccedbff, #2575fc);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contenedor1 {
            background-color: white;
            padding: 30px 40px;
            border-radius: 15px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            display: flex;
        }
    </style>
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