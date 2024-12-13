<?php



$connect = mysqli_connect("localhost","root","","hospital");
if($connect -> connect_error)
{
    die('Connection Failed : ' . $connect->connect_error);

}
else
{
    // echo "ok";
}


?>



