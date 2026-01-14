<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio - UserManager</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="inicio">
        <h1>UserManager</h1>
        <p>Sistema de gestión de usuarios</p>
        
        <?php
        session_start();
        if (isset($_SESSION['usuario_id'])): 
        ?>
            <p>Hola, <?php echo $_SESSION['usuario_nombre']; ?></p>
            <a href="admin/dashboard.php">Dashboard</a>
            <a href="UserManager/logout.php">Salir</a>
            <a href="UserManager/bienvenido.php">Bienvenido</a>
        <?php else: ?>
            <a href="UserManager/login.php">Entrar</a>
            <a href="UserManager/registro.php">Registrarse</a>
        <?php endif; ?>
    </div>
</body>
</html>