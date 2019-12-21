<!DOCTYPE html>
<html>
<head>
        <?php
         error_reporting(0);
        include("conn.php");
        ?>
<title>E-Commerce-Website/login</title>
<link rel="stylesheet" href="login.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
	
<div class="hero-image"></div>
<form method="POST" action="">
<div class=imgcontainer>
<img src="img\img.png" alt="Image" class="image">
</div>
<label for="uname">
<b>Username</b></label>
<input type="text" placeholder="Enter Username" name="uname" required><br>
<label for="passwd">
<b>Password</b></label>
<input type="password" placeholder="Enter Password" name="passwd" required><br>
<button type ="submit" name = "login">Login</button><br>
</div>
<div>
<span><a href="register.php">New Registration!</a></span>
</div>
</form><br><br>
<h1 >

<div class="l">
	<?php
session_start();

$name = $_POST['uname'];
$passwd = $_POST['passwd'];

if(isset($_POST['login'])){
$sql = "SELECT * FROM register WHERE name = '$name' AND password='$passwd'";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    header("location:Homepagelogout.php");
   
} 
else {
                echo "Try Again Wrong Password or Username :("; 
}
}
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</div>
	
</h1>
</html>