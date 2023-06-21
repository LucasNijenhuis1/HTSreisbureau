<?php
session_start();
require_once './includes/conn.php';
$sql = "SELECT * FROM reizen";
$all_reizen = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a59e6fa2d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/flights.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="headercontainer">
            <a href="index.php"><img src="../HTS/img/image-removebg-preview (1).png" alt=""></a>
            <div class="superduper">
           <?php 
           if (isset($_SESSION['voornaam'])){
                echo "welcome ". $_SESSION['voornaam'];
            } ?>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
              </div>
            </div>
              <img src="./img/vakantie.jpg" alt=""background>
              <div class="bar">
                <h1>Zoek een vakantie!</h1>
                <form> 
                    <ul>
                        <div class="block"><li><label for="bestemming">Bestemming:</label><br></li>
                        <li><input type="text" id="bestemming" name="bestemming" value=""><br></li></div>
                       
                       <div class="block"> <li><label for="datum">Datum:</label><br></li>
                        <li><input type="text" id="datum" name="datum" value=""><br></li></div>
        
                       <div class="block"> <li><label for="personen">Hoeveel personen:</label><br></li>
                        <li><input type="text" id="personen" name="personen" value=""><br></li></div>
                        <div class="block"> <li><input type="submit" class="textzoek" value="zoeken"></li></div>
                    </ul>
                  </form>
                </div>
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
              <div class="card-rating">
<div class="rating-text"><?php echo $row["reis_rating"]; ?>/10</div>
            </div>
            <div class="card-bookingbuton">Ontdek</div>
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