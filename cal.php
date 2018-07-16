     <?php
		include "connection.php";
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
    <title>Tours</title>

 
    <link href="css/bootstrap.min.css" rel="stylesheet">

 
    <link href="css/travel.css" rel="stylesheet">

 
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

<center><h3 style="color: #f57c00;"><strong>Final Details</strong></h3>
</center>

   
<?php
$p = $_GET['pname'];
$days = $_GET['days'];
$nights = $days - 1;
$adults = $_GET['adults'];
$child = $_GET['child'];
$d =$_GET['doj'];
$sql0="SELECT stayamount, foodamount, airlinesamount FROM adddetails where addplace='".$p."'";
$result = $con->query($sql0);
$row = $result->fetch_assoc();
$stay =$days * $row['stayamount'];
$food = $days * $row['foodamount'];
$travel = ($adults+$child) * $row['airlinesamount'];
$total = $stay + $food + $travel;


$id=$_SESSION['loggedIn_cust_id'];

$sql="INSERT INTO placedetails(ID_regist,name,days,nights,stay,food,travel,doj,total) 
VALUES('$id', '$p','$days','$nights','$stay','$food','$travel','$d','$total')";
$result1=$con->query($sql);

?>
<div class="container"> 
<form action="payment.php" method="GET"> 
<table class="table table-bordered">

 

        <?php

             if(($result->num_rows) > 0)

             {
                 ?>
				 <input type="text" name="scost" value="<?php echo $stay;?>" hidden>
				 <input type="text" name="fcost" value="<?php echo $food;?>" hidden>
				 <input type="text" name="acost" value="<?php echo $travel;?>" hidden>
            <tr>
                <td rowspan="9" align="center" style="vertical-align:middle;"><img src="delhi1.jpg" alt="" height=150 width=150></td>
                <td><strong>Place Name:</strong><input type="text" name="place" value="<?php echo $p;?>" hidden> <?php echo $p; ?></td>
               
            </tr>
     
            <tr>
                <td><strong>Total amount:</strong>&nbsp;<input type="number" name="total" value="<?php echo $total;?>" hidden>&nbsp;<?php echo $total; ?> &nbsp;&nbsp;<strong>
            </tr>
            
            <tr>
                <td><strong>Date:</strong><input type="Date" name="doj" hidden><?php echo $d; ?> </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="button"><span>Confirm booking!</span></button>
</form></td>
            </tr>
        <?php
             }
             ?>
             </table>
             </form>
            </div>


   <br>
 
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
