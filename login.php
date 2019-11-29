<?php include"header.php";?>
<!-- main menu -->
<?php include("nav.php")?>
<?php
if(isset($_COOKIE['C_U'])){
	header("Location: profile.php");
}

?>
<?php
$db = new database();
if(isset($_REQUEST['submit'])){
		$email     = htmlspecialchars(stripslashes(trim($_REQUEST['email'])));
		$password  = htmlspecialchars(stripslashes(trim($_REQUEST['password'])));
		
		if($email=="" or $password==""){
			header("Location: login.php?wrong=Feild Must Not Be Empty!!");
		}else{
		$useremail = md5(sha1($email));
		$userpass  = md5(sha1($password));
		$auth      = md5(sha1($userpass.$useremail));
		
		$userinfo ="SELECT * FROM tbl_user WHERE userEmail='$email' && userPass='$userpass' && auth='$auth' ";
	
		$result = $db->select($userinfo);
		if($result){
			setcookie("C_U","$auth",time()+(86400*7));
			header("Location: index.php");
		}else{
			header("Location: login.php?wrong=Incorrect Email or Password");
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
			<h4 class="log-text text-center mb-4">Log In</h4>
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
			<a class="" href="signup.php">Create account?</a>
			<a class="float-right" href="forgetpass.php">Forget Password?</a>
		  </div>
		</form>
	</div>
</div>
</div>

<?php include"footer.php";?>
	
