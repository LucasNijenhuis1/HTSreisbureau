<?php
require_once './conn.php';
$data = [
    'voornaam' => $_POST['voornaam'],
    'achternaam' => $_POST['achternaam'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];

$sql = "INSERT INTO users (voornaam, achternaam,email,password) VALUES (:voornaam, :achternaam, :email, :password)";
$stmt = $conn->prepare($sql);
$stmt->execute($data);
header('location: ../login.php');
?>