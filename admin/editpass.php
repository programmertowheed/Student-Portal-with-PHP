<?php include"header.php";?>

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
		$pic = $res['picture'] ;
	}
}
?>
<?php
if(isset($_REQUEST['submit'])){
		$oldPassword  = htmlspecialchars(stripslashes(trim($_REQUEST['oldPassword'])));
		$newPassword  = htmlspecialchars(stripslashes(trim($_REQUEST['newPassword'])));
		$conPassword  = htmlspecialchars(stripslashes(trim($_REQUEST['conPassword'])));
		
		if($oldPassword=="" or $newPassword=="" or $conPassword==""){
			header("Location: adminsetting.php?error=Feild Must Not Be Empty!!");
		}elseif(strlen($conPassword)<6){
			header("Location: adminsetting.php?error=Password Length Should be 6!!");
		}elseif($newPassword != $conPassword){
			header("Location: adminsetting.php?error=Confirm Password Doesn't Match!!");
		}else{
			$useremail   = md5(sha1($email));
			$oldPassword = md5(sha1($oldPassword));
			$auth        = md5(sha1($oldPassword.$useremail));
			
			
			
			$userinfo ="SELECT * FROM tbl_admin WHERE adminEmail='$email' && adminPass='$oldPassword' && auth='$auth' ";
		
			$result = $db->select($userinfo);
			if($result){
				$useremail = md5(sha1($email));
				$userpass  = md5(sha1($conPassword));
				$auth      = md5(sha1($userpass.$useremail));
				
				$uppass ="UPDATE tbl_admin 
				SET
					adminPass  = '$userpass',
					auth      = '$auth'
					WHERE adminEmail = '$email'
					";
				$run = $db->update($uppass);
				if($run){
					setcookie("C_U_A","",time()-(86400*7));
					setcookie("C_U_A","$auth",time()+(86400*7));
					header("Location:adminsetting.php?msg=Password Changed Successfully.");
				}else{
					header("Location: adminsetting.php?error=Password Not Change Something Wrong");
				}
				
			}else{
				header("Location: adminsetting.php?error=Old Password Doesn't Match");
			}
	}

}

?>


	
