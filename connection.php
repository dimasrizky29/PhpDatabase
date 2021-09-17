<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$server = "13.213.144.133";
$username = "yatech";
$password = "Yatech@5758";
$db = "dogedatabase";

$connect = new mysqli ($server, $username, $password, $db);
?>
