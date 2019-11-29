<!-- Header -->
<?php include("header.php")?>

<!-- main menu -->
<?php include("nav.php")?>

<!-- slider image -->
<?php
if(!isset($_COOKIE['C_U_A'])){
	 header("Location: index.php");
}elseif(isset($_COOKIE['C_U_A'])){
	 include"dashboard.php";
}

?>

<?php include"footer.php";?>
	
