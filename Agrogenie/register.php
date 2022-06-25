<?php include 'setting/system.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGROGENIE</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .main{
            width: 330px;
            height: 460px;           
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
            margin: 0 0 13px;
            padding: 10px;
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
        html{
            background-image: url("https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940https://cdn.pixabay.com/photo/2015/09/09/23/13/vintage-933793_1280.jpg");
            height: 100%;
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
            font-family: 'Quicksand', sans-serif;
        }
    </style>
</head>
<body>
<?php
    $err=NULL;
    if(isset($_POST['reg']))
    {
        $unm=$_POST['username'];$nm=$_POST['name'];$em=$_POST['em'];$ph=$_POST['phno'];$p1=$_POST['password'];
        $p2=$_POST['cpassword'];
        $role=$_POST['role'];
        if($p1==$p2)
        {
            $hp=sha1($p1);
            $sql=$db->query("INSERT INTO user (username,password,Name,Email,Contact, Role) VALUES('$unm','$hp','$nm','$em',$ph, '$role')");
            if($sql){
                header('location:index.php');
            }
            else{
                echo '<script type="text/javascript">alert("Error while inserting data...")</script>';
            }
        }
        else{
            echo '<script type="text/javascript">alert("Passwords do not match...")</script>';
        }
    }
    ?>
    <div class="main">Create an Account<br><br>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="em" placeholder="Email">
            <select name="role">
                <option value="farmer">Farmer</option>
                <option value="consumer">Consumer</option>
                <option value="retailer">Retailer</option>
                <option value="dealer">Dealer</option>
            </select>
            <input type="text" name="phno" placeholder="Contact No">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="cpassword" placeholder="Re-type Password"><br>
            <button type="submit" name="reg">Sign Up</button><br>
            Have an account?&nbsp;<a href="index.php">Sign In</a>
        </form>
    </div>
</body>
</html>