<?php include"header.php";?>
<!-- main menu -->
<?php include("nav.php")?>
<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>

<?php include"updatenav.php";?>

<div class="maincontant"> 
	<div class="container conbg">
		<div class="row">
			<div class="column2 col-md-12">

<h4 class="log-text text-center mb-4">Edit Permanent Address</h4>
<div class="container"> 
	<div class="from-inner eidtpage"> 
		<form action="corephp/editpermanent.php" method="post">
<?php
	$query = "SELECT * FROM tbl_permanent_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>		
		
		
		
		<?php if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "<h4 class='text-success'>".$msg."</h4>";
		}?>
		<?php if(isset($_GET['error'])){
			$error = $_GET['error'];
			echo "<h4 class='text-danger'>".$error."</h4>";
		}?>
		
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="Address"><i class="fas fa-pencil-alt mr-2"></i>Address<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['Address'] ;?>" id="Address" name="Address" placeholder="Address">
			</div>
			<div class="form-group col-md-6">
			  <label for="PostOffice"><i class="fas fa-pencil-alt mr-2"></i>Post Office<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PostOffice'] ;?>" id="PostOffice" name="PostOffice" placeholder="Post Office">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="PoliceStation"><i class="fas fa-pencil-alt mr-2"></i>Police Station<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PoliceStation'] ;?>" id="PoliceStation" name="PoliceStation" placeholder="Police Station">
			</div>
			<div class="form-group col-md-6">
			  <label for="DistrictCity"><i class="fas fa-pencil-alt mr-2"></i>District/City<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['DistrictCity'] ;?>" id="DistrictCity" name="DistrictCity" placeholder="District/City">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="DivisionState"><i class="fas fa-pencil-alt mr-2"></i>Division/State<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['DivisionState'] ;?>" id="DivisionState" name="DivisionState" placeholder="Division/State">
			</div>
			<div class="form-group col-md-6">
			  <label for="Country"><i class="fas fa-pencil-alt mr-2"></i>Country<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['Country'] ;?>" id="Country" name="Country" placeholder="Country">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="ZipCode"><i class="fas fa-pencil-alt mr-2"></i>Zip Code<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['ZipCode'] ;?>" id="ZipCode" name="ZipCode" placeholder="Zip Code">
			</div>
		  </div>
		  
		  
		  
		  <div class="text-center">
			<button type="submit" class="btn tomato col-6 mt-3" name="submit">Save</button>
		  </div>
		  
<?php }?>		  
		  
		</form>
	</div>
</div>


			</div> 
		</div>
	</div>
</div>


 <?php include"footer.php";?>