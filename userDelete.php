<?php
include ('connection.php');

$whereCondition = $_POST['whereCondition'];

$sql = "DELETE FROM `user` WHERE `user`.`Address` = '$whereCondition'"; 
$result = mysqli_query($connect, $sql);
?>