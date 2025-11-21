<?php
include "conexion.php";

echo "<link rel='stylesheet' href='a.css'>";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Comprobar si el usuario ya existe
$check = $conn->prepare("SELECT id FROM usuarios WHERE usuario = ?");
$check->bind_param("s", $usuario);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo "
    <div class='mensaje-contenedor'>
        <h1 class='error'>❌ El usuario ya existe</h1>
        <p><a href='registro.php'>Volver al registro</a></p>
    </div>";
    
    exit();
}

$check->close();

// Encriptar contraseña
$hash = password_hash($password, PASSWORD_DEFAULT);

// Insertar usuario
$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $hash);

if ($stmt->execute()) {
    echo "
    <div class='mensaje-contenedor'>
        <h1 class='exito'>🎉 Usuario registrado correctamente</h1>
        <p><a href='login.php'>Iniciar sesión</a></p>
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
