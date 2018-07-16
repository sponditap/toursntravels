     <?php
        session_start();
        if(!$_SESSION['username']){
           session_destroy();
           header("location:index.php");
           exit();
        }?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Payment</title>
	<script type="text/javascript">

   function validate()
   {
   var data=document.getElementById('card').value;
   var data1=document.getElementById('cvv').value;
   //var l = Math.max(Math.floor(Math.log10(Math.abs(data))), 0) + 1;
   //alert(l);
   if((data.toString().length)!=16)
   {
	   alert("Card number is invalid");
		return false;
   }
   if((data1.toString().length)!=3)
   {
	   alert("CVV must be 3 digits");
	   return false;
   }
   }
   </script>
	<style>
      
	input[type=radio] + .details{
	display: none;
	}

	input[type=radio]:checked + .fordebit {
	display: block;
	}

	input[type=radio]:checked + .forcredit {
	display: block;
	}
	input[type=radio] {
	float:left;
	}
    </style>	
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/travel1.css" rel="stylesheet">

 
<script>
$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})
  </script>
</head>

<body>
	<div class="uu">
		<div class="container2">
			<ul class="tabs">
				<li class="tab-link current" data-tab="tab-1" ><a href="user.php"> View Places</a></li>
				<li class="tab-link logoutt"> <a href="logout.php" style="color: #ffffff; font-family: Ubuntu, sans-serif;">Logout</a></li>
			</ul>
			<center><p style="font-size: 15">Hello, <?php echo $_SESSION['fname']?> </p>
			<?php
			$p = $_GET['place'];
			$stay = $_GET['scost'];
			$food = $_GET['fcost'];
			$air = $_GET['acost'];
			$total = $_GET['total'];
			?>

			<div class="container">  
			<table class="table table-hover">
				<thead>
				<tr>
					<th>Place</th>
					<th>Stay cost</th>
					<th>Food cost</th>
					<th>Flight cost</th>
					<th>Total cost</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td><?php echo $p; ?></td>
					<td><?php echo $stay; ?></td>
					<td><?php echo $food ;?></td>
					<td><?php echo $air ;?></td>
					<td><?php echo $total; ;?></td>                
				</tr>
				</tbody>
			</table>
			</div>
			<div class="container">
			<center><h2>Payment type:</h2>
			<form method="post" name="myForm" action="confirmpayment.php">
				<div>
				<input type="radio" name="payment_type" id="credit" required>Credit card</input>

      <div class="forcredit details">
       <table>
       <tr>
          <td> <label>Card no:</label></td>
              <td><input type="text" name="cardno" id="cardno"><br><span style="color: red;">*enter 16 digit card no</span></td>
       </tr>
        <tr>
            <td><label>Cvv no:</label></td>
                 <td><input type="text" name="cvvno" id="cvvno"><br><span style="color: red;">*enter 3 digits</span></td>
        </tr>
        <tr>
             <td><label>Expiration MM/YYYY</label></td>
                 <td><select name="expiremonth">
                  <?php
                   for ($i=01; $i<=12; $i++)
                    {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                    }
                  ?>
                   </select>
                   <select name="expireyear">
                  <?php
                   for ($i=2000; $i<=2050; $i++)
                    {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                    }
                  ?>
                   </select><span style="color: red;">*</span></td>
        </tr>
       </table>
	   </div>
 

    <div>
      Debit card
      <input type="radio" name="payment_type" checked="checked" id="debit">

      <div class="fordebit details">
        <table>
         <tr>
              <td> <label>Card no:</label></td>
              <td><input type="text" name="cardno" id="card" required=""><br> <span style="color: red;">*enter 16 digit card no</span></td>
         </tr>
         <tr>
                <td><label>Cvv no:</label></td>
                 <td><input type="text" name="cvvno" id="cvv" required=""><br><span style="color: red;">*enter 3 digit</span></td>
         </tr>
        <tr>
                 <td><label>Expiration MM/YYYY</label></td>
                 <td><select name="expiremonth" required="">
                  <?php
                   for ($i=01; $i<=12; $i++)
                    {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                    }
                  ?>
                   </select>
                   <select name="expireyear" required="">
                  <?php
                   for ($i=2000; $i<=2050; $i++)
                    {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                    }
                  ?>
                   </select><span style="color: red;">*</span></td>
        </tr>
       </table>
      </div>
    </div>
  </div>

  <div>
    <button type="submit" class="button" onClick="return validate()"><span>Pay</span></button>
  </div>

</form>
</div>
</div>
</div>



   </div>
</div>
  

    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

   
    <script>
	
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>

</body>

</html>
