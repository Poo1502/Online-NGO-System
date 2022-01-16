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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="menu.css">
<style>
 td{
 border:none;
 padding:35px;
}
a{
text-decoration:none;
color:red;
}
body{
background-color:brown;
width:100%;}
.cont{
margin-top:50px;
margin-right:50px;
margin-bottom:50px;
margin-left:30px;
background-color:white;
}
h1,h3{font-family:"Comic Sans MS", cursive, sans-serif;}
 </style>
</head>
<body>
<img src="umeedlogo.png" alt="logo" style="width:100px;height:100px;float:left" >

<ul>
  <li><a href="myaccount.php">Home</a></li>
  <li><a href="shop.php">Shop</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="aboutus.php">About us</a></li>
</ul>
<br>
<div class="cont">
<p style="margin:10px">Shop > products</p>
<h1 style="color:red;margin:10px;"> HANDCRAFTED WITH CARE</h1>
<h3 style="margin:10px">Sales proceeds go to our beneficiary Young Adults every month</h6>
<table>
<div class="img">
<tr>
<td><a href="p1.php"><img src="p1.jpg" alt="p1"><h3>SOUL SERVE LEAFWARE</h3></a></td>
<td><a href="p1.html"><img src="p2.jpg" alt="p2" ><h3>FESTIVE DECOR</h3></a></td>
<td><a href="p1.html"><img src="p3.jpg" alt="p3" ><h3>HOME DECOR</h3></a></td>
<td><a href="p1.html"><img src="p4.jpg" alt="p4" ><h3>TEA LIGHT HOLDERS</h3></a></td>
</tr>
<tr>
<td><a href="p1.html"><img src="p5.jpg" alt="p5" ><h3>CARRY BAGS</h3></a></td>
<td><a href="p1.html"><img src="p6.jpg" alt="p6" ><h3>HANBAGS</h3></a></td>
<td><a href="p1.html"><img src="p7.jpg" alt="p7" ><h3>PAPER GIFT BAGS</h3></a></td>
<td><a href="p1.html"><img src="p8.jpg" alt="p8" ><h3>WINE BOTTLE GIFT BAGS</h3></a></td>
</tr>
<tr>
<td><a href="p1.html"><img src="p9.jpg" alt="p9" ><h3>GIFT BOXES & POUCHES</h3></a></td>
<td><a href="p1.html"><img src="p10.jpg" alt="p10" ><h3>GIFT CARDS AND STATIONERY</h3></a></td>
<td><a href="p1.html"><img src="p11.jpg" alt="p11" ><h3>KIDDIES RANGE</h3></a></td>
<td><a href="p1.html"><img src="p12.jpg" alt="p12" ><h3>FUNKY JEWELLERY</h3></a></td>
</tr>
</table>
</div>
</div>
</body>
</html>


