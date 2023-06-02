<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../HTS/css/style.css">
    <script src="https://kit.fontawesome.com/1630483488.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
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
            <a href="./flights.html">flights</a>  
            </header>

    <main>
        <div class="bar">
            <h1>Zoek een vakantie!</h1>
            <form> <ul>
                    <li><label for="bestemming">Bestemming:</label><br></li>
                    <li><input type="text" id="bestemming" name="bestemming" value=""><br></li>
                    <li><label for="datum">Datum:</label><br></li>
                    <li><input type="text" id="datum" name="datum" value=""><br></li>
                    <li><label for="personen">Hoeveel personen:</label><br></li>
                    <li><input type="text" id="personen" name="personen" value=""><br></li>
                    <li><input type="submit" value="zoeken"></li>
                </ul>
              </form>
        </div>
        <div class="hogrider">
            <div class="vakantiebox3">
                <div class="test">
                    <h1>Zomervakanties</h1>
                    <div class="section2">
                        <img src="../HTS/img/vakantie.jpg" alt="">
                        <button>zie zomervakanties</button>  
                    </div>
                </div> 

                <div class="vakantiebox3">
                    <div class="test">
                        <h1>last minute</h1>
                        <div class="section2">
                            <img src="../HTS/img/vakantie.jpg" alt="">
                            <button>zie last minute vakanties</button>
                            
                        </div>
                    </div>   
                </div>

                <div class="vakantiebox3">
                    <div class="test">
                        <h1>all inclusive</h1>
                        <div class="section2">
                            <img src="../HTS/img/vakantie.jpg" alt="">
                            <button>zie all inclusive vakanties</button>
                            
                        </div>
                    </div>   
                </div>

            </div>
        </div>

    </main>

    <footer>

    </footer>
</body>
</html>