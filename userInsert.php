<?php
include ('connection.php');

$Address = $_POST["addAddress"];
$Username = isset($_POST["addUsername"]) ? $_POST["addUsername"]: "";
$Lobby = isset($_POST["addLobby"]) ? $_POST["addLobby"]: "";
$Room = isset($_POST["addRoom"]) ? $_POST["addRoom"]: "";
$Date = isset($_POST["addDate"]) ? $_POST["addDate"]: "";
$WinLose = isset($_POST["addWinLose"]) ? $_POST["addWinLose"]: "";
$Status = isset($_POST["addStatus"]) ? $_POST["addStatus"]: "";


//print_r($_POST);

$sql = "insert into user (Address, Username, Lobby, Room, Date, WinLose, Status) values ('".$Address."','".$Username."','".$Lobby."','".$Room."','".$Date."','".$WinLose."','".$Status."')";
$result = mysqli_query($connect, $sql);
?>