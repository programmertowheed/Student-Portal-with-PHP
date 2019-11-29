<?php include"header.php";?>

<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}

?>
<?php
if(isset($_COOKIE["C_U"])){
$target = $_COOKIE["C_U"];
$query = "SELECT * FROM tbl_user WHERE auth ='$target'";
$red = $db->select($query);	
	while($res = mysqli_fetch_assoc($red)){
		$email = $res['userEmail'] ;
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
			header("Location: changepass.php?error=Feild Must Not Be Empty!!");
		}elseif(strlen($conPassword)<6){
			header("Location: changepass.php?error=Password Length Should be 6!!");
		}elseif($newPassword != $conPassword){
			header("Location: changepass.php?error=Confirm Password Doesn't Match!!");
		}else{
			$useremail   = md5(sha1($email));
			$oldPassword = md5(sha1($oldPassword));
			$auth        = md5(sha1($oldPassword.$useremail));
			
			
			
			$userinfo ="SELECT * FROM tbl_user WHERE userEmail='$email' && userPass='$oldPassword' && auth='$auth' ";
		
			$result = $db->select($userinfo);
			if($result){
				$useremail = md5(sha1($email));
				$userpass  = md5(sha1($conPassword));
				$auth      = md5(sha1($userpass.$useremail));
				
				$uppass ="UPDATE tbl_user 
				SET
					userPass  = '$userpass',
					auth      = '$auth'
					WHERE userEmail = '$email'
					";
				$run = $db->update($uppass);
				if($run){
					setcookie("C_U","",time()-(86400*7));
					setcookie("C_U","$auth",time()+(86400*7));
					header("Location:changepass.php?msg=Password Changed Successfully.");
				}else{
					header("Location: changepass.php?error=Password Not Change Something Wrong");
				}
				
			}else{
				header("Location: changepass.php?error=Old Password Doesn't Match");
			}
	}

}

?>


	
