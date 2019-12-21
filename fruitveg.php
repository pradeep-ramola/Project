 <!DOCTYPE html>
<html>
<head>
<title>E-Commerce Website/Homepage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="homepage.css">
<link rel="stylesheet" type="text/css" href="responsize.css">

</head>
<body>

<div class="header">
    <img src="img/logo.jpg" style="float:left;width:42px;height:42px;">
  <a href="#" class="logo">VEGGIES</a>

</div>

<ul class="topnav">
  <li><a class="active" href="Homepagelogout.php">Home</a></li>
    <div class="dropdown">
    <button class="dropbtn">Catogeries 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       <a href="Homepagelogout.php">Homepage</a> 
       <a href="rootveg.php" >Root</a> 
    <a href="leafy.php">GreenLeafy</a> 
      
    </div>
  </div>
  <li class="right" ><a href="logout.php">Logout</a></li>
  <li class="right" ><a href="viewcart.php">Cart</a></li>
</ul>


<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img\tomatoes.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="img\banana.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="img\peas.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="row">
  <div class="column">
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/tomatoes.html"><img src="img\tomatoes.jpg" style="width:100%"></a>
  <h1>Tomatoes</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="tomatoes">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/sweeetcorn.html"><img src="img\corn.jpg" style="width:100%"></a>
  <h1>Sweet Corn</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="sweeetcorn">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/cucumber.html"><img src="img\cucumber.jpg" style="width:100%"></a>
  <h1>Cucumber</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="cucumber">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div>
  </form>
  </div>
  <div class="column">
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/tinda.html"><img src="img\tinda.jpg" style="width:100%"></a>
  <h1>Tinda</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="tinda">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/ladyfinger.html"><img src="img\ladyfinger.jpg" style="width:100%"></a>
  <h1>Ladyfinger</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="Ladyfinger">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/banana.html"><img src="img\banana.jpg" style="width:100%"></a>
  <h1>Banana</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="banana">
  <input type="hidden" name="price" value="10">
  <p><button>Add to Cart </button></p>
</div>
</form>
  </div>  
  <div class="column">
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/cassava.html"><img src="img\cassava.jpg" style="width:100%"></a>
  <h1>Cassava</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="cassava">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div> </form>
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/redchillies.html"><img src="img\chilli.jpg" style="width:100%"></a>
  <h1>REd Chillies</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="red chillies">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/greenpeas.html"><img src="img\peas.jpg" style="width:100%"></a>
  <h1>Green Peas</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="green peas">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  </div>
  <div class="column">
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/peaches.html"><img src="img\peach.jpg" style="width:100%"></a>
  <h1>Peaches</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="peaches">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
   <a href="desc/bellpepper.html"><img src="img\pepper.jpg" style="width:100%"></a>
  <h1>Bell Pepper</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="bellpepper">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
   <div class="card">
   <a href="desc/olives.html"><img src="img\olive.jpg" style="width:100%"></a>
  <h1>Olives</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="olives">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div>   </form>
  </div>
</div>

<footer>
<div class="footer1">
  <h2>About us </h2>
  <p>Our Story</p>
  <p>Terms and Policies</p>
  <p>Privacy Policy</p>
  </div>
    <div class="footer2">
	<h2>Contact</h2>
	  <p>Contact Us	</p>
  <p>Report Us</p>
  <p>Advertise</p>
  </div>
    <div class="footer3">
	<h2>Categories</h2>
	  <p>Root</p>
  <p>FruitVeggies</p>
  <p>GreenLeavfy</p>
  </div>
    <div class="footer4">
	
	<h1><img src="img/logo.jpg" style="width:42px;height:42px;">VEGGIES</h1>
  </div>
  
</footer>
<footer>
  <div class="footer5"><p style="font-size:0.75em;">Copyright © 2019 VEGGIEMART. All Rights Reserved.</p></div>
</footer>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>




</body>
</html>
