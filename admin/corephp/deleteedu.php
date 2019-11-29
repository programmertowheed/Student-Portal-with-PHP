<?php include"corelib.php";?>
<?php
if(!isset($_COOKIE['C_U_A'])){
	 header("Location: index.php");
}
?>
<?php
if(isset($_REQUEST['email'])){
		$email=$_REQUEST['email'];
	}?>
<?php 

if(isset($_GET['id'])){
	
	$id = $_GET['id'];
	
	$delete = "DELETE FROM tbl_education_info WHERE id ='$id' AND email = '$email'";
	
		$run = $db->delete($delete);
		if($run== true){
			header("Location:../education.php?delmsg=Data Delete Successfully.&email=$email");
		}else{
			header("Location:../education.php?delerror=Something Went Wrong!!!&email=$email");
		}
}
	

?>

