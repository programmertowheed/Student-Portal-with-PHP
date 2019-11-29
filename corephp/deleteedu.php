<?php include"corelib.php";?>
<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>

<?php 

if(isset($_GET['id'])){
	
	$id = $_GET['id'];
	
	$delete = "DELETE FROM tbl_education_info WHERE id ='$id' AND email = '$email'";
	
		$run = $db->delete($delete);
		if($run== true){
			header("Location:../education.php?delmsg=Data Delete Successfully.");
		}else{
			header("Location:../education.php?delerror=Something Went Wrong!!!");
		}
}
	

?>

