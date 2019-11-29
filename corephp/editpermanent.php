<?php include"corelib.php";?>

<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>
<?php 

if(isset($_REQUEST['submit'])){
		$Address      = htmlspecialchars(stripslashes(trim($_REQUEST['Address'])));
		$PostOffice   = htmlspecialchars(stripslashes(trim($_REQUEST['PostOffice'])));
		$PoliceStation= htmlspecialchars(stripslashes(trim($_REQUEST['PoliceStation'])));
		$DistrictCity = htmlspecialchars(stripslashes(trim($_REQUEST['DistrictCity'])));
		$DivisionState= htmlspecialchars(stripslashes(trim($_REQUEST['DivisionState'])));
		$Country      = htmlspecialchars(stripslashes(trim($_REQUEST['Country'])));
		$ZipCode      = htmlspecialchars(stripslashes(trim($_REQUEST['ZipCode'])));
		

		
		if( $Address=="" || $PostOffice=="" || $PoliceStation=="" || $DistrictCity=="" || $DivisionState=="" || $Country=="" || $ZipCode==""){
			header("Location:../permanent.php?error=Field Must Not Be Empty!!!");
		}else{
		
		
		$insert ="UPDATE tbl_permanent_info 
				SET
					Address       = '$Address',
					PostOffice    = '$PostOffice',
					PoliceStation = '$PoliceStation',
					DistrictCity  = '$DistrictCity',
					DivisionState = '$DivisionState',
					Country       = '$Country',
					ZipCode       = '$ZipCode'
					WHERE email = '$email'
					";

		$run = $db->update($insert);
		if($run== true){
			header("Location:../permanent.php?msg=Data Updated Successfully");
		}else{
			header("Location:../permanent.php?error=Something Went Wrong");
		}
	
	}

}

?>