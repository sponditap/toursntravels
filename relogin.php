<!DOCTYPE html>
<html>
<head>
	<title>Relogin</title>
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

				div.error
		{
			width: 300px;
		height:300px;
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
		background-image: url("image/error.png");
		background-size: fill;
		 background-repeat: no-repeat;
		
		}
		h3{
			color: black;
			font-style: bolder;


		}
		</style>
</head>
<body>
	<div class="error">
			
	<form  name ="myForm" action='regn.php' method='POST' autocomplete="on">
		
		</form>

			
		</div>
<center>
<h3><b>Invalid username or password!<b></h3>
<h3 style= "text-align:bottom"> <a href="login.php ">Please Login again!!</a></h3></center>

</body>
</html>