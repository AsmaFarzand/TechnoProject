<?php
include "links.php";
include "connect.php";
include "header.php";
$id = $_GET["Id"];
$query = "DELETE FROM patientqueries where Id = '" .$id. "'";
$result = mysqli_query($connect, $query);
if($result){
header('Location:userquery.php');
}
