<?php
session_start();
require_once __DIR__ . '/../includes/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, nombre, password, rol FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
   
    echo "<h1>Usuario no encontrado ❌</h1>";
    echo "<p><a href='registro.php'>Registrarse</a></p>";
    exit;
}

$stmt->bind_result($id, $nombre, $hash, $rol);
$stmt->fetch();

if (!isset($password) || !isset($hash) || !is_string($password) || !is_string($hash)) {
    echo "<h1>Error en datos de autenticación ❌</h1>";
    echo "<p><a href='login.php'>Volver a intentar</a></p>";
    exit;
}

if (password_verify($password, $hash)) {
    $_SESSION['usuario_id'] = $id;
    $_SESSION['usuario_nombre'] = $nombre;
    $_SESSION['usuario_rol'] = $rol;
    header("Location: ../index.php");
    exit;
} else {
    echo "<h1>Contraseña incorrecta ❌</h1>";
    echo "<p><a href='login.php'>Volver a intentar</a></p>";
}

$stmt->close();
$conn->close();
?>