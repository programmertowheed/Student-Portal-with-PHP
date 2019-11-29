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
$db = new database();
if(isset($_REQUEST['submit'])){
		$fname       = htmlspecialchars(stripslashes(trim($_REQUEST['fname'])));
		$lname       = htmlspecialchars(stripslashes(trim($_REQUEST['lname'])));
		$nname       = htmlspecialchars(stripslashes(trim($_REQUEST['nname'])));
		$birthdate   = htmlspecialchars(stripslashes(trim($_REQUEST['birthdate'])));
		$gender      = htmlspecialchars(stripslashes(trim($_REQUEST['gender'])));
		$mstatus     = htmlspecialchars(stripslashes(trim($_REQUEST['mstatus'])));
		$blood       = htmlspecialchars(stripslashes(trim($_REQUEST['blood'])));
		$nationality = htmlspecialchars(stripslashes(trim($_REQUEST['nationality'])));
		$religion    = htmlspecialchars(stripslashes(trim($_REQUEST['religion'])));
		$EmployeeID  = htmlspecialchars(stripslashes(trim($_REQUEST['EmployeeID'])));
		$mobile      = htmlspecialchars(stripslashes(trim($_REQUEST['mobile'])));
		$role        = htmlspecialchars(stripslashes(trim($_REQUEST['role'])));
		$email    = htmlspecialchars(stripslashes(trim($_REQUEST['email'])));
		
		
		$pass        = htmlspecialchars(stripslashes(trim($_REQUEST['pass'])));
		
		
		
		
		if( $fname=="" || $lname=="" || $nname=="" || $birthdate=="" || $gender=="" || $mstatus=="" || $blood=="" || $nationality=="" || $religion=="" || $EmployeeID=="" || $mobile=="" || $role=="" || $email=="" || $pass==""){
			$db->error = "Field Must Not Be Empty!!!";
		}elseif(strlen($pass)<6){
			$db->error = "Password Length Should be 6!!";
		}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$db->error = "Invalid email!!!";
		}elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$userinfo ="SELECT * FROM tbl_admin WHERE adminEmail='$email'";
			$result = $db->select($userinfo);
			if($result==true){
				$db->error = "Email already exists!!";
			}else{
				$useremail = md5(sha1($email));
					$userpass  = md5(sha1($pass));
					$auth      = md5(sha1($userpass.$useremail));
					
					
				$insert ="INSERT INTO tbl_admin_info (fname,lname,nname,birthdate,gender,mstatus,blood,nationality,religion,EmployeeID,mobile,email) VALUES('$fname','$lname','$nname','$birthdate','$gender','$mstatus','$blood','$nationality','$religion','$EmployeeID','$mobile','$email ')";

				$admininfo ="INSERT INTO tbl_admin (adminEmail,mobile,adminPass,auth,role,picture) VALUES('$email','$mobile','$userpass','$auth','$role','download.png')";
				
				
				
				
				$run = $db->insert($insert);
				$db->insert($admininfo);
				
					if($run==true){
						$db->msg = "Admin Account Created Successfully";
					}else{
						$db->error = "Account Not Created!!";
					}
			}
		}

}

?>

<div class="">
<div class="container"> 
	<div class="from-inner"> 
		<form action="" method="post">
		
		<h4 class="text-success"><?php echo $db->msg;?></h4>
		<h4 class="text-danger"><?php echo $db->error;?></h4>
		<h4 class="log-text text-center mb-4">Admin Sign Up</h4>
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="fnam"><i class="fas fa-pencil-alt mr-2"></i>First Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="fnam" name="fname" placeholder="First Name">
			</div>
			<div class="form-group col-md-6">
			  <label for="lname"><i class="fas fa-pencil-alt mr-2"></i>Last Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-6">
			  <label for="nnam"><i class="fas fa-pencil-alt mr-2"></i>User Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="nnam" name="nname" placeholder="User Name">
			</div>
			<div class="form-group col-md-6">
			  <label for="bdate"><i class="fas fa-calendar-alt mr-2"></i>Birth Date<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="bdate" name="birthdate" placeholder="04-01-1992">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-4">
			  <label for="gender"><i class="fas fa-venus mr-2"></i>Gender<span class="requerd">*</span></label>
			  <select id="inputState" class="form-control" name="gender">
				<option value="" selected>Choose Gender</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			  </select>
			  <!--<input type="text" class="form-control" id="gender" placeholder="Gender">-->
			</div>
			<div class="form-group col-md-4">
			  <label for="status"><i class="fas fa-pencil-alt mr-2"></i>Marital Status<span class="requerd">*</span></label>
			  <select id="inputState" class="form-control" name="mstatus">
				<option value="" selected>Choose Status</option>
				<option value="Single">Single</option>
				<option value="Married">Married</option>
			  </select>
			  <!--<input type="text" class="form-control" id="status" placeholder="Marital Status">-->
			</div>
			<div class="form-group col-md-4">
			  <label for="bgroup"><i class="fas fa-tint mr-2"></i>Blood Group<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="bgroup" name="blood" placeholder="Blood Group">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-4">
			  <label for="nationality"><i class="fas fa-pencil-alt mr-2"></i>Nationality<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
			</div>
			<div class="form-group col-md-4">
			  <label for="religion"><i class="fas fa-pencil-alt mr-2"></i>Religion<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion">
			</div>
			<div class="form-group col-md-4">
			  <label for="EmployeeID"><i class="fas fa-pencil-alt mr-2"></i>Employee ID<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="EmployeeID" name="EmployeeID" placeholder="Employee ID">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-8">
				<label for="mobile"><i class="fas fa-phone mr-2"></i>Mobile<span class="requerd">*</span></label>
				<input type="text" class="form-control" name="mobile" id="mobile" placeholder="+88 01XXX-XXXXXX">
			</div>
			<div class="form-group col-md-4">
			  <label for="role"><i class="fas fa-pencil-alt mr-2"></i>Role<span class="requerd">*</span></label>
			  <select id="inputState" class="form-control" name="role">
				<option value="" selected>Choose Role</option>
				<option value="Authority">Authority</option>
				<option value="Admin">Admin</option>
			  </select>
			  <!--<input type="text" class="form-control" id="gender" placeholder="Gender">-->
			</div>
		  </div>
		  
		  
			<div class="form-group">
				<label for="email"><i class="fas fa-envelope mr-2"></i>Email<span class="requerd">*</span></label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Email">
			</div>
			
			
			
			<div class="form-group">
			  <label for="inputPassword4"><i class="fas fa-key mr-2"></i>Password<span class="requerd">*</span></label>
			  <input type="password" class="form-control" name="pass" id="inputPassword4" placeholder="Password">
			</div>
		  <div class="text-center">
			<button type="submit" class="btn tomato col-6 mt-3" name="submit">ADD</button>
		  </div>
		</form>
	</div>
</div>
</div>

<?php include"deshfooter.php";?>


<?php include"footer.php";?>
	
