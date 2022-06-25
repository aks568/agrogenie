<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="container" style="font-family: 'Quicksand',sans-serif;">

<?php include 'session.php'; ?>
<?php
$status=NULL;
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["id"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='alert alert-success'>
		<strong>Product is removed from your cart!</strong></div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['id'] === $_POST["id"]){
        $value['quantity'] = $_POST["quantity"];
		break; 
		// Stop the loop after product is found
    }
}
}
?>
<center><br><h1 style="font-family: 'Sacramento', cursive;font-size:45px;">View Cart</h1></center>
<hr style="border:0.5px solid grey;width: 75%;">
<div class="container" style="font-family: Quicksand,san-serif;">
<?php echo $status; ?>   
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table table-hover" style="font-family:Quicksand,san-serif">
<tbody>
	<tr>
	<td></td><td>Item Name</td>
	<td>Quantity</td><td>Price</td>
	</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
<input type='hidden' name='action' value="remove">
<button type='submit' class='btn btn-warning'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onChange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "Rs ".$product["price"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);$_SESSION['tp']=$total_price;
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs ".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo '<h3 style="Quicksand,san-serif">Your cart is empty!</h3>';
	}
?>
<a href="agriCatalogue.php"><button type="button" class="btn btn-outline-info">Go Back</button></a>&nbsp;&nbsp;&nbsp;
<a href="process-order.php"><button type="button" class="btn btn-outline-dark">Place Order</button></a>
</div>