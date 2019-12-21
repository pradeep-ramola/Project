 <!DOCTYPE html>
<html>
<head>
<title>E-Commerce Website/RootVeg</title>
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
  <li><a class="active" href="homepagelogout.php">Home</a></li>
    <div class="dropdown">
    <button class="dropbtn">Catogeries 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       <a href="homepagelogout.php">Homepage</a> 
       <a href="leafy.php" >GreenLeafy</a> 
    <a href="fruitveg.php">FruitVeggies</a> 
      
    </div>
  </div> 
<li class="right" ><a href="logout.php">Logout</a></li>
  <li class="right" ><a href="viewcart.php">Cart</a></li>
</ul>


<div class="slideshow-container">
<div class="mySlides fade">
  <img src="img\cassava.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="img\beet.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <img src="img\turmeric.jpg" style="width:100%">
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
   <a href="desc/carrot.html"><img src="img\carrot.jpg" style="width:100%"></a>
  <h1>Carrots</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="carrots">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
  <a href="desc/sweetpotatoes.html"><img src="img\sweetpot.jpg" style="width:100%"></a>
  <h1>Sweet Potatoes</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="sweetpotatoes">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
  <a href="desc/raddish.html"><img src="img\raddish.jpg" style="width:100%"></a>
  <h1>Raddish</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="raddish">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  </div>
  <div class="column">
  <form action="insertcart.php" method="POST">
  <div class="card">
  <a href="desc/onions.html"><img src="img\onion.jpg" style="width:100%"></a>
  <h1>Onions</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="onions">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
  <a href="desc/beetroots.html"><img src="img\beet.jpg" style="width:100%"></a>
  <h1>Beet Roots</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="beetroot">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
  <a href="desc/mustardgreens.html"><img src="img\beans.jpg" style="width:100%"></a>
  <h1>Mustard Greens</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="mustardgreens">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
</div></form>
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
  <a href="desc/ginger.html"><img src="img\ginger.jpg" style="width:100%"></a>
  <h1>Ginger</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="ginger">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
  <a href="desc/parsnip.html"><img src="img\parsnip.jpg" style="width:100%"></a>
  <h1>Parsnip</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="parsnip">
  <input type="hidden" name="price" value="10">
  <p><button>Add to Cart </button></p>
  </div></form>
  </div>
  <div class="column">
  <form action="insertcart.php" method="POST">
  <div class="card">
  <a href="desc/turnip.html"><img src="img\turnip.jpg" style="width:100%"></a>
  <h1>Turnip</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="turnip">
  <input type="hidden" name="price" value="10">
   <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
  <div class="card">
  <a href="desc/turmeric.html"><img src="img\turmeric.jpg" style="width:100%"></a>
  <h1>Turmeric</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="turmeric">
  <input type="hidden" name="price" value="10">
  <p><button>Add to Cart </button></p>
  </div></form>
  <form action="insertcart.php" method="POST">
   <div class="card">
  <a href="desc/dandilion.html"><img src="img\dandilion.jpg" style="width:100%"></a>
  <h1>Dandilion</h1>
  <p class="price">MRP=Rs10.0/KG</p>
  <input type="text" name="quantity" placeholder="In KG only" required>
  <input type="hidden" name="name" value="dandilion">
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
