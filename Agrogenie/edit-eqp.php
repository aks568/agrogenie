<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<?php 
 if(!$_GET['id'] OR empty($_GET['id']) OR $_GET['id'] == '')
 {
 	header('location: manage-eqp.php');

 }else{
 	
 	$epqno = $name = $epqcat = $cost = $img = $des= "";
 	$id = (int)$_GET['id'];
 	$query = $db->query("SELECT * FROM equipment WHERE id = '$id' ");
 	$fetchObj = $query->fetchAll(PDO::FETCH_OBJ);

 	foreach($fetchObj as $obj){
       $name = $obj->name;
	   $epqcat = $obj->epqcat;
	   $cost = $obj->cost;
	   $img = $obj->img;
	   $des = $obj->description;
 	}
 }

?>
<div class="container" style="font-family: 'Quicksand', sans-serif;">
<?php
      if(isset($_POST['submit']))
      {
      	$n_name = $_POST['nm'];
      	$n_epqcat = $_POST['cat'];
      	$n_cost = $_POST['cs'];
		$n_des=$_POST['des'];
      	$n_id = $_GET['id'];

      	$update_query = $db->query("UPDATE equipment SET name = '$n_name',epqcat = '$n_epqcat', cost = '$n_cost',description = '$n_des' WHERE id = '$n_id' ");

      	if($update_query){?>
      	<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Equipment details successfully updated ! <i class="fa fa-check"></i></strong>
        </div>
       <?php
      	}else{ ?>
          <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
             <strong>Error while updating data. Please try again <i class="fa fa-times"></i></strong>
        </div>
      	<?php
      }
      }
?>
	<h1 style="font-family: 'Sacramento', cursive;font-size:45px;">Edit Equipment</h1>
	<form method="post">
		<div class="col-sm-5">
	 		<label class="control-label">Equipment Name</label>
	 		<input type="text" name="nm" class="form-control" value="<?php echo $name; ?>">
	 	</div>
		 <div class="col-sm-5">
	 		<label class="control-label">Equipment Category</label>
	 		<input type="text" name="cat" class="form-control" value="<?php echo $epqcat; ?>">
	 	</div>
		 <div class="col-sm-5">
	 		<label class="control-label">Equipment Cost</label>
	 		<input type="number" name="cs" class="form-control" value="<?php echo $cost; ?>">
		 </div>
	 	<div class="col-sm-5">
	 		<label class="control-label">Description</label>
	 		<input type="text" name="des" class="form-control" value="<?php echo $des; ?>">
		</div><br>
		 <button name="submit" type="submit" name="submit" class="btn btn-outline-dark">Update</button>
		 <a class="btn btn-outline-danger" onclick="return confirm('Confirm Delete ?')" href="delete-eqp.php?id=<?php echo $id ?>"><i class="fa fa-trash"></i> Delete Equipment</a>
	</form>
</div>
