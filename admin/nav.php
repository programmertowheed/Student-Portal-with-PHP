 
 <?php
	 if(isset($_SERVER['SCRIPT_NAME'])){
		$apage = $_SERVER['SCRIPT_NAME'];
		$apage = basename($apage,".php");
	 }
?>


<?php
if(isset($_COOKIE["C_U_A"])){
$target = $_COOKIE["C_U_A"];
$query = "SELECT * FROM tbl_admin WHERE auth ='$target'";
$red = $db->select($query);	
	if($red){
		while($res = mysqli_fetch_assoc($red)){
			$email = $res['adminEmail'] ;
			$pic = $res['picture'] ;
		}
	}

}
?>
<!-- Callopse Menu start -->
<div class="callopse-menu sticky-top">
	<nav>
		<div class="admin">
			<?php 
				if(isset($_COOKIE['C_U_A'])){?>
			<span class=" dashboard">
				<a class="btn "href="home.php">Dashboard</a>
			</span>
			<span class="float-right">
			<img src="upload/<?php echo $pic ;?>" alt="profilePhoto" data-toggle="modal" data-target="#exampleModalCenter" />
			<!--<i class="fas fa-user mr-2"></i>-->
			
				<?php
					$rquery = "SELECT * FROM tbl_admin_info WHERE email ='$email'";
					$rr = $db->select($rquery);
					if($rr){
						while($resu = mysqli_fetch_assoc($rr)){
							echo $resu['nname'] ;	
						}
					}
				?>
				
				
			
			</span>
				<?php }?>
			<div class="menu-bars">
				<i class="fas fa-bars fa-2x"></i>
			</div>
		</div>
		
		  <ul>		
					 
			<?php 
				if(!isset($_COOKIE['C_U_A'])){?>
					<li class="<?php if($apage==index){echo 'active';}?>"><a  href="index.php">Log In</a></li>
				<?php }elseif(isset($_COOKIE['C_U_A'])){?>
					<li class="<?php if($apage==adminaccount){echo 'active';}?>"><a  href="adminaccount.php">Account</a></li>
					<li class="<?php if($apage==adminprofile){echo 'active';}?>"><a  href='adminprofile.php'>Update Profile</a></li>
					<li class="<?php if($apage==adminsetting){echo 'active';}?>"><a  href='adminsetting.php'>Setting</a></li>
					<li><a href='logout.php'>Log Out</a></li>
				<?php }?>
		</ul>
	</nav>
</div>

<!-- Callopse Menu End -->

	
<!-- Modal -->

<form action="corephp/profilepic.php" method="post" enctype="multipart/form-data">
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Choose profile picture</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
		  
		
				<input type="file" name="image" />
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>			
</form>	