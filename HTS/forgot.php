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
                <form>
                    <ul>
                        <li><label>Forgot password</label><br></li>
                        <li><label for="email">email</label><br></li>
                        <li><input type="text" placeholder="Example@gmail.com" name="email" value=""><br></li>
                        <li><input type="submit" value="submit"></li>
                    </ul>
                </form>
                <a href="./login.php">already have a account?</a>
            </div>
        </div>
        
    </main>


</body>

</html>