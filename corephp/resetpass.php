<?php
include "../lib/config.php";
include "../lib/database.php";
$db = new database();

?>
<?php
if(isset($_COOKIE['C_U'])){
	header("Location: profile.php");
}?>
<?php 

if(isset($_REQUEST['esubmit'])){
		$email   = htmlspecialchars(stripslashes(trim($_REQUEST['email'])));
		$mobile  = htmlspecialchars(stripslashes(trim($_REQUEST['mobile'])));
		
		if($email=="" or $mobile==""){
			header("Location:../forgetpass.php?wrong=Feild Must Not Be Empty!!");
		}elseif(strlen($mobile) < 10){
			header("Location:../forgetpass.php?wrong=Please Enter valid mobile number!!");	
		}else{
			
				$userinfo ="SELECT * FROM tbl_user WHERE userEmail='$email' AND mobile like '%$mobile' ";
			
				$result = $db->select($userinfo);
				if($result){
					$randomNumber = rand(100000,999999); 
					$userup ="UPDATE tbl_user SET randnum = '$randomNumber' WHERE userEmail='$email' ";
					$run = $db->update($userup);
					if($run){
						$to = "$email";
						$subject = "Reset Password";
						$txt = "Hello Dear,
						This is Your password reset code ".$randomNumber;
						$headers = "From: admin@programmertowheed.com" . "\r\n" .
						mail($to,$subject,$txt,$headers);
						header("Location: ../confirmpass.php?email=$email");
					}else{
						header("Location:../forgetpass.php?wrong=Something Wrong!!");
					}
					
				}else{
					header("Location:../forgetpass.php?wrong=Email And Mobile Doesn't Found!!");
				}
		}
}

?>