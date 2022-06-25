<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<div class="container" style="font-family: 'Quicksand', sans-serif;">
	<h1 style="font-family: 'Sacramento', cursive;font-size:45px;">Add New Equipment</h1>
	<?php
      if(isset($_POST['submit']))
      {
      	if(isset($_FILES['photo']['tmp_name'])){

	      	$epqno = $_POST['epqno'];$name = $_POST['name'];$cat = $_POST['cat'];$cost = $_POST['cost'];$desc=$_POST['desc'];
	      	$res1_name = basename($_FILES['photo']['name']);$tmp_name = $_FILES['photo']['tmp_name'];
			$type = $_FILES['photo']['type'];$max_size = 2097152;$size = $_FILES['photo']['size'];
			if (isset($res1_name)) {
				$location = 'uploadfolder/';
				$move = move_uploaded_file($tmp_name, $location.$res1_name);
				$path1 = $location.$res1_name;
				if (!$move) {
					$fileerror = $_FILES['photo']['error'];
					$message = $upload_errors[$fileerror];
				}
			}
		}
      	$insert = $db->query("INSERT INTO equipment(epqno,name,epqcat,cost,img,description) VALUES('$epqno','$name','$cat',$cost,'$path1','$desc')");
      	if($insert){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Equipment Added Successfully <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error while inserting data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }
      }
     ?>
 		<form method="post" autocomplete="off" enctype="multipart/form-data">
 				<!--<label class="control-label">Equipment No.</label>-->
	 			<input type="hidden" name="epqno" class="form-control" value="<?php echo mt_rand(0000,9999); ?>" readonly="on" required>

	 		<div class="col-sm-5">
	 			<label class="control-label">Equipment Name</label>
	 			<input type="text" name="name" class="form-control" required>
			</div>
			<div class="col-sm-5">
	 			<label class="control-label">Equipment Category</label>
	 			<input type="text" name="cat" class="form-control" required>
	 		</div>
			 <div class="col-sm-5">
	 			<label class="control-label">Equipment Cost</label>
	 			<input type="number" name="cost" class="form-control" required>
	 		</div>
	 		<div class="col-sm-5">
				 <label class="control-label">Description</label>
	 			<input type="text" class="form-control" name="desc" required>
	 		</div>
	 		<div class="col-sm-5">
	 			<label class="control-label">Equipment photo</label>
	 			<input type="file" name="photo" class="form-control" required>
	 		</div><br>
	 		<button name="submit" type="submit" name="submit" class="btn btn-outline-dark">Update</button>
 		</form>
</div>