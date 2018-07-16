
<?php

	include "connection.php";
	?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Registration</title>
	<meta charset="utf-8">
	<style>
		body
		{
			width: 100%;
		height: 100%;

    background-image: url("image/reg.png") ;
	background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;overflow-x: 
		}

		.error {color: #FF0000;}

		header
	{
		
	    border: 1px ;
	    margin-top: 0px;
		color: #FFFFFF;

         height: 0px;
         top: 10px;

		background: rgba(0,0,0,0.5);
		width: 100%;
		text-c
	}
	
		
		div.registration
		{
			width: 380px;
		height: 500px;
		background-color: rgba(0,0,0,0.65);
		margin: 0 auto;
		margin-top: 15px;
		padding-top: 10px;
		padding-left: 30px;
		padding-right: 20px;
		border-radius: 15px;
		color: white;
		font-weight: bolder;
		box-shadow: 4px 4px rgba(1,1,1,1);
		
		}
		div.registration input[type="text"]
{
	width: 200px;
	height: 20px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;

}

	div.registration input[type="password"]
{
	width: 200px;
	height: 20px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;
}
	div.registration input[type="date"]
{
	width: 150px;
	height: 20px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;
}
	div.registration input[type="E-Mail"]
{
	width: 200px;
	height: 20px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;
}
	div.registration input[type="number"]
{
	width: 200px;
	height: 20px;
	border: 0;
	border-radius: 5px;
	padding-left: 5px;
}
div.registration input[type="submit"]
{
	width: 100px;
	height: 40px;
	border: 0;
	border-radius: 5px;
	font-weight: bolder;
	font-size: "50";
	background-color: green;
}
div.registration input[type="radio"]
{
	text-align: l
}	
div.registration input[type="reset"]
{
	width: 100px;
	height: 25px;
	border: 0;
	border-radius: 5px;
	font-weight: bolder;
	font-size: "50";
	font-style: capslock;
}
#gender {

	margin-right: 120px;
}
#dob{
	margin-right: 20px;
	}
	
	</style>
</head>

<body >
<div class="header-content">
				<header>
				<h1 style="text-align:center; color:black;">SAFAR TOURS AND TRAVELS</h1><br><br>
			</header>
			</div>
<br><br>
<div class="registration">
	<h3 style= "text-align:center">REGISTRATION</h3>
	<center>
	<form  name ="myForm" action='regn.php' method='POST' autocomplete="on">
		
		<table valign="center">
			<tr><td><b>First Name:</b></td><td><input type="text" name="frstname"   placeholder="First name"  ><span class="error">*</span></td></tr>
		
			<tr><td><b>Last Name:</b></td><td><input type="text" name="lastname" placeholder="Last name" ><span class="error">*</span></td></tr>

			<tr><td><b>Username:</b></td><td><input type="text" name="username" placeholder="Username" ><span class="error">*</span></td></tr>


			<tr><td><b>Password:</b></td><td><input type="password" id="pass" name="pass" placeholder="Password" ><span class="error">*</span></td></tr>
			
			<tr><td><b>Confirm Password:</b></td><td><input type="password" id="cpass" name="cpass" placeholder="Confirm password" ><span class="error">*</span></td></tr>


			<tr><td><b>Gender:</b></td><td><input type="radio" name="gender" value="m">Male<input type="radio" name="gender" value="f">Female</td></tr>
			
			<tr><td><b>Date Of Birth:</b></td><td><input type="DATE" name="dob" ></td></tr>

			<tr><td><b>E-Mail id:</b></td><td><input type="text" name="emailid" placeholder="Email id" ><span class="error">*</span></td></tr></br>
		
		
		    <tr><td><b>Mobile Number:</b></td><td><input type="text" name="phoneno" placeholder="Mobile number" ><span class="error">*</span></td></tr>
		    <tr><td></td></tr>
		
		    <tr><td></td><td><input type="submit" value="SUBMIT" onclick="return validateForm()"></td></tr>
		    <tr><td></td></tr>

		     <tr><td></td><td><input type="reset" value="RESET"></td></tr>
		     <p><span class="error">* required to fill</span></p>
		</table>


	</form></center>
</div>


<script type="text/javascript">

       function validateForm() 
      {
    var x = document.forms["myForm"]["frstname"].value;
    if (x == "") {
        alert(" First Name must be filled out");
        return false;
    }
    else
    {
    	var matches = x.match(/\d+/g);
    	if(matches != null)
    		alert('First Name should not  contain numbers')

    
    }


     var y = document.forms["myForm"]["lastname"].value;
    if (y == "") {
        alert(" Last Name must be filled out");
        return false;
    }
    else
    {
    	var matches = x.match(/\d+/g);
    	if(matches != null)
    		alert('Last Name should not  contain numbers')
    
    }

      var z = document.forms["myForm"]["username"].value;
      if (z == "") {
        alert(" Usename must be filled out");
        return false;
    }
	
      var a = document.forms["myForm"]["pass"].value;
      if (a == "") {
        alert("Password must be filled out");
        return false;
    }
		var b = document.forms["myForm"]["cpass"].value;
	if(a != b)
		{
			alert ("Passwords do not match!");
			return false;
		}
		else
			return true;
	
       var m = document.forms["myForm"]["phoneno"].value;
	   
       var phoneno = /^\d{10}$/; 
       if(m=="")
       {
       	alert("Mobile Number must be filled out");
       	return false;
       }
       else
       {
       	if(m.match(phoneno))  
        {  
          return true;  
        }  
        else  
        {  
          alert("Check for Proper Mobile Number");  
          return false;  
        }  
       }
    
      var e = document.forms["myForm"]["emailid"].value;
      if(e==""){
      	alert("E-Mail must be filled out");
      }
      else if (/^\w+([\.-]?\ w+)*@\w+([\.-]?\ w+)*(\.\w{2,3})+$/.test(e))
      	return true;
      else
      {
      	alert("Check for proper E-Mail Entry");
      	return false;
      }
	
 }
      
   
</script>

</body>
</html>
