
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
		$item_total = $_GET['cost'];

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
<body  background = "bg1.jpg">
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

  <?php 
                if(isset($_SESSION['loggedin '])){ 
                
                  echo '<b><em><a href="myaccount.php">SO, YOUR TOTAL AMOUNT  '.$_SESSION['username'].'  IS '.$_SESSION['cost'].'</a></em></b>';
                }
                
         ?>

        <img src="h.jpg" ><br>
</body>
</html>