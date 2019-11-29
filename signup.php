<?php include"header.php";?>
<!-- main menu -->
<?php include("nav.php")?>
<?php
if(isset($_COOKIE['C_U'])){
	header("Location: profile.php");
}?>
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
		$StudentID   = htmlspecialchars(stripslashes(trim($_REQUEST['StudentID'])));
		$Department  = htmlspecialchars(stripslashes(trim($_REQUEST['Department'])));
		$mobile      = htmlspecialchars(stripslashes(trim($_REQUEST['mobile'])));
		$email       = htmlspecialchars(stripslashes(trim($_REQUEST['email'])));
		
		
		$pass        = htmlspecialchars(stripslashes(trim($_REQUEST['pass'])));
		
		
		
		
		if( $fname=="" || $lname=="" || $nname=="" || $birthdate=="" || $gender=="" || $mstatus=="" || $blood=="" || $nationality=="" || $religion=="" || $StudentID=="" || $Department=="" || $mobile=="" || $email=="" || $pass==""){
			$db->error = "Field Must Not Be Empty!!!";
		}elseif(strlen($pass)<6){
			$db->error = "Password Length Should be 6!!";
		}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$db->error = "Invalid email!!!";
		}elseif(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$userinfo ="SELECT * FROM tbl_user WHERE userEmail='$email'";
			$result = $db->select($userinfo);
			if($result==true){
				$db->error = "Email already exists!!";
			}else{
				$useremail = md5(sha1($email));
				$userpass  = md5(sha1($pass));
				$auth      = md5(sha1($userpass.$useremail));
					
					
				$insert ="INSERT INTO tbl_signup_info (fname,lname,nname,birthdate,gender,mstatus,blood,nationality,religion,StudentID,Department,mobile,email) VALUES('$fname','$lname','$nname','$birthdate','$gender','$mstatus','$blood','$nationality','$religion','$StudentID','$Department','$mobile','$email ')";

				$userinfo ="INSERT INTO tbl_user (userEmail,mobile,userPass,auth,picture) VALUES('$email','$mobile','$userpass','$auth','download.png')";
				
				$guardian_info ="INSERT INTO tbl_guardian_info (email) VALUES('$email')";
				$tbl_present_info ="INSERT INTO tbl_present_info (email) VALUES('$email')";
				$tbl_permanent_info ="INSERT INTO tbl_permanent_info (email) VALUES('$email')";
				
				
				$run = $db->insert($insert);
				$db->insert($userinfo);
				$db->insert($guardian_info);
				$db->insert($tbl_present_info);
				$db->insert($tbl_permanent_info);
					if($run==true){
						$db->msg = "Account Created Successfully";
					}else{
						$db->error = "Account Not Created!!";
					}
			}
		}

}

?>

<div class="bgpic">
<div class="container"> 
	<div class="from-inner"> 
		<form action="signup.php" method="post">
		
		<h4 class="text-success"><?php echo $db->msg;?></h4>
		<h4 class="text-danger"><?php echo $db->error;?></h4>
		<h4 class="log-text text-center mb-4">Sign Up</h4>
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
			  <label for="nnam"><i class="fas fa-pencil-alt mr-2"></i>Nick Name<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="nnam" name="nname" placeholder="Nick Name">
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
			<div class="form-group col-md-6">
			  <label for="nationality"><i class="fas fa-pencil-alt mr-2"></i>Nationality<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
			</div>
			<div class="form-group col-md-6">
			  <label for="religion"><i class="fas fa-pencil-alt mr-2"></i>Religion<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-7">
			  <label for="StudentID"><i class="fas fa-pencil-alt mr-2"></i>Student ID<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="StudentID" name="StudentID" placeholder="Student ID">
			</div>
			<div class="form-group col-md-5">
			  <label for="Department"><i class="fas fa-pencil-alt mr-2"></i>Department<span class="requerd">*</span></label>
			  <select id="inputState" class="form-control" name="Department">
				<option value="" selected>Choose Department</option>
				<option value="CSE">CSE</option>
				<option value="EEE">EEE</option>
				<option value="SWE">SWE</option>
				<option value="Civil">Civil</option>
				<option value="ETE">ETE</option>
				<option value="BBA">BBA</option>
				<option value="Textile">Textile</option>
				<option value="English">English</option>
				<option value="CIS">CIS</option>
				<option value="MCT">MCT</option>
				<option value="GED">GED</option>
				<option value="LLB">LLB</option>
			  </select>
			  <!--<input type="text" class="form-control" id="status" placeholder="Marital Status">-->
			</div>
		  </div>
		  
		  
		  
		  
		  <div class="form-group">
			  <label for="mobile"><i class="fas fa-phone mr-2"></i>Mobile<span class="requerd">*</span></label>
			  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="+88 01XXX-XXXXXX">
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
			<button type="submit" class="btn tomato col-6 mt-3" name="submit">Sign Up</button>
		  </div>
		</form>
	</div>
</div>
</div>




<?php include"footer.php";?>
	
