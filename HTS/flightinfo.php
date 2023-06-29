<?php
session_start();
require_once './includes/conn.php';

$id = $_GET['reis_id'];
$sql = 'SELECT * FROM reizen WHERE reis_id =:reis_id';
$stmt = $conn->prepare($sql);
$stmt->execute(['reis_id' => $id]);
$reizen = $stmt->fetch();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/flightinfo.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a59e6fa2d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
    </header>
  
    <main>
   
        <div class="jesjes">
            <div class="header2">
                <a href="./flights.php" class="fa-solid fa-arrow-left"> TERUG NAAR VAKANTIES</a> 
                <h1> </h1>
            </div>

            <div class="mainimg">
            <img  src="<?php echo $reizen["reis_img1"]; ?>" alt="">
            </div>

            <div class="footer2">
                <div class="kaas1">
                    <div class="ratingbox">
                        <h1 class="wit"><?php echo $reizen["reis_rating"]; ?>/10</h1>
                        <div class="poepie">
                            <div class="kaka">
                               
                            </div>
                            <div class="kaka">
                              
                            </div>
                        </div>
                        <div class="poepie">
                            <div class="kaka">
                            <?php if (isset( $_SESSION['user_roll']) &&  $_SESSION['user_roll'] <11){?> 
                            <form action="./includes/addbooking.php" method="POST">
                            <input type="hidden"  value="<?php echo $_GET["reis_id"] ?>" name="reis_id">
                            <input type="hidden"  value="<?php echo $_SESSION['user_id'] ?>" name="user_id">
                            <input type="submit" placeholder="Book" value="book" name="book">
                        </form>
                        <?php  }?>
                            </div>
                            <div class="kaka">
                                <i class="fa-solid fa-location-dot fa-2x"></i>
                                <h1><?php echo $reizen["reis_land"];?></h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kaas">
                    <h2><?php echo $reizen["reis_beschrijving"];?></h2>
                </div>

                <div class="kaas2">
                    <div class="flexplanes">
                        <i class="icon fa-regular fa-calendar fa-2x"></i>
                        <h1><?php echo $reizen["reis_datum"];?>(<?php echo $reizen["reis_dagen"]; ?>)dagen</h1>
                    </div>
                    <div class="flexplanes">
                        <div class="planes">
                        <i class="icon fa-solid fa-plane fa-2x"></i>
                        <h1>Vanaf Amsterdam   +<?php echo $reizen["amsterdam"];?></h1>
                        </div>
                        <div class="planes">
                        <i class="icon fa-solid fa-plane fa-2x"></i>
                        <h1>Vanaf Rotterdam   +<?php echo $reizen["rotterdam"];?></h1>
                        </div>
                        <div class="planes">
                        <i class="icon fa-solid fa-plane fa-2x"></i>
                        <h1>Vanaf Eindhoven   +<?php echo $reizen["eindhoven"];?></h1>
                        </div>
                        <div class="planes">
                        <i class="icon fa-solid fa-plane fa-2x"></i>
                        <h1>Vanaf Dusseldorf  +<?php echo $reizen["dusseldorf"];?></h1>
                        </div>
                       
                    </div>
                    <div class="flexcol">
                        <h1><?php echo $reizen["reis_prijs"];?>,-*</h1>
                        <p>per persoon</p>
                    </div>
                </div>
            </div>
        </div>
      
       
    </main>
        
</body>
</html>