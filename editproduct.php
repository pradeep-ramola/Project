 <<?php 
  
  session_start();
  
  $name=$_POST['name0'];
   $price=$_POST['name1'];
   $quantity=$_POST['name2'];

   $event=$_POST['event'];

   $product= array($name,$price,$quantity);

   if ( $event=="Update") {

   	$_SESSION[$name]=$product;
   }
   elseif ($event=="Delete") {
      unset($_SESSION[$name]);   	 
   }
     
   header( 'location:viewcart.php');
  ?>