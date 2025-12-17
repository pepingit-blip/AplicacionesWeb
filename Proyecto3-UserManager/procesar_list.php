<?php include"db.php";
$stmt=$pdoo->query("SELECT*FROM usuarios");
$usuarios=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>