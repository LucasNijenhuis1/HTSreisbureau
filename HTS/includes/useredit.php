<?php
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id' => $_POST['id'],
        'email' => $_POST['email'],
        'voornaam' => $_POST['voornaam'],
        'password' => $_POST['password'],
        'roll' => $_POST['roll'],
    ];

    $sql = "UPDATE users SET email=:email, voornaam=:voornaam, password=:password, roll=:roll WHERE id=:id";

    $stmt = $conn->prepare($sql);
    $stmt->execute($data);

    header("Location: ../adminuser.php");
    exit();
}