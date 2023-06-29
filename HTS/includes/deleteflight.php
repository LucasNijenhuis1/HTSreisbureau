<?php
require_once 'conn.php';

$id = $_GET['reis_id'];
if (isset($id)){
   $sql="DELETE FROM `reizen` WHERE `reis_id`=:reis_id";
   $stmt = $conn -> prepare($sql);
   $stmt-> execute(['reis_id'=> $id]);
   header ("location: ../adminflights.php");
}
?>