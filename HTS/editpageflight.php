<?php
require_once './includes/conn.php';
session_start();
if (isset($_SESSION["user_roll"])  && $_SESSION['user_roll'] > 3) {
    header('location:index.php');
}
$id = $_GET['reis_id'];
$sql = 'SELECT * FROM reizen WHERE reis_id =:reis_id';
$stmt = $conn->prepare($sql);
$stmt->execute(['reis_id' => $id]);
$reizen = $stmt->fetch(PDO::FETCH_OBJ);


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
                
            <form name="edit_flight" action="./includes/flightedit.php" method="POST">
            <div class="formbalk">
                            <label for="id"><b>id</b></label>
                            <input type="text" value="<?= $reizen->reis_id; ?>" name="reis_id">
                            </div>
                       <div class="formbalk">
                            <label for="land"><b>land</b></label>
                            <input type="text" value="<?= $reizen->reis_land; ?>" name="reis_land">
                            </div>
                            <div class="formbalk">
                            <label for="prijs"><b>prijs</b></label>
                            <input type="text" value="<?= $reizen->reis_prijs; ?>" name="reis_prijs">
                            </div>
                            <div class="formbalk">
                            <label for="beschrijving">beschrijving<b>prijs</b></label>
                            <input type="text" value="<?= $reizen->reis_beschrijving; ?>" name="reis_beschrijving">
                            </div>
                            <div class="formbalk">
                            <label for="allinclusive"><b>allinclusive</b></label>
                            <input type="text" value="<?= $reizen->reis_allinclusive; ?>" name="reis_allinclusive">
                            </div>
                            <div class="formbalk">
                            <label for="datum"><b>datum</b></label>
                            <input type="text" value="<?= $reizen->reis_datum; ?>" name="reis_datum">
                            </div>
                            <div class="formbalk">
                            <label for="dagen"><b>dagen</b></label>
                            <input type="text" value="<?= $reizen->reis_dagen; ?>" name="reis_dagen">
                            </div>
                            <div class="formbalk">
                            <label for="rating"><b>rating</b></label>
                            <input type="text" value="<?= $reizen->reis_rating; ?>" name="reis_rating">
                            </div>
                            <div class="formbalk">
                            <label for="img1"><b>img1</b></label>
                            <input type="text" value="<?= $reizen->reis_img1; ?>" name="reis_img1">
                            </div>
                            <div class="formbalk">
                            <label for="img2"><b>img2</b></label>
                            <input type="text" value="<?= $reizen->reis_img2; ?>" name="reis_img2">
                            </div>
                            <div class="formbalk">
                            <label for="rotterdam"><b>rotterdam</b></label>
                            <input type="text" value="<?= $reizen->rotterdam; ?>" name="rotterdam">
                            </div>
                            <div class="formbalk">
                            <label for="eindhoven"><b>eindhoven</b></label>
                            <input type="text" value="<?= $reizen->eindhoven; ?>" name="eindhoven">
                            </div>
                            <div class="formbalk">
                            <label for="amsterdam"><b>amsterdam</b></label>
                            <input type="text" value="<?= $reizen->amsterdam; ?>" name="amsterdam">
                            </div>
                            <div class="formbalk">
                            <label for="dussledorf"><b>dusseldorf</b></label>
                            <input type="text" value="<?= $reizen->dusseldorf; ?>" name="dusseldorf">
                            </div>
                           

                            <button type="submit" value="submit">change</button>
                        
                    </form>
            </div>

            
        
       
        
    </main>


</body>

</html>