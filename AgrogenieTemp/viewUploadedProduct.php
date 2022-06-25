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
<center><h1 style="font-family: 'Sacramento', cursive;font-size:45px;">Product Catalogue</h1></center>
<hr style="border:0.5px solid grey;width: 75%;"><br>
<div class="container" style="font-family: Quicksand,san-serif;">
<?php
$status="";
if (isset($_POST['id']) && $_POST['id']!=""){
$id = $_POST['id'];
$result = $db->query("SELECT * FROM `products` WHERE `id`='$id'");
$run=$result->fetchAll(PDO::FETCH_OBJ);
foreach($run as $row)
{
    $name = $row->name;$id = $row->id;$price = $row->price;$image = $row->image;
}
$cartArray = array(
	$id=>array(
	'name'=>$name,'id'=>$id,'price'=>$price,'quantity'=>1,'image'=>$image)
);
if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status='<div class="alert alert-success"><strong>Product is added to your cart!</strong></div>';
}
else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($id,$array_keys)) {
		$status='<div class="alert alert-success"><strong>Product is already added to your cart!</strong></div>';
	}
	else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status='<div class="alert alert-success"><strong>Product is added to your cart!</strong></div>';
	}
	}
}
?>
<?php echo $status; ?>   
	<?php
	$did = $_SESSION['id'];
    $result = $db->query("SELECT * FROM `products` WHERE dealer_id=$did");
    $fetch=$result->fetchAll(PDO::FETCH_OBJ);
    foreach ($fetch as $row)
    {
        if($row->id % 3 ==1)// || $row->id==4 || $row->id==7 ||$row->id==10||$row->id==13)
		{   echo '<div class="card-columns" style="color:black">'; }
		echo '<div class="card my-2" ><div class="card-body">
		<form method="post" action="">
		<p class="card-text">
		<input type="hidden" name="id" value="'.$row->id.'">
		<div class="image"><img src="'.$row->image.'" width="140" height="150"></div>
		'.$row->name.'&nbsp&nbspPrice:Rs '.$row->price.'
		</p>
		<button type="submit" class="btn btn-outline-dark">Buy Now</button></form></div></div>';
		if($row->id % 3==0)
		{ echo '</div>'; }
    }
	?>
</div>
<style>
.new{
    position: absolute;top:80px;right:30px;border:none;
}
</style>
<div class="new">
<img src="img/scart.png"/>&nbsp;<a href="cart.php" style="color:black">View Cart</a>
</div>