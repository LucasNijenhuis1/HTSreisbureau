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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a59e6fa2d.js" crossorigin="anonymous"></script>
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
       
        <div class="hogrider">
<a class="vakantiebox3" href="flights.php">Flights</a>
<a class="vakantiebox3" href="">Youre Orders</a>
<a class="vakantiebox3" href="">HTS Garanties en Verzekeringen</a>

                    
                            
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