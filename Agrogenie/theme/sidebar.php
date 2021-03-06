<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
  font-family: 'Quicksand', sans-serif;
}
.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<div id="mySidenav" class="sidenav">
<?php
if ($_SESSION['role']=='farmer')
echo '
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="dashboard.php">Home</a>
  <a href="crops.php">Crop Info</a> 
  <!-- <a href="loan.php">Loan Info</a> -->
  <a href="loancalc.php">Loan Calculator</a>
  <a href="news.php">Agri News</a>
  <a href="catalogue.php">Product Catalogue</a>
  <a href="weather.php">Weather Tracker</a>
  <a href="cropProduceUpload.php">Sell your Product</a>
  <a href="agriCatalogue.php">Buy From Farmers</a>
  
  <a href="logout.php"><i class="fa fa-power-off fa-fw"></i>Log Out</a>';

elseif ($_SESSION['role']=='dealer')
  echo'
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="dashboard.php">Home</a>
      <a href="productUpload.php">Upload Products</a>
      <a href="viewUploadedProduct.php">Your Products</a>
      <!-- <a href="crops.php">Crop Info</a> -->
      <!-- <a href="loan.php">Loan Info</a> -->
      <a href="pageNotFound.php">Product Requests</a>
      <!-- <a href="news.php">News</a> -->
      <a href="catalogue.php">Product Catalogue</a>
      <a href="logout.php"><i class="fa fa-power-off fa-fw"></i>Log Out</a>';

elseif ($_SESSION['role']=='consumer')
  echo'
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="dashboard.php">Home</a>
      <!-- <a href="weather.php">Upload Products</a> -->
      <a href="crops.php">Crop Info</a>
      <!-- <a href="loan.php">Loan Info</a> -->
<!--       <a href="loancalc.php">Product Requests</a>-->
      <a href="news.php">News</a>
      <a href="agriCatalogue.php">Buy From Farmers</a>
      <a href="logout.php"><i class="fa fa-power-off fa-fw"></i>Log Out</a>';

elseif ($_SESSION['role']=='retailer')
  echo'
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="dashboard.php">Home</a>
      <a href="weather.php">Upload Products</a>
      <!-- <a href="crops.php">Crop Info</a> -->
      <!-- <a href="loan.php">Loan Info</a> -->
      <a href="loancalc.php">Product Requests</a>
      <a href="news.php">News</a>
      <a href="catalogue.php">Product Catalogue</a>
      <a href="logout.php"><i class="fa fa-power-off fa-fw"></i>Log Out</a>';
?>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<nav class="navbar navbar-expand-sm bg-light navbar-light" style="font-family: 'Quicksand', sans-serif;">
<span style="font-size:22px;cursor:pointer" onclick="openNav()">&#9776;&nbsp;</span>
<a class="navbar-brand" href="#" style="font-size: 25px;">AGROGENIE</a>
<ul class="navbar-nav mr-auto"></ul>
<span style="font-size: 20px;">Welcome, <strong><?php echo ucwords($_SESSION['user']); ?></strong></span>
</nav>
<!DOCTYPE html>
<head>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
  intent="WELCOME"
  chat-title="Agrogenie"
  agent-id="5f38fe30-f3e4-468b-ac6f-866e47740fe9"
  language-code="en"
></df-messenger>
</head>
</html>