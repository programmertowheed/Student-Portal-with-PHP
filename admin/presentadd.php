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


<h4 class="log-text text-center mb-4">Edit Present Address</h4>
<div class="container"> 
	<div class="from-inner eidtpage"> 
		<form action="corephp/editpresentadd.php?email=<?php echo $email;?>" method="post">
<?php
	$query = "SELECT * FROM tbl_present_info WHERE email ='$email'";
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
			  <label for="PAddress"><i class="fas fa-pencil-alt mr-2"></i>Address<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PAddress'] ;?>" id="PAddress" name="PAddress" placeholder="Address">
			</div>
			<div class="form-group col-md-6">
			  <label for="PPostOffice"><i class="fas fa-pencil-alt mr-2"></i>Post Office<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PPostOffice'] ;?>" id="PPostOffice" name="PPostOffice" placeholder="Post Office">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="PPoliceStation"><i class="fas fa-pencil-alt mr-2"></i>Police Station<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PPoliceStation'] ;?>" id="PPoliceStation" name="PPoliceStation" placeholder="Police Station">
			</div>
			<div class="form-group col-md-6">
			  <label for="PDistrictCity"><i class="fas fa-pencil-alt mr-2"></i>District/City<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PDistrictCity'] ;?>" id="PDistrictCity" name="PDistrictCity" placeholder="District/City">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="PDivisionState"><i class="fas fa-pencil-alt mr-2"></i>Division/State<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PDivisionState'] ;?>" id="PDivisionState" name="PDivisionState" placeholder="Division/State">
			</div>
			<div class="form-group col-md-6">
			  <label for="PCountry"><i class="fas fa-pencil-alt mr-2"></i>Country<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PCountry'] ;?>" id="PCountry" name="PCountry" placeholder="Country">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="PZipCode"><i class="fas fa-pencil-alt mr-2"></i>Zip Code<span class="requerd">*</span></label>
			  <input type="text" class="form-control" value="<?php echo $resu['PZipCode'] ;?>" id="PZipCode" name="PZipCode" placeholder="Zip Code">
			</div>
			<div class="form-group col-md-6">
			  <label for="PHostelAddress"><i class="fas fa-pencil-alt mr-2"></i>Hostel Address</label>
			  <input type="text" class="form-control" value="<?php echo $resu['PHostelAddress'] ;?>" id="PHostelAddress" name="PHostelAddress" placeholder="Hostel Address">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="PMessAddress"><i class="fas fa-pencil-alt mr-2"></i>Mess Address</label>
			  <input type="text" class="form-control" value="<?php echo $resu['PMessAddress'] ;?>" id="PMessAddress" name="PMessAddress" placeholder="Mess Address">
			</div>
			<div class="form-group col-md-6">
			  <label for="POtherAddress"><i class="fas fa-pencil-alt mr-2"></i>Other Address</label>
			  <input type="text" class="form-control" value="<?php echo $resu['POtherAddress'] ;?>" id="POtherAddress" name="POtherAddress" placeholder="Other Address">
			</div>
		  </div>
		  
		  <div class="text-center">
			<button type="submit" class="btn tomato col-6 mt-3" name="submit">UPDATE</button>
		  </div>
		</form>
<?php }?>		
		
		
		
	</div>
</div>



			</div> 
		</div>
	</div>
</div>





<?php include"deshfooter.php";?>
 <?php include"footer.php";?>