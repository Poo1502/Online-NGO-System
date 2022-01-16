<?php 
	session_start();
	require('connect.php');
	
	$data = $_GET['data'];
	$products = explode("@",$data);
	//print_r($products);
	$len = sizeof($products);
	$item;
	$tval=0;
	for ($x = 0; $x < $len-1; $x++) {
		
		$item[$x] = explode("->",$products[$x]);
		$tval = $tval + (int)($item[$x][1]);
	}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="menu.css">
<style>
.btn{
 border: purple solid;
 border-style:inset;
color:white;
font-size:15px;
cursor:pointer;
}
.CART{background-color:purple;
}
.plate{margin-top:50px;
margin-right:50px;
margin-bottom:50px;
margin-left:30px;
background-color:white;}
body{background-color:brown;}
</style>
</head>
<body>


<img src="umeedlogo.png" alt="logo" style="width:100px;height:100px;float:left" >

<ul>
  <li><a href="myaccount.php">Home</a></li>
  <li><a href="shop.php">Shop</a></li>
  <li><a href="gallery.html">Gallery</a></li>
  <li><a href="aboutus.php">About us</a></li>
</ul><ul id= "ul2">
						
							<!--<li id="mlist"><a href="">LOGIN</a></li>-->         
						<li id="mlist">
							<img id = "cart" src="img/cart.png" vspace = "0" style="padding:10px">
							<span id="cartcount" style="color: white"><?php echo $tval;?></span>
						</li>  
					</ul>
					

<div class="plate">
<table>
<tr>
<td><img src="c1.jpg" alt="c1" style="border:thin solid;" ></td>
<td><h1 text-color="red";>PLATES</h1>
<div id="itemdetail">
				
				
				<p id="prices">&123 </p><p id="price"> 100</p><br><!--Edit Here-->
				<hr>
				<script src="./js/cart.js"></script><!--Edit extra-->
				<p style="display:none;" id="pcode">ftee6</p><!--Edit extra-->
				<div id="btn">
					<br><br>	
				</div>
				<p id ="cod">Cash On Delivery Available</p>
				<p id ="edate"></p>
			</div>
<a href="cart.php"><button class="btn CART">ADD TO CART</button>
</a>
<div id="br">
			<p>15 Days return policy &nbsp  |  &nbsp Cash on delivery &nbsp  |  &nbsp Free Shipping above &nbsp &#8377 500</p>
		</div>
<p>Prices are indicative - Prices are subject to change without prior notice.<br>
</p>
<h2 style="color:red">PRODUCT DESCRIPTION</h2>
<p>12″ Ecofriendly, disposable buffet plates with a lower rim than the regular ones. Carefully made from the Saal (teak) leaf. Microwave-safe, sturdy and elegant, these are ideal for a party or celebration. Help the environment , impress your guests and support autistic young adults! Combine these with biodegradable cutlery, bowls or tablemats for an entire set. Sold as a set of 10.
</p>
</td>
</tr>
<tr>
<td>
<img src="c2.jpg" alt="c1">
<img src="c2.jpg" alt="c1">
</td>
</tr>
</table>
</div>
</body>
</html>