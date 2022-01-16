<?php


	session_start();
	if (!isset($_SESSION['loggedin '])){

		//header('Location: home.php');
		//echo $_SESSION['username'];
		//header('Location:'.$_SERVER['PHP_SELF']);
		header("Location: login.php");
	}
	//else{
		//3.2 When the user visits the page first time, simple login form will be displayed.
		

	//}
?>


<html>
<head>
<link rel="stylesheet" href="menu.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}



/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body  background ="bg1.jpg" >
<img src="umeedlogo.png" alt="logo" style="width:100px;height:100px;float:left" >
<ul>
  <li><a href="myaccount.php">Home</a></li>
  <li><a href="shop.php">Shop</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="aboutus.php">About us</a></li>
  <li><a href="logout.php">Logout</a></li>
   <li> <?php 
                if(isset($_SESSION['loggedin '])){ 
                
                  echo '<b><em><a href="myaccount.php">THINKING JUST RIGHT  Hi! '.$_SESSION['username'].'</a></em></b>';
                }
                
         ?>
           
   </li>
</ul>

<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="sustainable.jpg" style="width:100%">
  <div class="text">sustainable</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="handi.jpg" style="width:100%">
  <div class="text">handicrafted</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="recyclable.jpg" style="width:100%">
  <div class="text">recyclable</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
<?php 
                if(isset($_SESSION['username'])){ 
                  echo '<li id="mlist"><a href="logout.php">Hi! '.$_SESSION['username'].'</a>
                      <ul id = "drop-menu">
                        <li><a href="myaccount.php">My Account</a></li>
                        <li><a href="logout.php">Logout</a></li>
                      </ul>
                    </li>';
                }
                else
                {
                  echo '<li id="mlist"><a href="login.php">LOGIN</a></li>';
                }
  ?>

</body>
</html>