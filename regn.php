<?php
 include "connection.php";

$fname = mysqli_real_escape_string($con, $_POST["frstname"]);
$lname=mysqli_real_escape_string($con, $_POST['lastname']);
$username=mysqli_real_escape_string($con, $_POST['username']);
$password=mysqli_real_escape_string($con, $_POST['pass']);
$dob=mysqli_real_escape_string($con, $_POST['dob']);
$gender=mysqli_real_escape_string($con, $_POST['gender']);
$emailid=mysqli_real_escape_string($con, $_POST['emailid']);
$phoneno=mysqli_real_escape_string($con, $_POST['phoneno']);

$sql="INSERT INTO registration(frstname,lastname,username,pass,gender,dob,emailid,phoneno) 
VALUES('$fname','$lname','$username','$password', '$gender', '$dob','$emailid','$phoneno')";

if (($con->query($sql) === TRUE)) {
           echo "Customer created successfully \n";
           header('location:login.php');
		}
else
	echo "Error: " . $sql . "<br>" . $con->error;
 ?>
