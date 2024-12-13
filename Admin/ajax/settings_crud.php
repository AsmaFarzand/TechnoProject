<?php
require ("../connect.php");
require ("../essentials.php");

adminpage();

if(isset($_POST['get_general']))
{
    $a= "SELECT * FROM `settings` WHERE `Id` = ?";
    $values = [2];
    $res = select ($a,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}
?>
