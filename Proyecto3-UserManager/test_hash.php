<?php
// Prueba DIRECTA de password_hash y password_verify
$password = 'password123';
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "<h2>Prueba de Hash</h2>";
echo "Contraseña: $password<br>";
echo "Hash generado: $hash<br>";
echo "Longitud: " . strlen($hash) . "<br><br>";

// Verificar
$result = password_verify($password, $hash);
echo "password_verify resultado: " . ($result ? '✅ TRUE' : '❌ FALSE') . "<br><br>";

// Prueba con hash específico
$hash_fijo = '$2y$10$2a$10$TuHashDePrueba1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$result2 = password_verify($password, $hash_fijo);
echo "password_verify con hash fijo: " . ($result2 ? '✅ TRUE' : '❌ FALSE');
?>