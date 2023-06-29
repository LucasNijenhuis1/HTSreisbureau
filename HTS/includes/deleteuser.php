<?php
require_once 'conn.php';

$id = $_GET['id'];
if (isset($id)){
   $sql="DELETE FROM `users` WHERE `id`=:id";
   $stmt = $conn -> prepare($sql);
   $stmt-> execute(['id'=> $id]);
   header ("location: ../adminuser.php");
}
?>