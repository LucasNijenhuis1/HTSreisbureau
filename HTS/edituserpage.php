<?php
require_once './includes/conn.php';
session_start();
if (isset($_SESSION["user_roll"])  && $_SESSION['user_roll'] > 3) {
    header('location:index.php');
}
$id = $_GET['id'];
$sql = 'SELECT * FROM users WHERE id =:id';
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);
$users = $stmt->fetch(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../HTS/css/style.css">
    <link rel="stylesheet" href="../HTS/css/editpageflight.css">
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
              <img src="./img/vakantie.jpg" alt=""background>
           
            </header>

    <main>
        <div class="main2">
            <div class="form-box">
                
            <form name="edit_user" action="./includes/useredit.php" method="POST">
            <div class="formbalk">
                            <label for="id"><b>id</b></label>
                            <input type="text" value="<?= $users->id; ?>" name="id">
                            </div>
                       <div class="formbalk">
                            <label for="voornaam"><b>voornaam</b></label>
                            <input type="text" value="<?= $users->voornaam; ?>" name="voornaam">
                            </div>
                            <div class="formbalk">
                            <label for="achternaam"><b>achternaam</b></label>
                            <input type="text" value="<?= $users->achternaam; ?>" name="achternaam">
                            </div>
                            <div class="formbalk">
                            <label for="email"><b>email</b></label>
                            <input type="text" value="<?= $users->email; ?>" name="email">
                            </div>
                            <div class="formbalk">
                            <label for="password"><b>password</b></label>
                            <input type="text" value="<?= $users->password; ?>" name="password">
                            </div>
                            <div class="formbalk">
                            <label for="roll"><b>roll</b></label>
                            <input type="text" value="<?= $users->roll; ?>" name="roll">
                            </div>
                           
                            <button type="submit" value="submit">change</button>
                        
                    </form>
            </div>

            
        
       
        
    </main>


</body>

</html>