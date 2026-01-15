<?php
session_start();
require_once __DIR__ . '/../includes/db.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$edad = $_POST["edad"];
$rol = $_POST["rol"];

$stmt = $conn->prepare("UPDATE usuarios SET nombre=?, email=?, edad=?, rol=? WHERE id=?");
$stmt->bind_param("ssisi", $nombre, $email, $edad, $rol, $id);
$stmt->execute();

header("Location: list.php");
exit;
?>