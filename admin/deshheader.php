<?php
	 if(isset($_SERVER['SCRIPT_NAME'])){
		$apage = $_SERVER['SCRIPT_NAME'];
		$apage = basename($apage,".php");
	 }
?>


<?php
 if(!isset($_COOKIE['C_U_A'])){
	header("Location: index.php");
}?>

<?php
if(isset($_COOKIE["C_U_A"])){
$target = $_COOKIE["C_U_A"];
$query = "SELECT * FROM tbl_admin WHERE auth ='$target'";
$red = $db->select($query);	
	while($res = mysqli_fetch_assoc($red)){
		$email = $res['adminEmail'] ;
		$pic   = $res['picture'] ;
		$role  = $res['role'] ;
	}
}
?>



<div class="procon">
	<div class="maincontant"> 
		<div class=" conbg">
			<div class="cover">
				<div class="leftside ">
				
					<div class="deshmenu">
						<ul class="nav flex-column">
						
						  <li class="nav-item">
							<a class="nav-link <?php if($apage==home ){echo 'active';}?>" href="home.php"><span class="navicon"><i class="fas fa-tachometer-alt mr-2"></i></span>Deshboard</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link <?php if($apage==addstudent){echo 'active';}?>" href="addstudent.php"><span class="navicon"><i class="fas fa-user mr-2"></i></span>Add Student</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link <?php if($apage==studentlist or $apage==view or $apage==editprofile or $apage==guardian or $apage==presentadd or $apage==permanent or $apage==education){echo 'active';}?>" href="studentlist.php"><span class="navicon"><i class="fas fa-users mr-2"></i></span>Student List</a>
						  </li>
						  <?php if($role=='Authority'){?>
							  <li class="nav-item">
								<a class="nav-link <?php if($apage==adminsignup){echo 'active';}?>" href="adminsignup.php"><span class="navicon"><i class="fas fa-user mr-2"></i></span>Add Admin</a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link <?php if($apage==adminlist or $apage==adminview or $apage==adminedit){echo 'active';}?>" href="adminlist.php"><span class="navicon"><i class="fas fa-users mr-2"></i></span>Admin List</a>
							  </li>
						  <?php }?>
						</ul>
					</div>
				
				
				</div> <!-- column1 col-md-3 -->
			
				<div class="rightside ">
				
			
					

		
					
			
			
			
				