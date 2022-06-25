<?php include 'setting/system.php'; ?>
<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGROGENIE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        html{height:100%;}
        body{ background-color:white; }
    </style>
</head>
<body>
<?php include 'theme/sidebar.php'; ?>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div class="container" style="font-family: 'Quicksand',sans-serif;">

<div class="container" style="font-family: 'Quicksand',sans-serif;">
<!--     <center><h1 style="font-family: 'Sacramento', cursive;font-size:50px">Hi ! You have reached the Dashboard <span style="font-family:Quicksand,san-serif;">:)</span></h1> -->
<img src="img/farm.png" width="75%" height="80%"></center>





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
    if(isset($_POST['upload']))
    {
        $pnm=$_POST['pname'];
        $price=$_POST['price'];
        $desc=$_POST['desc'];
        $unit=$_POST['unit'];
        $img=$_POST['image'];
        $did = $_SESSION["id"];
        $sql=$db->query("INSERT INTO agriproduce (farmer_id, name, description, unit, price, image) VALUES('$did', '$pnm', '$desc','$unit', $price, '$img')");
        if($sql){
            echo '<script type="text/javascript">alert("Product Uploaded Successfully...")</script>';
        }
        else{
            echo '<script type="text/javascript">alert("Error while inserting data...")</script>';
        }
    }
    ?>
    <div class="main">Upload your Agricultural Produce<br><br>
        <form action="" method="POST">
            <input type="text" name="pname" placeholder="Product Name">
            <input type="text" name="desc" placeholder="Product Description">
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="unit" placeholder="Unit">
            <input type="text" name="image" placeholder="Image" value = "img/16.jpg">
            <!-- <select name="role">
                <option value="farmer">Farmer</option>
                <option value="consumer">Consumer</option>
                <option value="retailer">Retailer</option>
                <option value="dealer">Dealer</option>
            </select>
            <input type="text" name="phno" placeholder="Contact No">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="cpassword" placeholder="Re-type Password"><br> -->
            <button type="submit" name="upload">Upload</button><br>
            <!-- Have an account?&nbsp;<a href="index.php">Sign In</a> -->
        </form>
    </div>
</body>
</html>