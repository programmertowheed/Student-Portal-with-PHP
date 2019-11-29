<?php
 if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>

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



<div class="procon">
<div class="maincontant"> 
	<div class="container conbg">
		<div class="row">
			<div class="column1 col-md-3">
				<div class="image">
					<img src="admin/upload/<?php echo $pic ;?>" alt="profilePhoto" data-toggle="modal" data-target="#exampleModalCenter">
				</div> 
				<div class="content">
					<a href="index.php"><i class="fas fa-user"></i>
						<?php
							$rquery = "SELECT * FROM tbl_signup_info WHERE email ='$email'";
							$rr = $db->select($rquery);
							while($resu = mysqli_fetch_assoc($rr)){
								echo $resu['nname'] ;	
							}
						?>
					</a>
				</div>
			</div> <!-- column1 col-md-4 -->


			<div class="column2 col-md-9">
			
			
					

<!-- Modal -->

<form action="corephp/changepic.php" method="post" enctype="multipart/form-data">
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
					
			
			
			
			