<?php
require_once 'conn.php';

$data = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];

$sql = 'SELECT * FROM users WHERE email = :email AND password =:password ';
$stmt = $conn->prepare($sql);
$stmt->execute($data);
$user = $stmt->fetch();

if ($user) {
    session_start();

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['voornaam'] = $user['voornaam'];
    $_SESSION['achternaam'] = $user['achternaam'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['user_roll'] = $user['roll'];
    header('location: ../index.php');
} else {
    header('location: ../login.php');
}
