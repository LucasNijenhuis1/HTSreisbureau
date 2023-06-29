<?php
session_start();
require_once './includes/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../HTS/css/style.css">
    <link rel="stylesheet" href="../HTS/css/order.css">
    <script src="https://kit.fontawesome.com/1630483488.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <div class="headercontainer">
        <a href="index.php"><img src="../HTS/img/image-removebg-preview (1).png" alt=""></a>

        <?php if (isset($_SESSION['user_roll']) && $_SESSION['user_roll'] < 3) { ?>
            <a href="adminpage.php"><i class="fa-sharp fa-solid fa-toolbox "></i></a>
        <?php } ?>

        <div class="superduper">
            <?php
            if (isset($_SESSION['voornaam'])) {
                echo "welcome " . $_SESSION['voornaam'];
            } ?>
            <a href="login.php"><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
</header>
<main>
    <div class="order-box">
        <?php
        $sql = "SELECT reizen.reis_beschrijving, reizen.reis_datum, reizen.reis_land FROM boekingen INNER JOIN reizen ON boekingen.reis_id = reizen.reis_id WHERE user_id = :user_id;";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":user_id", $_SESSION['user_id']);
        $stmt->execute();
        $results = $stmt->fetchAll();

     
            ?>
             <div class="table-wrapper">
    <table class="fl-table">
      <h1>mijn boekingen</h1>
        <thead>
        <tr>
            <th>beschrijving</th>
            <th>datum</th>
            <th>land</th>
          
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
  foreach($results as $result){
  ?>
            <td><?php echo $result["reis_beschrijving"];?></td>
            <td><?php echo $result["reis_datum"];?></td>
            <td><?php echo $result["reis_land"];?></td>
        </tr>
        <?php
        }
        ?>
        <tbody>
    </table>
            <!-- <div class="orderbalk">
                <?php echo $result['reis_beschrijving'] ?>
                <?php echo $result['reis_datum'] ?>
                <?php echo $result['reis_land'] ?>
                </div> -->
    </div>
</main>
</body>
</html>
        
            </div>

            
        
       
        
    </main>


</body>

</html>