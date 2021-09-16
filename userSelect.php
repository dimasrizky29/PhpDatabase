<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

include ('connection.php');

$Address = isset($_POST["selectAddress"]) ? $_POST["selectAddress"]: "123";

$sql = "SELECT * FROM `user` WHERE `Address` = '$Address'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result)>0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        echo "address :".$row['Address']."|username :".$row['Username']."|lobby :".$row['Lobby']."|room :".$row['Room']."|date :".$row['Date']."|winlose :".$row['WinLose']."|status :".$row['Status']."";
    }
}
?>
