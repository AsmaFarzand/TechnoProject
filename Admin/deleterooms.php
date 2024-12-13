<?php
include "links.php";
include "connect.php";
include "header.php";


$Id = $_GET['Room_Id'];
   
    $query = "DELETE FROM room_details where Room_Id = '" . $Id . "'";
    $result = mysqli_query($connect, $query) ;
    if($result)
    {
   
    header('Location: roombook.php');
    }
      
?>
 
