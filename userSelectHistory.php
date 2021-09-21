<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

include ('connection.php');

$Address = $_POST["selectAddress"];

$sql = "SELECT * FROM `history` WHERE `Address` = '$Address'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result)>0)
{
    $num = 0;
    while ($row = mysqli_fetch_assoc($result))
    {
        $num++;
        echo "$num          ".$row['Date']."            ".$row['GamePlayed']."                        ".$row['Status']."                      ".$row['Balance'].";";
    }
}
?>