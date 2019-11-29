<?php include"corelib.php";?>


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
		$EmployeeID  = htmlspecialchars(stripslashes(trim($_REQUEST['EmployeeID'])));
		$mobile      = htmlspecialchars(stripslashes(trim($_REQUEST['mobile'])));
		
		
		if( $fname=="" || $lname=="" || $nname=="" || $birthdate=="" || $gender=="" || $mstatus=="" || $blood=="" || $nationality=="" || $religion=="" || $EmployeeID=="" || $mobile==""){
			header("Location:../adminprofile.php?error=Field Must Not Be Empty!!!");
		}else{
		
		
		$insert ="UPDATE tbl_admin_info 
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
					EmployeeID  = '$EmployeeID',
					mobile      = '$mobile'
					WHERE email = '$email'
					";

		$run = $db->update($insert);
		if($run== true){
			header("Location:../adminprofile.php?msg=Data Updated Successfully");
		}else{
			header("Location:../adminprofile.php?error=Something Went Wrong");
		}
	
	}

}

?>