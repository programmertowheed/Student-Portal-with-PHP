<?php
session_start();
include "lib/config.php";
include "lib/database.php";
include "lib/tbl_query.php";

$db = new database();

?>



	
	

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<!--<title>Student Portal</title>-->
	
	 <?php
	 if(isset($_SERVER['SCRIPT_NAME'])){
		$title = $_SERVER['SCRIPT_NAME'];
		$title = basename($title,".php");
		switch ($title) {
			case "profile":
				echo "<title>Profile :: Student Portal</title>";
				break;
			case "index":
				echo "<title>Home :: Student Portal</title>";
				break;
			case "signup":
				echo "<title>Sign Up :: Student Portal</title>";
				break;
			case "login":
				echo "<title>Log In :: Student Portal</title>";
				break;
			case "forgetpass":
				echo "<title>Forget-Password :: Student Portal</title>";
				break;
			case "profile":
				echo "<title>Profile :: Student Portal</title>";
				break;
			case "editprofile":
				echo "<title>Personal Info :: Student Portal</title>";
				break;
			case "guardian":
				echo "<title>Guardian Info :: Student Portal</title>";
				break;
			case "presentadd":
				echo "<title>Present Address :: Student Portal</title>";
				break;
			case "permanent":
				echo "<title>Permanent Address :: Student Portal</title>";
				break;
			case "education":
				echo "<title>Education and Training :: Student Portal</title>";
				break;
			case "changepass":
				echo "<title>Change Password :: Student Portal</title>";
				break;
			
			default:
				echo "<title>Student Portal</title>";
		}
	 }else{
		 echo "<title>Student Portal</title>";
	 }
		?> 
	
	<!-- Favicon -->
    <link href="images/favicon.ico" rel="shortcut icon" >
    <link href="images/favicon.png" rel="icon" type="image/png">
	
	
	<!-- bootstrap stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	
	<!-- fontawesome stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css" media="all" />
	
	<!-- jquery-confirm stylesheet-->
	<link rel="stylesheet" type="text/css" href="css/jquery-confirm.min.css" media="all" />
	
	
	<!-- coustom stylesheet-->
	<link rel="stylesheet" href="css/style.css" />
	

	<!-- coustom profilepage stylesheet-->
	<link rel="stylesheet" href="css/new.css">
	
	
</head>
<body>

	
