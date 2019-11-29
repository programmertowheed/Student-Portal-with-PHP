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




if(isset($_REQUEST['email'])){
	
	$email=$_REQUEST['email'];
	}

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
	header("Location: ../confirmpass.php?email=$email&resend=Resent Code");
}else{
	$db->error ="Something Wrong!!";
	header("Location:../confirmpass.php");
}

?>
