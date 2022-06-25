<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>
<link rel="stylesheet" href="main.css">
<form class="checkout" style="font-family: Quicksand,san-serif;" autocomplete="off">
    <div class="checkout-header">
      <h1 class="checkout-title">
        Amount to be Paid:Rs&nbsp;<span><?php echo $_SESSION['tp']; ?></span>
      </h1>
    </div>
    <p>
      <input type="text" class="checkout-input checkout-name" placeholder="Name On Card" id="nm">
      <input type="number" class="checkout-input checkout-exp" min=1 max=12 placeholder="MM" id="m" style="width:60px;">
      <input type="number" class="checkout-input checkout-exp" placeholder="YY" id="y" style="width:60px;">
    </p>
    <p>
      <input type="number" class="checkout-input checkout-card" placeholder="XXXX XXXX XXXX XXXX" id="cno" style="width:180px;">
      <input type="number" class="checkout-input checkout-cvc" placeholder="CVV" id="cvv" style="width:70px;">
    </p>
    <p>
      <input type="submit" value="Purchase" class="btn btn-outline-success" onclick="ckout()">&nbsp;&nbsp;&nbsp;
      <a href="cart.php"><button type="button" class="btn btn-outline-info">Go Back</button></a>
    </p>
  </form>
  <script>
  function ckout(){
    var nm=document.getElementById("nm").value,m=document.getElementById("m").value,y=document.getElementById("y").value;
    var cno=document.getElementById("cno").value,cvv=document.getElementById("cvv").value;
    alert("Order has being placed !!\nTransaction made on Card Number:"+cno);
  }
  </script>



