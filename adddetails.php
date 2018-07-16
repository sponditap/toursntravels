<?php

include "connection.php";

$packageid=mysqli_real_escape_string($con, $_POST['packageid']);
$addplace=mysqli_real_escape_string($con, $_POST['addplace']);
$adults=mysqli_real_escape_string($con, $_POST['adults']);
$children=mysqli_real_escape_string($con, $_POST['children']);
$description=mysqli_real_escape_string($con, $_POST['description']);
$stayamount=mysqli_real_escape_string($con, $_POST['stayamount']);
$foodamount=mysqli_real_escape_string($con, $_POST['foodamount']);
$airlinesamount=mysqli_real_escape_string($con, $_POST['airlinesamount']);
$noofdays=mysqli_real_escape_string($con, $_POST['noofdays']);
$noofnights=$noofdays - 1;
$choose=mysqli_real_escape_string($con, $_POST['choose']);
$sql="INSERT INTO adddetails(packageid,addplace,adults,children,description,stayamount,foodamount,airlinesamount,noofdays,noofnights,choose) VALUES('$packageid','$addplace','$adults','$children','$description','$stayamount','$foodamount','$airlinesamount','$noofdays','$noofnights','$choose')";


if($con->query($sql) === TRUE)
{
			echo '<script language="javascript">';
  			echo 'alert("Successfully added package")'; 
  			echo '</script>';
			header("location:admin1.php");
}


?>

