 <?php
  session_start();
	
 ?>

 <!DOCTYPE html>
<html>
<head>
<title>E-Commerce Website/Homepage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="homepage.css">
<link rel="stylesheet" type="text/css" href="n.css">
<link rel="stylesheet" type="text/css" href="responsize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="v.css">

</head>
<body>

<div class="header">
  <img src="img/logo.jpg" style="float:left;width:42px;height:42px;">
  <a href="#" class="logo">VEGGIES</a>

</div>
<ul class="topnav">
  <li><a class="active" href="Homepagelogout.php">Home</a></li>
    
  <li class="right" ><a href="logout.php">Logout</a></li>
</ul>
<h1 align="center"> SHOPPING CART </h1>

</body>
<table class="table">
	<thead>
		<tbody>
			<tr>
			<th>
			Sno
			</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>TotalPrice</th>
      <th>Update</th>
			<th>Delete</th>
			
		</tr>

		
	</thead>
</tbody>

<?php
  $bill=0;
  $t=0;
  $sno=1;
  foreach ($_SESSION as $products) {
  $p=0;
  $q=0;
   echo "<tr>";
      echo "<form action='editproduct.php' method='post'>";
      echo " <td>".($sno++)."</td>";
           foreach ($products as $key => $value) {
           	# code...
           	

           	if($key==2){
           		echo " <td><input type='text' name='name$key' value='".$value."'></td>";
                 $q=$value;

           	}
           	elseif ($key==1) {
           		# code...
           		echo "<input type='hidden' name='name$key' value='".$value."'>";
               echo "<td>".$value."</td>";
           		$p=$value;
           	}
           	elseif ($key==0) {
           		# code...
           		 echo " <input type='hidden' name='name$key' value='".$value."'>";
               echo "<td>".$value."</td>";
           	}

           }
           $bill=($q*$p);
           $t=$t+$bill;
           echo "<td>".($bill)."</td>";

           echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
             
          echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";



            echo "</form>";
      echo " </tr>";
  }

?>

</table>
<h1><?php
  echo "Your total bill is : ".$t."";
?>


<br>
 
<div style="float: left; padding-left: 60px;">
    <td>
<form action="Homepagelogout.php">
  <input type="submit" name="submit" value="Continue Shopping" class="btn btn-warning">
</form> 
</div>
 
 


<div style="float: right; padding-right: 60px;">
<form action="payment.php">
  <input type="submit" name="submit" value="Procced to Pay" class="btn btn-success">
</form> 
</div>
 
  
  
 


</h1>


</html>