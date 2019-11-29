
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

<?php
	$query = "SELECT * FROM tbl_signup_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>
	

	
<h4 class="log-text text-center mb-4">Edit Personal Info</h4>
<div class="container"> 
	<div class="from-inner eidtpage"> 
		<form action="corephp/stueditpro.php?email=<?php echo $email;?>" method="post">
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
			  <label for="nnam"><i class="fas fa-pencil-alt mr-2"></i>Nick Name<span class="requerd">*</span></label>
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
				<option <?php if($resu['gender']!='Male' or $resu['gender']!='Female')echo "selected" ;?> value="">Choose Gender</option>
				<option <?php if($resu['gender']=='Male')echo "selected" ;?> value="Male">Male</option>
				<option <?php if($resu['gender']=='Female')echo "selected" ;?> value="Female">Female</option>
			  </select>
			  <!--<input type="text" class="form-control" id="gender" placeholder="Gender">-->
			</div>
			<div class="form-group col-md-4">
			  <label for="status"><i class="fas fa-pencil-alt mr-2"></i>Marital Status<span class="requerd">*</span></label>
			  <select id="inputState" class="form-control" name="mstatus">
				<option <?php if($resu['mstatus']!='Single' or $resu['mstatus']!='Married')echo "selected" ;?> value="">Choose Status</option>
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
			<div class="form-group col-md-6">
			  <label for="nationality"><i class="fas fa-pencil-alt mr-2"></i>Nationality<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $resu['nationality'] ;?>">
			</div>
			<div class="form-group col-md-6">
			  <label for="religion"><i class="fas fa-pencil-alt mr-2"></i>Religion<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="religion" name="religion" value="<?php echo $resu['religion'] ;?>">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-7">
			  <label for="StudentID"><i class="fas fa-pencil-alt mr-2"></i>Student ID<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="StudentID" name="StudentID" value="<?php echo $resu['StudentID'] ;?>">
			</div>
			<div class="form-group col-md-5">
			  <label for="Department"><i class="fas fa-pencil-alt mr-2"></i>Department<span class="requerd">*</span></label>
			  <select id="inputState" class="form-control" name="Department">
				<option <?php if($resu['Department']=='')echo "selected" ;?> value="">Choose Department</option>
				<option <?php if($resu['Department']=='CSE')echo "selected" ;?> value="CSE">CSE</option>
				<option <?php if($resu['Department']=='EEE')echo "selected" ;?> value="EEE">EEE</option>
				<option <?php if($resu['Department']=='SWE')echo "selected" ;?> value="SWE">SWE</option>
				<option <?php if($resu['Department']=='Civil')echo "selected" ;?> value="Civil">Civil</option>
				<option <?php if($resu['Department']=='ETE')echo "selected" ;?> value="ETE">ETE</option>
				<option <?php if($resu['Department']=='BBA')echo "selected" ;?> value="BBA">BBA</option>
				<option <?php if($resu['Department']=='Textile')echo "selected" ;?> value="Textile">Textile</option>
				<option <?php if($resu['Department']=='English')echo "selected" ;?> value="English">English</option>
				<option <?php if($resu['Department']=='CIS')echo "selected" ;?> value="CIS">CIS</option>
				<option <?php if($resu['Department']=='MCT')echo "selected" ;?> value="MCT">MCT</option>
				<option <?php if($resu['Department']=='GED')echo "selected" ;?> value="GED">GED</option>
				<option <?php if($resu['Department']=='LLB')echo "selected" ;?> value="LLB">LLB</option>
			  </select>
			  <!--<input type="text" class="form-control" id="status" placeholder="Marital Status">-->
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





<?php include"deshfooter.php";?>
 <?php include"footer.php";?>