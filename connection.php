<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 1000");
header("Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

$server = "13.213.144.133";
$username = "yatech";
$password = "Yatech@5758";
$db = "dogedatabase";

$connect = new mysqli ($server, $username, $password, $db);
?>
