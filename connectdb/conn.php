<?php
$host = 'localhost';
$db = 'connect';
$user ='root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful<br>";
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

