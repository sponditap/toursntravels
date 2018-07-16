
<?php
		include "connection.php";
		$myusername=$_POST['username'];
		$mypassword=$_POST['pass'];
		

		$sql0="SELECT * FROM registration WHERE username='".$myusername."' AND pass='".$mypassword."'";
		$result = $con->query($sql0);
		if($result->num_rows > 0)
		{
			$row=$result->fetch_assoc();
			$sname=$row[0];
			session_start();
			$_SESSION['username']=$myusername;
			$_SESSION['fname'] = $row["frstname"];
			$_SESSION['loggedIn_cust_id'] = $row["id"];
			$cookie_name = "user";
			$cookie_value = $myusername;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			$_SESSION['Status']="Session Status: Login Success!!!";
			header("location:user.php");
		}
		else 
		{	
			session_start();
			if (isset($_SESSION['SName'])){
			unset($_SESSION['SName']);
		    }
		$_SESSION['Status']="Session Expired!!!";
		header("location:relogin.php");
	}
?>