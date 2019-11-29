
<!-- Header -->
<?php include("header.php")?>

<!-- main menu -->
<?php include("nav.php")?>
<?php
if(!isset($_COOKIE['C_U_A'])){
	 header("Location: index.php");
}
?>

<?php include"deshheader.php";?>




<?php
if(isset($_REQUEST['email'])){
		$email=$_REQUEST['email'];
	}?>

	
	
<div class="otersection">
	<div class="deshsec">

<h4 class="log-text text-center mb-4">Edit Guardian  Info</h4>
<div class="container"> 
	<div class="from-inner eidtpage"> 
		<form action="corephp/editguardian.php?email=<?php echo $email;?>" method="post">
		
<?php
	$query = "SELECT * FROM tbl_guardian_info WHERE email ='$email'";
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
			  <label for="father_name"><i class="fas fa-pencil-alt mr-2"></i>Father's Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['father_name'] ;?>" id="father_name" name="father_name" placeholder="Father's Name">
			</div>
			<div class="form-group col-md-6">
			  <label for="FatherMobile"><i class="fas fa-phone mr-2"></i>Father's Mobile Number<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['FatherMobile'] ;?>" id="FatherMobile" name="FatherMobile" placeholder="+88 01XXX-XXXXXX">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="FatherOccupation"><i class="fas fa-pencil-alt mr-2"></i>Father's Occupation</label>
			  <input type="text" class="form-control" value="<?php echo $resu['FatherOccupation'] ;?>" id="FatherOccupation" name="FatherOccupation" placeholder="Father's Occupation">
			</div>
			<div class="form-group col-md-6">
			  <label for="FatherDesignation"><i class="fas fa-pencil-alt mr-2"></i>Father's Designation</label>
			  <input type="text" class="form-control" value="<?php echo $resu['FatherDesignation'] ;?>" id="FatherDesignation" name="FatherDesignation" placeholder="Father's Designation">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="mother_name"><i class="fas fa-pencil-alt mr-2"></i>Mother's Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['mother_name'] ;?>" id="mother_name" name="mother_name" placeholder="Mother's Name">
			</div>
			<div class="form-group col-md-6">
			  <label for="MotherMobile"><i class="fas fa-phone mr-2"></i>Mother's Mobile Number</label>
			  <input type="text" class="form-control" value="<?php echo $resu['MotherMobile'] ;?>" id="MotherMobile" name="MotherMobile" placeholder="+88 01XXX-XXXXXX">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="MotherOccupation"><i class="fas fa-pencil-alt mr-2"></i>Mother's Occupation</label>
			  <input type="text" class="form-control" value="<?php echo $resu['MotherOccupation'] ;?>" id="MotherOccupation" name="MotherOccupation" placeholder="Mother's Occupation">
			</div>
			<div class="form-group col-md-6">
			  <label for="MotherDesignation"><i class="fas fa-pencil-alt mr-2"></i>Mother's Designation</label>
			  <input type="text" class="form-control" value="<?php echo $resu['MotherDesignation'] ;?>" id="MotherDesignation" name="MotherDesignation" placeholder="Mother's Designation">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="LocalGuardianName"><i class="fas fa-pencil-alt mr-2"></i>Local Guardian's Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['LocalGuardianName'] ;?>" id="LocalGuardianName" name="LocalGuardianName" placeholder="Local Guardian's Name">
			</div>
			<div class="form-group col-md-6">
			  <label for="LocalGuardianContact"><i class="fas fa-phone mr-2"></i>Local Guardian's Contact No<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['LocalGuardianContact'] ;?>" id="LocalGuardianContact" name="LocalGuardianContact" placeholder="+88 01XXX-XXXXXX">
			</div>
		  </div>
		  
		<div class="form-row">
			<div class="form-group col-md-6">
			  <label for="RelationwithLocalGuardian"><i class="fas fa-pencil-alt mr-2"></i>Relation with Local Guardian<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['RelationwithLocalGuardian'] ;?>" id="RelationwithLocalGuardian" name="RelationwithLocalGuardian" placeholder="Relation with Local Guardian">
			</div>
			<div class="form-group col-md-6">
			  <label for="LocalGuardianAddress"><i class="fas fa-pencil-alt mr-2"></i>Local Guardian's Address</label>
			  <input type="text" class="form-control" value="<?php echo $resu['LocalGuardianAddress'] ;?>" id="LocalGuardianAddress" name="LocalGuardianAddress" placeholder="Local Guardian's Address">
			</div>
		</div>
		  
		  
		  <div class="text-center">
			<button type="submit" class="btn tomato col-6 mt-3" name="submit">UPDATE</button>
		  </div>
		  
<?php }?>

		</form>
	</div>
</div>
			</div> 
		</div>
	</div>
</div>





<?php include"deshfooter.php";?>
 <?php include"footer.php";?>