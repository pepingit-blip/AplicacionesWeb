<?php 
include"db.php";

if ($_POST){
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $edad=$_POST["edad"];
    $rol=$_POST["rol"];
try{    
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre,eail,edad,rol)VALUES(?,?,?,?)");
    $stmt->execute([$nombre,$email,$edad,$rol]);
} catch (PDOException $e) {
    die("Error de conexion: " . $e->getMessage());
}
    header("Location:list.php");
    exit;
}
?>