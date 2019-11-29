<!-- Header -->
<?php include("header.php")?>

<!-- main menu -->
<?php include("nav.php")?>



<?php
if(!isset($_COOKIE['C_U_A'])){
	header("Location: index.php");
}?>


<div class="maincontant"> 
	<div class="container conbg">
		<div class="row">
			<div class="column2 col-md-12">

<?php
	$query = "SELECT * FROM tbl_admin_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>
	

	
<h4 class="log-text text-center mb-4">Edit Personal Info</h4>
<div class="container"> 
	<div class="from-inner eidtpage"> 
		<form action="corephp/editpro.php" method="post">
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
			  <label for="fnam"><i class="fas fa-pencil-alt mr-2"></i>First Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="fnam" name="fname" value="<?php echo $resu['fname'] ;?>">
			</div>
			<div class="form-group col-md-6">
			  <label for="lname"><i class="fas fa-pencil-alt mr-2"></i>Last Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $resu['lname'] ;?>">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="nnam"><i class="fas fa-pencil-alt mr-2"></i>User Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="nnam" name="nname" value="<?php echo $resu['nname'] ;?>">
			</div>
			<div class="form-group col-md-6">
			  <label for="bdate"><i class="fas fa-calendar-alt mr-2"></i>Birth Date<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="bdate" name="birthdate" value="<?php echo $resu['birthdate'] ;?>">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-4">
			  <label for="gender"><i class="fas fa-venus mr-2"></i>Gender<span class="requerd">*</span></label>
			  <select id="inputState" class="form-control" name="gender">
				<option <?php if($resu['gender']!='Male' or $resu['gender']!='Female')echo "selected" ;?>>Choose Gender</option>
				<option <?php if($resu['gender']=='Male')echo "selected" ;?> value="Male">Male</option>
				<option <?php if($resu['gender']=='Female')echo "selected" ;?> value="Female">Female</option>
			  </select>
			  <!--<input type="text" class="form-control" id="gender" placeholder="Gender">-->
			</div>
			<div class="form-group col-md-4">
			  <label for="status"><i class="fas fa-pencil-alt mr-2"></i>Marital Status<span class="requerd">*</span></label>
			  <select id="inputState" class="form-control" name="mstatus">
				<option <?php if($resu['mstatus']!='Single' or $resu['mstatus']!='Married')echo "selected" ;?>>Choose Status</option>
				<option <?php if($resu['mstatus']=='Single')echo "selected" ;?> value="Single">Single</option>
				<option <?php if($resu['mstatus']=='Married')echo "selected" ;?> value="Married">Married</option>
			  </select>
			  <!--<input type="text" class="form-control" id="status" placeholder="Marital Status">-->
			</div>
			<div class="form-group col-md-4">
			  <label for="bgroup"><i class="fas fa-tint mr-2"></i>Blood Group<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="bgroup" name="blood" value="<?php echo $resu['blood'] ;?>">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-4">
			  <label for="nationality"><i class="fas fa-pencil-alt mr-2"></i>Nationality<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $resu['nationality'] ;?>">
			</div>
			<div class="form-group col-md-4">
			  <label for="religion"><i class="fas fa-pencil-alt mr-2"></i>Religion<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $resu['religion'] ;?>">
			</div>
			<div class="form-group col-md-4">
			  <label for="EmployeeID"><i class="fas fa-pencil-alt mr-2"></i>Employee ID<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="EmployeeID" name="EmployeeID" value="<?php echo $resu['EmployeeID'] ;?>">
			</div>
		  </div>
		  
		  
		  
		  
		  <div class="form-group">
			  <label for="mobile"><i class="fas fa-phone mr-2"></i>Mobile<span class="requerd">*</span></label>
			  <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $resu['mobile'] ;?>">
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











<?php include"footer.php";?>
	
