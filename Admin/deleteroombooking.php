<?php
include "links.php";
include "connect.php";
include "header.php";


$Id = $_GET['id'];
   
    $query = "DELETE FROM room_booking where id = '" . $Id . "'";
    $result = mysqli_query($connect, $query) ;
    if($result)
    {
   
    header('Location: roombook.php');
    }
      
?>
 
