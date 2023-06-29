<?php


session_start();


$con = mysqli_connect('localhost','root','','htsreisbureau');
$sql = "SELECT * FROM reizen";
$all_reizen = $con->query($sql);
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
                <form action="searchflights.php" method="GET"> 
                    <ul>
                        <div class="block"><li><label>land:</label><br></li>
                        <li><input type="text" id="land" name="land" value=""><br></li></div>
                       
                       <div class="block"> <li><label>Datum:</label><br></li>
                        <li><input type="text" id="datum" name="datum" value=""><br></li></div>
                        <div class="block"> <li><input name="submit" type="submit" class="textzoek" value="zoeken"></li></div>
                    </ul>
                  </form>
             
             
      </header>
      <main>
      <div class="selectbar"></div>
        <div class="reisbar">
      <?php 
              if (isset($_GET['submit'])){
                $naam = $_GET['land'];
                $datum = $_GET['datum'];
                $sql = "SELECT * FROM reizen WHERE reis_land LIKE '%$naam%' OR reis_datum = '%$datum%'";
               
                $exe = mysqli_query($con,$sql)or die("Query failled !!"); 
            if (mysqli_num_rows($exe) > 0){
              while ($row = mysqli_fetch_assoc($exe)){ 
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
            <div class="card-bookingbuton"><?php echo "<a href='./flightinfo.php?reis_id=" . $row['reis_id'] . "'>Book</a>";?></div>
            
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
          <?php }}} ?>
          </div>
          
        </div>
        </main>
</body>
</html>