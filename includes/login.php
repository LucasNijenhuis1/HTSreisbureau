<?php
require_once 'conn.php';
$data = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

$sql = 'SELECT * FROM users WHERE username = :username AND password =:password ';
$stmt = $conn->prepare($sql);
$stmt->execute($data);
$user = $stmt->fetch();

if ($user) {
    session_start();

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['username'] = $user['username'];
    header('!!!!!!!!');
} else {
    header('!!!!!');
}
