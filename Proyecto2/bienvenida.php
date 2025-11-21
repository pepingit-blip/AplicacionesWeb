<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenida</title>
<link rel="stylesheet" href="a.css">
<style>
    body {
    margin: 0;
    padding: 0;
    height: 100vh;
    background: #f6f9fc;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
</head>

<body>
    <div class="fondo-blobs">
    <div class="blob"></div>
    <div class="blob"></div>
    <div class="blob"></div>
</div>

<div class="bienvenida">
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> 🎉</h1>
    <p>Has iniciado sesión correctamente.</p>
    <p><a href="logout.php">Cerrar sesión</a></p>
</div>

</body>
</html>
