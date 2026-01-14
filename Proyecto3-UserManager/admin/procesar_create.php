<?php
session_start();
require_once __DIR__ . '/../includes/db.php';

// Verificar que sea admin
if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_rol'] !== 'admin') {
    header("Location: login.php");
    exit;
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$password = $_POST['password'];
$rol = $_POST['rol'];

// ¡¡¡IMPORTANTE!!! - ENCRIPTAR LA CONTRASEÑA
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insertar en la base de datos
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, edad, password, rol) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $nombre, $email, $edad, $password_hash, $rol);

if ($stmt->execute()) {
    header("Location: list.php");
    exit;
} else {
    echo "Error al crear usuario: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>