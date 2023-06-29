<?php
session_start();
require_once './includes/conn.php';
$sql = "SELECT * FROM reizen";
$all_reizen = $conn->query($sql);
if (isset($_SESSION["user_roll"])  && $_SESSION['user_roll'] > 3) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a59e6fa2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/flights.css">
    <link rel="stylesheet" href="./css/adminflight.css">
    <title>Document</title>
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
       
        <div class="selectbar"></div>
        <div class="reisbar">
        <?php
        $count;
        foreach ($all_reizen as $row) {
        ?>
          <div class="card">
            <div class="card-looks">
            <div class="card-imgcontainer">
              <img class="card-img" src="<?php echo $row["reis_img1"]; ?>" alt="">
              <img class="card-img" src="<?php echo $row["reis_img2"]; ?>" alt="">
            </div>
            <div class="card-ratingbalk">
              <div class="card-edit">
<?php echo "<a class='edit-text' href='./editpageflight.php?reis_id=" . $row['reis_id'] . "'>edit</a>";?>
            </div>
           
           <?php
            
              echo "<a class='card-deletebuton' href='./includes/deleteflight.php?reis_id=" . $row['reis_id'] . "'>delete</a>";
        ?>
          </div>
          </div>
          <div class="card-info">
           <div class="card-first-layer"> <i class="icon fa-regular fa-calendar fa-3x"></i>
          <div class="card-datebalk"> <?php echo $row["reis_datum"];?> (<?php echo $row["reis_dagen"]; ?>)dagen</div>
        </div>
          <div class="card-balk"></div>
          <div class="card-second-layer">
            <i class="icon fa-solid fa-plane fa-3x"></i>
            <div class="card-airportbalk">
<div class="card-planes">Vanaf Rotterdam   +<?php echo $row["rotterdam"];?></div>
<div class="card-balk"></div>
<div class="card-planes">Vanaf Eindhoven   +<?php echo $row["eindhoven"];?></div>
<div class="card-balk"></div>
<div class="card-planes">Vanaf Amsterdam   +<?php echo $row["amsterdam"];?></div>
<div class="card-balk"></div>
<div class="card-planes">Vanaf Dusseldorf  +<?php echo $row["dusseldorf"];?></div>
<div class="card-balk"></div>
            </div>
          </div>
          <div class="card-third-layer">
            <i class="icon fa-sharp fa-solid fa-utensils fa-3x"></i>
        <div class="card-allinclusive-balk"><?php echo $row["reis_allinclusive"];?></div>
        
        </div>
       
        <div class="card-fourth-layer"><?php echo $row["reis_prijs"];?>,-*</div>
          </div>
          </div>
          <?php
        }
        ?>
       
        </div>
        </main>
</body>
</html>