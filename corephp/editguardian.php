<?php include"corelib.php";?>

<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>
<?php 

if(isset($_REQUEST['submit'])){
		$father_name      = htmlspecialchars(stripslashes(trim($_REQUEST['father_name'])));
		$FatherMobile     = htmlspecialchars(stripslashes(trim($_REQUEST['FatherMobile'])));
		$FatherOccupation = htmlspecialchars(stripslashes(trim($_REQUEST['FatherOccupation'])));
		$FatherDesignation= htmlspecialchars(stripslashes(trim($_REQUEST['FatherDesignation'])));
		$mother_name      = htmlspecialchars(stripslashes(trim($_REQUEST['mother_name'])));
		$MotherMobile     = htmlspecialchars(stripslashes(trim($_REQUEST['MotherMobile'])));
		$MotherOccupation = htmlspecialchars(stripslashes(trim($_REQUEST['MotherOccupation'])));
		$MotherDesignation= htmlspecialchars(stripslashes(trim($_REQUEST['MotherDesignation'])));
		$LocalGuardianName= htmlspecialchars(stripslashes(trim($_REQUEST['LocalGuardianName'])));
		$LocalGuardianContact= htmlspecialchars(stripslashes(trim($_REQUEST['LocalGuardianContact'])));
		$RelationwithLocalGuardian= htmlspecialchars(stripslashes(trim($_REQUEST['RelationwithLocalGuardian'])));
		$LocalGuardianAddress= htmlspecialchars(stripslashes(trim($_REQUEST['LocalGuardianAddress'])));
		
		
		if( $father_name=="" || $FatherMobile=="" || $mother_name=="" || $LocalGuardianName=="" || $LocalGuardianContact=="" || $RelationwithLocalGuardian==""){
			header("Location:../guardian.php?error=Field Must Not Be Empty!!!");
		}else{
		
		
		$insert ="UPDATE tbl_guardian_info 
				SET
					father_name              = '$father_name',
					FatherMobile             = '$FatherMobile',
					FatherOccupation         = '$FatherOccupation',
					FatherDesignation        = '$FatherDesignation',
					mother_name              = '$mother_name',
					MotherMobile             = '$MotherMobile',
					MotherOccupation         = '$MotherOccupation',
					MotherDesignation        = '$MotherDesignation',
					LocalGuardianName        = '$LocalGuardianName',
					LocalGuardianContact     = '$LocalGuardianContact',
					RelationwithLocalGuardian= '$RelationwithLocalGuardian',
					LocalGuardianAddress     = '$LocalGuardianAddress'
					WHERE email = '$email'
					";

		$run = $db->update($insert);
		if($run== true){
			header("Location:../guardian.php?msg=Data Updated Successfully");
		}else{
			header("Location:../guardian.php?error=Something Went Wrong");
		}
	
	}

}

?>