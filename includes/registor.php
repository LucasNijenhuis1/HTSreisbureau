<?php
require_once './conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$sql = "INSERT INTO users (username, password,email) VALUES ('$username','$password','$email')";
$conn->exec($sql);
header(!!!!!!!);
?>