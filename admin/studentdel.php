<?php include"header.php";?>
<?php
if(!isset($_COOKIE['C_U_A'])){
	header("Location: index.php");
}?>


<?php
if(isset($_REQUEST['email'])){
		$email=$_REQUEST['email'];
		
	$queryuser = "DELETE FROM tbl_user WHERE userEmail      ='$email'";
	$querysign = "DELETE FROM tbl_signup_info WHERE email   ='$email'";
	$querypre = "DELETE FROM tbl_present_info WHERE email  ='$email'";
	$queryper = "DELETE FROM tbl_permanent_info WHERE email='$email'";
	$querygur = "DELETE FROM tbl_guardian_info WHERE email ='$email'";
	$queryedu = "DELETE FROM tbl_education_info WHERE email='$email'";
	
	$queryuser = $db->delete($queryuser);
	$querysign = $db->delete($querysign);
	$querypre = $db->delete($querypre);
	$queryper = $db->delete($queryper);
	$querygur = $db->delete($querygur);
	$queryedu = $db->delete($queryedu);
	if($queryuser==true || $querysign==true || $querypre==true || $queryper==true || $querygur==true || $queryedu==true){
		header("Location:studentlist.php?msg=Student Delete Successfully.");
	}else{
		header("Location:studentlist.php?error=Student Not Delete!!!");
	}	
		
		
		
		

}?>