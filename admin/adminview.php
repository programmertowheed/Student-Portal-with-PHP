<!-- Header -->
<?php include("header.php")?>

<!-- main menu -->
<?php include("nav.php")?>
<?php
if(!isset($_COOKIE['C_U_A'])){
	 header("Location: index.php");
}
?>
<?php
if(isset($_COOKIE["C_U_A"])){
$target = $_COOKIE["C_U_A"];
$query = "SELECT * FROM tbl_admin WHERE auth ='$target'";
$red = $db->select($query);	
	while($res = mysqli_fetch_assoc($red)){
		$email = $res['adminEmail'] ;
		$role  = $res['role'] ;
	}
}
?>
<?php if($role != 'Authority'){
	header("Location: home.php");
}?>

<?php include"deshheader.php";?>



<?php
if(isset($_REQUEST['email'])){
		$email=$_REQUEST['email'];
	}?>
<div class="otersection">
	<div class="deshsec">
	
	<?php if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "<h4 class='text-success ml-2'>".$msg."</h4>";
		}?>
		<?php if(isset($_GET['error'])){
			$error = $_GET['error'];
			echo "<h4 class='text-danger ml-2'>".$error."</h4>";
		}?>
	
	
		<div class="top">
			<div class="row">
				<div class="col clearfix">
				   <div class="float-left"><h3>Personal Info</h3></div>
				   <div class="link float-right"><a href="adminedit.php?email=<?php echo $email ;?>">Edit</a></div>
				</div>
			</div>	   
		</div>
					  
<?php
	$query = "SELECT * FROM tbl_admin_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>
			
	
<div class="section">
   
	<div class="secdiv">
		 <label for="firstName"><strong>First Name :</strong></label>
		<span><?php echo $resu['fname'] ;?></span>

	</div>

	<div class="secdiv">
		 <label for="lastName"><strong>Last Name :</strong></label>
		<span><?php echo $resu['lname'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="nickname"><strong>User Name :</strong></label>
		 <span><?php echo $resu['nname'] ;?></span>

	</div>

	<div class="secdiv">
		 <label for="BirthDate"><strong>Birth Date :</strong></label>
		 <span><?php echo $resu['birthdate'] ;?></span>

	</div>

	<div class="secdiv">
		 <label for="Gender"><strong>Gender :</strong></label>
		 <span><?php echo $resu['gender'] ;?></span>
	</div>
	<div class="secdiv">
		 <label for="MaritalStatus"><strong>Marital Status :</strong></label>
		 <span><?php echo $resu['mstatus'] ;?></span>

	</div>
	
	<div class="secdiv">
		 <label for="BloodGroup"><strong>Blood Group :</strong></label>
		 <span><?php echo $resu['blood'] ;?></span>

	</div>
	
	<div class="secdiv">
		 <label for="Nationality"><strong>Nationality :</strong></label>
		 <span><?php echo $resu['nationality'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="Religion"><strong>Religion :</strong></label>
		<span><?php echo $resu['religion'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="EmployeeID"><strong>Employee ID :</strong></label>
		<span><?php echo $resu['EmployeeID'] ;?></span>

	</div>

	
	<div class="secdiv">
		 <label for="Mobile"><strong>Mobile No :</strong></label>
		<span><?php echo $resu['mobile'] ;?></span>

	</div>

	<div class="secdiv">
		 <label for="Email"><strong>Email :</strong></label>
		<span><?php echo $resu['email'] ;?></span>

	</div>
</div> 
<?php }?>





 
	</div>	   
</div>


<?php include"deshfooter.php";?>


<?php include"footer.php";?>
	
