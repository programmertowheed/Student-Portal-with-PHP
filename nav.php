 <?php
	 if(isset($_SERVER['SCRIPT_NAME'])){
		$apage = $_SERVER['SCRIPT_NAME'];
		$apage = basename($apage,".php");
	 }
?>
<!-- menu seection-->
<header class="menu_bg fixed-top"  id="datatarget">
	<div class="container ">
		<div class="main_menu col-sm-12 col-md-12" >
			<nav > 
				<ul>		
					 <li><a class="<?php if($apage==index){echo 'active';}?>" href="index.php">Home</a></li>
					<?php 
						if(!isset($_COOKIE['C_U'])){?>
							<li><a class="<?php if($apage==login){echo 'active';}?>" href='login.php'>Login</a></li>
							<li><a class="<?php if($apage==signup){echo 'active';}?>" href='signup.php'>Sign Up</a></li>
						<?php }elseif(isset($_COOKIE['C_U'])){?>
							<li><a class="<?php if($apage==profile||$apage==editprofile||$apage==guardian||$apage==presentadd||$apage==permanent||$apage==education){echo 'active';}?>" href='profile.php'>Update Profile</a></li>
							<li><a class="<?php if($apage==changepass){echo 'active';}?>" href='changepass.php'>Change Password</a></li>
							<li><a href='logout.php'>Log Out</a></li>
						<?php }?>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!-- menu seection end -->

<!-- Callopse Menu start -->
<div class="callopse-menu d-none sticky-top">	
	<nav>
	  <div class="menu-bars">
		<i class="fas fa-bars fa-2x"></i>
	  </div>
		  <ul>		
			 <li><a class="<?php if($apage==index){echo 'active';}?>" href="index.php">Home</a></li>
			<?php 
				if(!isset($_COOKIE['C_U'])){?>
					<li><a class="<?php if($apage==login){echo 'active';}?>" href='login.php'>Login</a></li>
					<li><a class="<?php if($apage==signup){echo 'active';}?>" href='signup.php'>Sign Up</a></li>
				<?php }elseif(isset($_COOKIE['C_U'])){?>
					<li><a class="<?php if($apage==profile){echo 'active';}?>" href='profile.php'>Update Profile</a></li>
					<li><a href='logout.php'>Log Out</a></li>
				<?php }?>
		</ul>
	</nav>
</div>

<!-- Callopse Menu End -->

	
