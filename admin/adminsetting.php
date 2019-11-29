<!-- Header -->
<?php include("header.php")?>

<!-- main menu -->
<?php include("nav.php")?>
<?php 
if(!isset($_COOKIE['C_U_A'])){
	header("Location: index.php");
}
?>

<div class="maincontant"> 
	<div class="container conbg">
		<div class="row">
			<div class="column2 col-md-12">
			
			

					  
<?php
	$query = "SELECT * FROM tbl_admin_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>
			
			
<div class="container"> 
<div class="from-inner eidtpage"> 
<div class="top">
	<div class="row">
		<div class="col">
		   <h3>Account Info</h3>
		</div>
	</div>	   
</div>	
<div class="section">
   
	<div class="secdivspan">
		 <label for="nickname"><strong>User Name :</strong></label>
		 <span><?php echo $resu['nname'] ;?></span>


	
	<div class="secdivspan">
		 <label for="Mobile"><strong>Mobile No :</strong></label>
		<span><?php echo $resu['mobile'] ;?></span>

	</div>

	<div class="secdivspan">
		 <label for="Email"><strong>Email :</strong></label>
		<span><?php echo $resu['email'] ;?></span>

	</div>
</div> 
</div> 
</div> 
<?php }?>			
			
			
			
			
<div class="mt-5">
<h4 class="log-text text-center mb-4">Change Password</h4>
<div class="container"> 
	<div class="from-inner eidtpage"> 
		<form action="editpass.php" method="post">
		
		
		<?php if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "<h4 class='text-success'>".$msg."</h4>";
		}?>
		<?php if(isset($_GET['error'])){
			$error = $_GET['error'];
			echo "<h4 class='text-danger'>".$error."</h4>";
		}?>
		
		  <div class="form-row">
			<div class="form-group col-md-12">
			  <label for="oldPassword"><i class="fas fa-pencil-alt mr-2"></i>Old Password<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="oldPassword" name="oldPassword" placeholder="Old Password">
			</div>
			<div class="form-group col-md-12">
			  <label for="newPassword"><i class="fas fa-pencil-alt mr-2"></i>New Password<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-12">
			  <label for="conPassword"><i class="fas fa-pencil-alt mr-2"></i>Confirm Password<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="conPassword" name="conPassword" placeholder="Confirm Password">
			</div>
		  </div>
		  
		  
		  <div class="text-center">
			<button type="submit" class="btn tomato col-6 mt-3" name="submit">Change</button>
		  </div>
		</form>
		
	</div>
</div>
</div>



			</div> 
		</div>
	</div>
</div>



<?php include"footer.php";?>
	
