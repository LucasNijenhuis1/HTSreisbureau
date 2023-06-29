<?php
require_once './includes/conn.php';
session_start();
if (isset($_SESSION["user_roll"])  && $_SESSION['user_roll'] > 3) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/adminpage.css">
    <title>Document</title>
</head>
<body>
  
    <div class="pagesbalk">
    <div class="whitebar"></div>
    <a class="textbalk" href="index.php">Home</a> 
        <div class="whitebar"></div>
        <a class="textbalk" href="adminflights.php">Flights</a> 
        <div class="whitebar"></div>
        <a class="textbalk" href="">Users</a> 
        <div class="whitebar"></div>
        <a class="textbalk" href="">Orders</a> 
        <div class="whitebar"></div>
        
    </div>
<div class="textbox">Welcome to the Admin panel</div>
</body>
</html>