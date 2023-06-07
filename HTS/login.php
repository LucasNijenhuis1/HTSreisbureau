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
            <?php 
            if (isset($_SESSION['voornaam'])){
                echo "welcome ". $_SESSION['voornaam'];
            }
            ?>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
           
        </div>
    </header>

    <main>
        <div class="main2">
            <div class="container10">
                
                <form name="register" action="./includes/registor.php" method="POST"> <ul>
                    <li><label>Register</label><br></li>
                    <li><label for="voornaam">voornaam</label><br></li>
                    <li><input type="text" placeholder="henk" name="voornaam" value=""><br></li>
                    <li><label for="achternaam">achternaam</label><br></li>
                    <li><input type="text" placeholder="jansen" name="achternaam" value=""><br></li>
                    <li><label for="email">email</label><br></li>
                    <li><input type="text" placeholder="Example@.gmail.com" name="email" value=""><br></li>
                    <li><label for="password">Wachtwoord</label><br></li>
                    <li><input type="password"  placeholder="Enter password" name="password" value=""><br></li>
                    <li><input type="submit" value="Register"></li>
                </ul>
              </form>
            </div>

            
        
        <div class="container10">
           
            <form name="login" action="./includes/login.php" method="POST"> <ul>
                <li><label>Login</label><br></li>
                <li><label for="email">email</label><br></li>
                <li><input type="text" placeholder="Example@.gmail.com" name="email" value=""><br></li>
                <li><label for="password">Wachtwoord</label><br></li>
                <li><input type="password" placeholder="Enter password" name="password" value=""><br></li>
                <li><input type="submit" value="Inloggen"></li>
            </ul>
          </form>

        <a href="./includes/logout.php">logout</a>
        <a href="./forgot.html">forgot password</a>
        </div>
    </div>
        
    </main>


</body>

</html>