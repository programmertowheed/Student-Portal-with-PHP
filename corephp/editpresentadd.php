<?php include"corelib.php";?>

<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>
<?php 

if(isset($_REQUEST['submit'])){
		$PAddress      = htmlspecialchars(stripslashes(trim($_REQUEST['PAddress'])));
		$PPostOffice   = htmlspecialchars(stripslashes(trim($_REQUEST['PPostOffice'])));
		$PPoliceStation= htmlspecialchars(stripslashes(trim($_REQUEST['PPoliceStation'])));
		$PDistrictCity = htmlspecialchars(stripslashes(trim($_REQUEST['PDistrictCity'])));
		$PDivisionState= htmlspecialchars(stripslashes(trim($_REQUEST['PDivisionState'])));
		$PCountry      = htmlspecialchars(stripslashes(trim($_REQUEST['PCountry'])));
		$PZipCode      = htmlspecialchars(stripslashes(trim($_REQUEST['PZipCode'])));
		$PHostelAddress= htmlspecialchars(stripslashes(trim($_REQUEST['PHostelAddress'])));
		$PMessAddress  = htmlspecialchars(stripslashes(trim($_REQUEST['PMessAddress'])));
		$POtherAddress = htmlspecialchars(stripslashes(trim($_REQUEST['POtherAddress'])));

		
		if( $PAddress=="" || $PPostOffice=="" || $PPoliceStation=="" || $PDistrictCity=="" || $PDivisionState=="" || $PCountry=="" || $PZipCode==""){
			header("Location:../presentadd.php?error=Field Must Not Be Empty!!!");
		}else{
		
		
		$insert ="UPDATE tbl_present_info 
				SET
					PAddress       = '$PAddress',
					PPostOffice    = '$PPostOffice',
					PPoliceStation = '$PPoliceStation',
					PDistrictCity  = '$PDistrictCity',
					PDivisionState = '$PDivisionState',
					PCountry       = '$PCountry',
					PZipCode       = '$PZipCode',
					PHostelAddress = '$PHostelAddress',
					PMessAddress   = '$PMessAddress',
					POtherAddress  = '$POtherAddress'
					WHERE email = '$email'
					";

		$run = $db->update($insert);
		if($run== true){
			header("Location:../presentadd.php?msg=Data Updated Successfully");
		}else{
			header("Location:../presentadd.php?error=Something Went Wrong");
		}
	
	}

}

?>