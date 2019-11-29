<?php
session_start();
include "../lib/config.php";
include "../lib/database.php";
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
			case "addstudent":
				echo "<title>Add Student :: Student Portal</title>";
				break;
			case "home":
				echo "<title>Home :: Student Portal</title>";
				break;
			case "studentlist":
				echo "<title>Student List :: Student Portal</title>";
				break;
			case "adminsignup":
				echo "<title>Add Admin :: Student Portal</title>";
				break;
			case "adminlist":
				echo "<title>Admin List :: Student Portal</title>";
				break;
			case "view":
				echo "<title>Student Profile View :: Student Portal</title>";
				break;
			case "adminview":
				echo "<title>Admin Profile View :: Student Portal</title>";
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
			case "adminedit":
				echo "<title>Admin info :: Student Portal</title>";
				break;
			case "editprofile":
				echo "<title>Personal info :: Student Portal</title>";
				break;
			case "adminaccount":
				echo "<title>Admin Account :: Student Portal</title>";
				break;
			case "adminprofile":
				echo "<title>Update Admin info :: Student Portal</title>";
				break;
			case "adminsetting":
				echo "<title>Admin Setting :: Student Portal</title>";
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

	
