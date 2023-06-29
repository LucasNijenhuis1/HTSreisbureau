<?php 
session_start();
require_once './includes/conn.php';

if(isset($_SESSION["user_roll"])  && $_SESSION['user_roll'] >3){
header('location:index.php');
}
$sql="SELECT * FROM users";
$all_users = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../HTS/css/style.css">
    <link rel="stylesheet" href="../HTS/css/user.css">
    <script src="https://kit.fontawesome.com/1630483488.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
</head>

<body>
<header>
        <div class="headercontainer">
            <a href="index.php"><img src="../HTS/img/image-removebg-preview (1).png" alt=""></a>
          
           <?php if (isset( $_SESSION['user_roll']) &&  $_SESSION['user_roll'] <3){?>
            <a href="adminpage.php"> <i class="fa-sharp fa-solid fa-toolbox "></i></a>
                              <?php  }?>
           
           
        
            <div class="superduper">
           <?php 
           if (isset($_SESSION['voornaam'])){
                echo "welcome ". $_SESSION['voornaam'];
            } ?>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
              </div>
            </div>
            
            </header>

    <main>
        <div class="main2">
            <div class="form-box">
        <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>email</th>
            <th>voornaam</th>
            <th>password</th>
            <th>roll</th>
            <th>delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
  foreach($all_users as $row){
  ?>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["voornaam"];?></td>
            <td><?php echo $row["password"];?></td>
            <td><?php echo $row["roll"];?></td>
            <td><?php echo "<a href='./includes/deleteuser.php?id=" . $row['id'] . "'>Fire</a>"?></td>
            <td><?php echo "<a href='./edituserpage.php?id=" . $row['id'] . "'>Edit</a>"?></td>
        </tr>
        <?php
        }
        ?>
        <tbody>
    </table>
    </div>
</div>
            
        
       
        
    </main>


</body>

</html>