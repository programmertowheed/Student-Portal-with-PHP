<?php include"corelib.php";?>
<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>

<?php 

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
		
		
		if( $fname=="" || $lname=="" || $nname=="" || $birthdate=="" || $gender=="" || $mstatus=="" || $blood=="" || $nationality=="" || $religion=="" || $StudentID=="" || $Department=="" || $mobile==""){
			header("Location:../editprofile.php?error=Field Must Not Be Empty!!!");
		}else{
		
		
		$insert ="UPDATE tbl_signup_info 
				SET
					fname       = '$fname',
					lname       = '$lname',
					nname       = '$nname',
					birthdate   = '$birthdate',
					gender      = '$gender',
					mstatus     = '$mstatus',
					blood       = '$blood',
					nationality = '$nationality',
					religion    = '$religion',
					StudentID   = '$StudentID',
					Department  = '$Department',
					mobile      = '$mobile'
					WHERE email = '$email'
					";

		$run = $db->update($insert);
		if($run== true){
			header("Location:../editprofile.php?msg=Data Updated Successfully");
		}else{
			header("Location:../editprofile.php?error=Something Went Wrong");
		}
	
	}

}

?>