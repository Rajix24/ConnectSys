<?php
include '../connectdb/conn.php';

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


 if (!isset($_POST['submit'])) header('location: ../pages/connexion.html');
$stmt = $pdo->prepare("INSERT INTO contact (USERNAME, USERPASSWORD, EMAIL) VALUES (?, ?, ?)");
$stmt->execute([$name, $password, $email]);

