<?php include"header.php";?>
<!-- main menu -->
<?php include("nav.php")?>
<?php
if(isset($_COOKIE['C_U_A'])){
	header("Location: index.php");
}?>
<?php
if(!isset($_COOKIE['r_n_c_a'])){
	header("Location: index.php");
}?>
<?php
if(isset($_REQUEST['email'])){
		$email= $_REQUEST['email'];
	}
	
	
?>


<?php

$db = new database();
if(isset($_REQUEST['submit'])){
		$newPassword  = htmlspecialchars(stripslashes(trim($_REQUEST['newPassword'])));
		$conPassword  = htmlspecialchars(stripslashes(trim($_REQUEST['conPassword'])));
		
		if($newPassword=="" or $conPassword==""){
			$db->error ="Feild Must Not Be Empty!!";
		}elseif(strlen($conPassword)<6){
			$db->error ="Password Length Should be 6!!";
		}elseif($newPassword != $conPassword){
			$db->error ="Confirm Password Doesn't Match!!";
		}else{
				$useremail = md5(sha1($email));
				$userpass  = md5(sha1($conPassword));
				$auth      = md5(sha1($userpass.$useremail));
				
				$uppass ="UPDATE tbl_admin 
				SET
					adminPass = '$userpass',
					auth      = '$auth'
					WHERE adminEmail = '$email'
					";
				$run = $db->update($uppass);
				if($run== true){
					setcookie("r_n_c_a","",time()-(86400*7));
					setcookie("C_U_A","$auth",time()+(86400*7));
					header("Location: changerequest.php");
				}else{
					$db->error ="Password Not Change Something Wrong";
				}
				
			}


}





?>


<div class="maincontant"> 
	<div class="container conbg">
		<div class="row">
			<div class="column2 col-md-12">		
			
<div class="mt-5">
<h4 class="log-text text-center mb-4">Change Password</h4>
<div class="container"> 
	<div class="from-inner eidtpage"> 
		<form action="" method="post">
		
		<h4 class="text-success"><?php echo $db->msg;?></h4>
		<h4 class="text-danger"><?php echo $db->error;?></h4>
		
		  <div class="form-row">
			
			<div class="form-group col-md-12">
			  <label for="newPassword"><i class="fas fa-pencil-alt mr-2"></i>New Password<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
			</div>
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