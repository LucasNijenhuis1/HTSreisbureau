<?php 
require_once 'conn.php';
if (isset($_POST["book"])){
   $sql = "INSERT INTO `boekingen`(`reis_id`, `user_id`) VALUES (:reis_id, :user_id);";
   $stmt = $conn -> prepare($sql);
 $stmt ->bindParam(":reis_id",$_POST["reis_id"]);
 $stmt ->bindParam(":user_id",$_POST["user_id"]);
   $stmt-> execute();
   echo "boeking voltooid";
}