<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenido</title>
<link rel="stylesheet" href="../css/styless.css">
</head>
<body>
    <div class="Bienvenido-contenedor">
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?> 👋</h1>
    <p>Has iniciado sesión correctamente.</p>

    <a href="../admin/dashboard.php">Ir al Dashboard</a><br>
    <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
