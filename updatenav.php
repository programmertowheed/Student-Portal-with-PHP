<?php
 if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>

<?php
	 if(isset($_SERVER['SCRIPT_NAME'])){
		$active = $_SERVER['SCRIPT_NAME'];
		$active = basename($active,".php");
	 }
?> 

<div class="maincon">
	<div class="container"> 
		<ul class="nav nav-tabs">
		  <li class="nav-item">
			<a class="nav-link <?php if($active==editprofile || $active==profile){echo "active";}?>" href="editprofile.php">Personal Info</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?php if($active==guardian){echo "active";}?>" href="guardian.php">Guardian  Info</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?php if($active==presentadd){echo "active";}?>" href="presentadd.php">Present Address</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?php if($active==permanent){echo "active";}?>" href="permanent.php">Permanent Address</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link <?php if($active==education){echo "active";}?>" href="education.php">Education and Training</a>
		  </li>
		</ul>
	</div>
</div>

<?php
if(isset($_COOKIE["C_U"])){
$target = $_COOKIE["C_U"];
$query = "SELECT * FROM tbl_user WHERE auth ='$target'";
$red = $db->select($query);	
	while($res = mysqli_fetch_assoc($red)){
		$email = $res['userEmail'] ;
		$pic = $res['picture'] ;
	}
}
?>
