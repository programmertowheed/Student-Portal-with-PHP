<?php include"header.php";?>
<?php
if(!isset($_COOKIE['C_U_A'])){
	header("Location: index.php");
}?>
<?php
if(isset($_COOKIE["C_U_A"])){
$target = $_COOKIE["C_U_A"];
$query = "SELECT * FROM tbl_admin WHERE auth ='$target'";
$red = $db->select($query);	
	while($res = mysqli_fetch_assoc($red)){
		$email = $res['adminEmail'] ;
		$role  = $res['role'] ;
	}
}
?>
<?php if($role != 'Authority'){
	header("Location: home.php");
}?>


<?php
if(isset($_REQUEST['email'])){
		$email=$_REQUEST['email'];
		
	$query = "DELETE FROM tbl_admin WHERE adminEmail ='$email'";
	$red = $db->delete($query);
	if($red==true){
		$query = "DELETE FROM tbl_admin_info WHERE email ='$email'";
		$red = $db->delete($query);
		if($red==true){
			header("Location:adminlist.php?msg=Admin Delete Successfully.");
		}
	}else{
		header("Location:adminlist.php?error=Admin Not Delete!!!");
	}	
		
		
		
		

}?>