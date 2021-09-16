<?php
include ('connection.php');

//if (isset($_POST["editAddress"]) && isset($_POST["editUsername"]) && isset($_POST["editLobby"])&& isset($_POST["editRoom"]) : "else");

$Address = isset($_POST["editAddress"]) ? $_POST["addAddress"]: "";
$Username = isset($_POST["editUsername"]) ? $_POST["editUsername"]: "";
$Lobby = isset($_POST["editLobby"]) ? $_POST["editLobby"]: "";
$Room = isset($_POST["editRoom"]) ? $_POST["editRoom"]: "";
$Date = isset($_POST["editDate"]) ? $_POST["editDate"]: "";
$WinLose = isset($_POST["editWinLose"]) ? $_POST["editWinLose"]: "";
$Status = isset($_POST["editStatus"]) ? $_POST["editStatus"]: "";

$whereCondition = isset($_POST["whereCondition"]) ? $_POST["whereCondition"]: "dawdaw";
//print_r($_POST);

$sql = "UPDATE `user` SET `Username` = '$Username', `Lobby` = '$Lobby', `Room` = '$Room', `Date` = '$Date', `WinLose` = '$WinLose', `Status` = '$Status' WHERE `user`.`Address` = '$whereCondition'"; 
mysqli_query($connect, $sql);
echo $sql;
?>