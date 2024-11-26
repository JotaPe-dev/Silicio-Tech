<?php
$host = 'localhost';
$db = 'etech';
$user = 'root';
$pass = ''; // Substitua por uma senha segura

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
    exit;
}
?>
