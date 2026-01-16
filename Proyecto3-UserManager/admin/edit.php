<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Usuario</title>
        <link rel="stylesheet" href="../css/styless.css">
    </head>
    <body>
        <div class="form-container">
            <h1>Editar Usuario</h1>
            <form method="POST" action="procesar_edit.php">
            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
            <p>Nombre:</p>
            <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required><br>
            <p>Email:</p>
            <input type="email" name="email" value="<?= $usuario['email'] ?>" required><br>
            <p>Edad:</p>
            <input type="number" name="edad" value="<?= $usuario['edad'] ?>" required><br>
            <select name="rol">
            <option value="user" <?= $usuario['rol']=='user'?'selected':'' ?>>Usuario</option>
            <option value="admin" <?= $usuario['rol']=='admin'?'selected':'' ?>>Administrador</option>
            </select>
            <button class="btn" type="submit">Actualizar</button>
            </form>
        </div>

    <script src="../js/validation.js"></script>
    </body>
</html>