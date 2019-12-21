<!DOCTYPE html>
<html>
  <?php
 
  include("conn.php");
  ?>
<title>E-Commerce Website/Registration </title>

<head>

 <link rel="stylesheet" href="register.css"> 
</head>
<body>
<div class="image"></div>

<form method ="POST" action="">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Your Full Name: </b> </label>
    <input type="text" placeholder="Enter Full Name" name="name" required><br>


    <label for="usrtel" ><b>Mob Number: </b></label>
    <input type="tel" placeholder="Enter Mobile Number" maxlength="10" name="mob" required><br><br>

    <label for="email"><b>Email: </b></label>
    <input type="email" placeholder="Enter Email" name="email" required><br><br>

    <label for="psw"><b>Password: </b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw-repeat"><b>Confirm Password: </b></label>
    <input type="password" placeholder="Enter Password" name="psw-repeat" required><br>

    <p>By creating an account you agree to our <a href="T&C.html" style="color:dodgerblue">Terms & Privacy</a>.</p>
      
    <p>Already have an account? <a href="login.php" style="color:dodgerblue">click here!</a></p>
    <div class="clearfix">
      <button type="reset" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name = "signup">Sign Up</button>
    </div>
  </div>
</form><br>
<br>

<?php
session_start();

if(isset($_POST['signup'])){
  $name = $_POST['name'];
  $phone = $_POST['mob'];
  $email = $_POST['email'];
  $password = $_POST['psw'];        
  $cpassword = $_POST['psw-repeat'];

       
  if($cpassword==$password)
  {
   
    $sql ="INSERT INTO register(name,email,phone,password) VALUES ('$name','$email','$phone','$password')";

    $data=mysqli_query($conn,$sql);
    if ($data) {
      echo "Registered successfully";
      header("location:login.php");
  }
     else{
       echo "REGISTERED UNSUCCESSFUL";
     }
  
  }
else{
  echo "Passwords don't match";
}
}

?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>