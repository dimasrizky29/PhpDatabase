<?php
include ('connection.php');

$Address = $_POST["addAddress"];
$Date = isset($_POST["addDate"]) ? $_POST["addDate"]: "";
$GamePlayed = isset($_POST["addGamePlayed"]) ? $_POST["addGamePlayed"]: "";
$Status = isset($_POST["addStatus"]) ? $_POST["addStatus"]: "";
$Balance = isset($_POST["addBalance"]) ? $_POST["addBalance"]: "";
//print_r($_POST);

$sql = "insert into history (Address, Date, GamePlayed, Status, Balance) values ('".$Address."','".$Date."','".$GamePlayed."','".$Status."','".$Balance."')";
$result = mysqli_query($connect, $sql);
?>