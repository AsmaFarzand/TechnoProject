<?php
include "links.php";
include "connect.php";
include "header.php";


$Id = $_GET['Id'];
   
    $query = "DELETE FROM doctors where Id = '" . $Id . "'";
    $result = mysqli_query($connect, $query) ;
    if($result)
    {
   
    header('Location: doctordetails.php');
    }
      
?>
 
