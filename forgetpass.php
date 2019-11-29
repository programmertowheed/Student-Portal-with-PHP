<?php include"header.php";?>
<!-- main menu -->
<?php include("nav.php")?>
<?php
if(isset($_COOKIE['C_U'])){
	header("Location: profile.php");
}?>


<div class="fbgpic">
<div class="container"> 
	<div class="lfrom-inner"> 	
		<form action="corephp/resetpass.php" method="post">
		<?php
			if(isset($_REQUEST['wrong'])){
				echo "<h4 class='text-danger'>".$_REQUEST['wrong']."</h4>";
			}
		?>
		  <div class="form-group">
			<label for="email"><i class="fas fa-envelope mr-2"></i>Email address</label>
			<input type="email" class="form-control" name="email" id="email" placeholder="Enter address">
		  </div>
		  <div class="form-group">
			  <label for="mobile"><i class="fas fa-mobile-alt mr-2"></i>Mobile</label>
			  <input type="text" class="form-control" name="mobile" id="mobile" placeholder="+88 01XXX-XXXXXX">
		  </div>
		  <button type="submit" class="btn btn-primary mt-3" name="esubmit">Submit</button>
		</form>
		
		
		
		
	</div>
</div>
</div>

<?php include"footer.php";?>
	
