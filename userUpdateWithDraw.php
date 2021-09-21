<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

include ('connection.php');

//if (isset($_POST["editAddress"]) && isset($_POST["editUsername"]) && isset($_POST["editLobby"])&& isset($_POST["editRoom"]) : "else");
$Status = $_POST["editStatus"];

$whereCondition = $_POST["whereCondition"];
//print_r($_POST);

$sql = "UPDATE `withdraw` SET `Status` = '$Status' WHERE `withdraw`.`Address` = '$whereCondition'"; 
mysqli_query($connect, $sql);
echo $sql;
?>