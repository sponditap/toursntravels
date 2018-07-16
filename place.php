     <?php
        session_start();
		$place= $_GET['Pid'];
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
  <script type="text/javascript">
    function checkDOB() {
        var dateString = document.getElementById('dd').value;
        var myDate = new Date(dateString);
        var today = new Date();
        if ( myDate < today ) { 
            alert("You cannot enter a date in the past!");
            return false;
        }
        return true;
    }
</script>
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

<center><h3 style="color: #f57c00;"><strong>Booking Details</strong></h3>
</center>

   
<?php

include "connection.php";
$sql= "SELECT addplace,description, stayamount, foodamount, airlinesamount, noofdays,noofnights, adults,children,choose 
FROM adddetails where addplace='".$place."'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$stay = $row['stayamount'];
$food = $row['foodamount'];
$air = $row['airlinesamount'];
$total=$stay+$food+$air;
?>
<div class="container"> 
<form action="cal.php" method="GET"> 
<table class="table table-bordered">

 

        <?php

             if(($result->num_rows) > 0)

             {
                 ?>
            <tr>
                <td rowspan="9" align="center" style="vertical-align:middle;"><img src="delhi1.jpg" alt="" height=150 width=150></td>
                <td><strong>Place Name:</strong><input type="text" name="pname" value="<?php echo $row['addplace']; ?>" hidden> <?php echo $row['addplace']; ?></td>
               
            </tr>
            <tr>
                <td><strong>Description:</strong><?php echo $row['description']; ?></td>
            </tr>
            <tr>
                <td><strong>No of Days:</strong>&nbsp;<input type="number" name="days" value="">&nbsp;&nbsp;&nbsp;

            </tr>
            <tr>
                <td><strong>No of Adults:</strong>&nbsp;<input type="number" name="adults" value="">&nbsp;&nbsp;&nbsp;<strong>No of Children:</strong>&nbsp;<input type="number" name="child" value=""></td>

            </tr>
            
            <tr>
                <td><strong>Date:</strong><input type="Date" name="doj" id="dd" value="<?php echo date("Y-m-d");?>" required></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button" type="submit" onclick="return checkDOB()"><span>Calculate total fare</span></button>
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
