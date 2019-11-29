<?php
session_start();
include "../lib/config.php";
include "../lib/database.php";

?>
<?php
	 if(isset($_SERVER['SCRIPT_NAME'])){
		$title = $_SERVER['SCRIPT_NAME'];
		$title = basename($title,".php");
		switch ($title) {
		case "index":
				echo "<title>Admin Log In :: Student Portal</title>";
				break;
			
			default:
				echo "<title>Student Portal</title>";
		}
	 }else{
		 
	 }
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<!--<title>Student Portal</title>-->
	
	<!-- Favicon -->
    <link href="image/favicon.ico" rel="shortcut icon" >
    <link href="image/favicon.png" rel="icon" type="image/png">
	
	
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
<?php
if(isset($_COOKIE['C_U_A'])){
	header("Location: home.php");
}

?>
<?php
$db = new database();
if(isset($_REQUEST['submit'])){
		$email     = htmlspecialchars(stripslashes(trim($_REQUEST['email'])));
		$password  = htmlspecialchars(stripslashes(trim($_REQUEST['password'])));
		
		if($email=="" or $password==""){
			header("Location: index.php?wrong=Feild Must Not Be Empty!!");
		}else{
		$useremail = md5(sha1($email));
		$userpass  = md5(sha1($password));
		$auth      = md5(sha1($userpass.$useremail));
		
		$userinfo ="SELECT * FROM tbl_admin WHERE adminEmail='$email' && adminPass='$userpass' && auth='$auth' ";
	
		$result = $db->select($userinfo);
		if($result){
			setcookie("C_U_A","$auth",time()+(86400*7));
			header("Location: home.php");
		}else{
			header("Location: index.php?wrong=Incorrect Email or Password");
		}
	}

}

?>

<div class="lbgpic">
<div class="container"> 
	<div class="lfrom-inner"> 
		<form action="" method="post">
		<?php
			if(isset($_REQUEST['wrong'])){
				echo "<h4 class='text-danger'>".$_REQUEST['wrong']."</h4>";
			}
		?>
			<h4 class="log-text text-center mb-4">Admin Log In</h4>
		  <div class="form-group">
			<label for="email"><i class="fas fa-envelope mr-2"></i>Email address</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
		  </div>
		  <div class="form-group">
			<label for="password"><i class="fas fa-key mr-2"></i>Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		  </div>
		  <div class="text-center">
			<button type="submit" class="btn col-6 mt-3 tomato" name="submit" >Log in</button>
		  </div>
		  <div class="form-group fgbutton mt-3 mb-0">
			<a class="" href="forgetpass.php">Forget Password?</a>
		  </div>
		</form>
	</div>
</div>
</div>









<!-- JQuery file-->
	<script src="js/JQuery.js" type="text/javascript"></script>
	
	<!-- JQuery-confirm file-->
	<script src="js/jquery-confirm.min.js" type="text/javascript"></script>
	
	<!-- fontawesome file-->
	<script src="js/fontawesome-all.min.js" type="text/javascript"></script>
	
	<!-- bootstrap file-->
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- coustom.js file-->
	<script src="js/coustom.js" type="text/javascript"></script>
</body>	
</html>