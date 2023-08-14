<?php

include_once 'connectDB.php';
$id =  $_GET['id'];


$sql = "DELETE FROM  `item` 
  WHERE itemID = $id ";


$result = mysqli_query($conn, $sql);

header('location:insert.php');
?>