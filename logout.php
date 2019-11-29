<?php include"header.php";?>
<!-- main menu -->
<?php include("nav.php")?>

<?php 
		setcookie("C_U","",time()-(86400*7));
		header("Location: index.php");


?>




<?php include"footer.php";?>
	
