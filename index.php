<!-- Header -->
<?php include("header.php")?>

<!-- main menu -->
<?php include("nav.php")?>

<!-- slider image -->
<?php
if(!isset($_COOKIE['C_U'])){
	 include("slider.php");
}elseif(isset($_COOKIE['C_U'])){
	 include"profilepage.php";
}

?>

<?php include"footer.php";?>
	
