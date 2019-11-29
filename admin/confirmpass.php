<?php include"header.php";?>
<!-- main menu -->
<?php include("nav.php")?>
<?php
if(isset($_COOKIE['C_U_A'])){
	header("Location: home.php");
}?>


<div class="fbgpic">
<div class="container"> 
	<div class="lfrom-inner"> 
	
	
<?php
	if(isset($_REQUEST['resend'])){
		echo "<h4 class='text-success'>".$_REQUEST['resend']."</h4>";
	}

	if(isset($_REQUEST['wrong'])){
		echo "<h4 class='text-danger'>".$_REQUEST['wrong']."</h4>";
	}

	
	if(isset($_REQUEST['email'])){
		$email=$_REQUEST['email'];
	}

	
?>
<?php

if(isset($_REQUEST['submit'])){
	
	$code = htmlspecialchars(stripslashes(trim($_REQUEST['code'])));
	if($code==""){
		$db->error ="Feild Must Not Be Empty!!";
		//header("Location:confirmpass.php?email=$email&wrong=Feild Must Not Be Empty!!");
	}else{
		$userinfo ="SELECT randnum FROM tbl_admin WHERE adminEmail='$email'";
	
		$result = $db->select($userinfo);
		while($resu = mysqli_fetch_assoc($result)){
				$randnum = $resu['randnum'] ;
			}
			if($randnum==$code ){
				
				setcookie("r_n_c_a","$randnum",time()+(86400));
				header("Location:changerequest.php?email=$email");
			}else{
				$db->error ="Invalid Code";
				//header("Location:confirmpass.php?email=$email&wrong=Invalid Code");
			}
	}
	
}




?>


	<h4 class="text-success"><?php echo $db->msg;?></h4>
	<h4 class="text-danger"><?php echo $db->error;?></h4>	
	<h5>Check your email and enter the code</h5>
	<a href="corephp/resentpass.php?email=<?php echo $email?>" name="resend" class="btn btn-info mt-0">Resend</a><br /><br />


<form action="" method="post">
  <div class="form-group">
	  <label for="code"></i>Enter Code</label>
	  <input type="text" class="form-control" id="code" name="code" placeholder="Enter Code">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary mt-3">Ok</button>
</form>



	</div>
</div>
</div>

<?php include"footer.php";?>