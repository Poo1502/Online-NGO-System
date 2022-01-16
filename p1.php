<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
	if(!empty($_POST["quantity"])) {
		$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
		$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
		
		if(!empty($_SESSION["cart_item"])) {
			if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["code"] == $k) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
						}
				}
			} else {
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
			}
		} else {
			$_SESSION["cart_item"] = $itemArray;
		}
	}
break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "remove":
	if(!empty($_SESSION["cart_item"])) {
		foreach($_SESSION["cart_item"] as $k => $v) {
			if($_GET["code"] == $k)	unset($_SESSION["cart_item"][$k]);				
			if(empty($_SESSION["cart_item"])) unset($_SESSION["cart_item"]);
		}
	}
break;
case "empty":
	unset($_SESSION["cart_item"]);
break;
	
}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="menu.css">
<link href="style.css" type="text/css" rel="stylesheet" />
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
  <li><a href="about.html">About us</a></li>
  <li><a href="home.php">LOGOUT</a></li>
</ul>
<div class="cont">
<p style="margin:10px">Shop > Soul Serve Leafware</p>
<h1 style="color:red;margin:10px;"> HANDCRAFTED WITH CARE</h1>
<h3 style="margin:10px">Sales' proceeds go to our beneficiary Young Adults every month</h3>

<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="p1.php?action=empty">Empty Cart</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="0.01" cellspacing="0.1" id="orders_table">
<tbody>
<tr>
<th style="text-align:left;"><strong><em>Name</strong></th>
<th style="text-align:left;"><strong><em>Code</strong></th>
<th style="text-align:right;"><strong><em>Quantity</strong></th>
<th style="text-align:right;"><strong><em>Price</strong></th>
<th style="text-align:center;"><strong><em>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="p1.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		$_SESSION['cost'] = $item_total;
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
</tr>

<a href="trans.php?cost=<?php echo $item_total ?>">THAT WOULD BE IT!</a>>

</tbody>
</table>		
  <?php
}
?>
</div>

<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="p1.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}
	
    
	?>

</div></body>
</html>
