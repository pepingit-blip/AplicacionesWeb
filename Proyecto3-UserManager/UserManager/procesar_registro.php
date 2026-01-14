<?php
session_start();
require_once __DIR__ . '/../includes/db.php';

echo "<link rel='stylesheet' href='styless.css'>";

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$edad = $_POST['edad'] ?? '';

$check = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "
    <div class='mensaje-contenedor'>
        <h1 class='error'>❌ El email ya está registrado</h1>
        <p><a href='registro.php'>Volver al registro</a></p>
    </div>";
    exit();
}
$check->close();


$hash = password_hash($password, PASSWORD_DEFAULT);


$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password, edad, rol) VALUES (?, ?, ?, ?, 'user')");
$stmt->bind_param("sssi", $nombre, $email, $hash, $edad);

if ($stmt->execute()) {

    $user_id = $stmt->insert_id;
    $_SESSION['usuario_id'] = $user_id;
    $_SESSION['usuario_nombre'] = $nombre;
    $_SESSION['usuario_rol'] = 'user';
    
    echo "
    <div class='mensaje-contenedor'>
        <h1 class='exito'>🎉 Usuario registrado correctamente</h1>
        <p><a href='../index.php'>Ir al Inicio</a></p>
    </div>";
} else {
    echo "
    <div class='mensaje-contenedor'>
        <h1 class='error'>❌ Error al registrar</h1>
        <p><a href='registro.php'>Volver al registro</a></p>
    </div>";
}

$stmt->close();
$conn->close();
?>