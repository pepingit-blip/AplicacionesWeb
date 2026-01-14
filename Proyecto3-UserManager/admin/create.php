
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear Usuario</title>
        <link rel="stylesheet" href="css/styless.css">
    </head>
    <body>
        <div class="Fondo-create">
        <div class="contenedor-forma">
            <h1>Crear Usuario</h1>
            <form method="POST" action="procesar_create.php">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="edad" placeholder="Edad" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <select name="rol">
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
            <button class="btn" type="submit">Guardar</button>
            </form>
            <div class="Volver-listado">
            <a class="btn" href="list.php">Volver al Listado</a>
        </div>
        </div>

    <script src="js/validacion.js"></script>
    </body>
</html>