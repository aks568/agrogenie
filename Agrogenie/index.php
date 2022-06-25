<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<title>Login</title>
<style>
  html{
            font-family: 'Quicksand', sans-serif;
            background-image: url("https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940https://cdn.pixabay.com/photo/2015/09/09/23/13/vintage-933793_1280.jpg");
            height: 100%;
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
        }
  .main{
      width: 290px;
      height: 240px;           
      position:absolute;
      top:0;
      bottom:0;
      left:0;
      right:0;
      margin: auto;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
.main input{
    outline: 0;
    background: #f2f2f2;
    width: 75%;
    border: 0;
    margin: 0 0 15px;
    padding: 12px;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
    }
.main button{
    outline: 0;
    background: #4CAF50;
    width: 80%;
    border: 0;
    padding: 10px;
    color: #FFFFFF;
    cursor: pointer;
    font-family: 'Quicksand', sans-serif;
}
</style>
<?php
if (isset($_POST['submit'])) {
  $username = trim($_POST['unm']);$password = $_POST['pass'];$hash = sha1($password);
  $q = $db->query("SELECT * FROM user WHERE username = '$username' AND password = '$hash' ");
  $count = $q->rowCount();$rows = $q->fetchAll(PDO::FETCH_OBJ);
  if($count > 0){
    foreach($rows as $row){
      $user_id = $row->id;$user = $row->Name;$_SESSION['id'] = $user_id;$_SESSION['user'] = $user;
      header('location: dashboard.php');
      }
    }
  else{ echo '<script type="text/javascript">alert("Incorrect Login Details\nPlease enter Valid Credentials...")</script>';}
}?>
<div class="main"><p>Login to your Account</p>
    <form action="" method="POST">
      <input type="text" name="unm" placeholder="Username">
      <input type="password" name="pass" placeholder="Password">
      <button type="submit" name="submit">Sign In</button><br>
      Don't have an account?&nbsp;<a href="register.php">Sign Up</a>
    </form>
</div>