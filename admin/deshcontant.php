
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
		$role  = $res['role'] ;
	}
}
?>



<!-- Personal  Info -->
<?php if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "<h4 class='text-success'>".$msg."</h4>";
}?>
<?php if(isset($_GET['error'])){
	$error = $_GET['error'];
	echo "<h4 class='text-danger'>".$error."</h4>";
}?>


<div class="top">
	<div class="row">
		<div class="col">
			<button type="button" class="btn btn-primary m-2">
			  Student <span class="badge badge-light">
			  <?php
				$query = "SELECT * FROM tbl_user";
				$red = $db->select($query);
					if($red){
						$count = mysqli_num_rows($red);
						echo $count;
					}else{
						echo 0;
					}
			  ?>
			  </span>
			</button>
			<?php if($role=='Authority'){?>
				<button type="button" class="btn btn-primary m-2">
				  Authority <span class="badge badge-light">
					<?php
					$query = "SELECT * FROM tbl_admin WHERE role='Authority'";
					$red = $db->select($query);
						if($red){
							$count = mysqli_num_rows($red);
							echo $count;
						}else{
							echo 0;
						}
					?>
				  </span>
				</button>
			<?php }?>
			<button type="button" class="btn btn-primary m-2">
			  Admin <span class="badge badge-light">
				<?php
				$query = "SELECT * FROM tbl_admin WHERE role='Admin'";
				$red = $db->select($query);
					if($red){
						$count = mysqli_num_rows($red);
						echo $count;
					}else{
						echo 0;
					}
				?>
			  </span>
			</button>
		
		    <nav class="navbar">
			  <form action="" method="post" class="form-inline">
				<input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-primary my-2 my-sm-0" name="submit" type="submit">Search</button>
			  </form>
			</nav>
		</div>
	</div>	   
</div>




<?php 
$db = new database();
if(isset($_REQUEST['submit'])){
		$search   = htmlspecialchars(stripslashes(trim($_REQUEST['search'])));
		if($search==''){
			
		}else{?>
		
			<div class="otersection">
				<div class="deshsec">
					<div class="table-responsive">
						<table class="table table-striped table-hover">
						  <thead class="thead-dark">
							<tr>
							  <th scope="col">SL. NO</th>
							  <th scope="col">Name</th>
							  <th scope="col">Email</th>
							  <th scope="col">Student ID</th>
							  <th scope="col">Department</th>
							  <th scope="col">Action</th>
							</tr>
						  </thead>
						  <tbody>
					 <?php
						$query = "SELECT * FROM tbl_signup_info WHERE 
							fname LIKE '%$search%' or 
							lname LIKE '%$search%' or 
							nname LIKE '%$search%' or 
							birthdate = '$search' or
							gender    = '$search' or
							mstatus   = '$search' or
							blood     = '$search' or
							nationality LIKE '%$search%' or
							religion  = '$search' or
							StudentID = '$search' or
							Department= '$search' or
							mobile LIKE '%$search%' or
							email = '$search'
						";
						$red = $db->select($query);
						$i=1;
						if($red==false){?>
			
						<td colspan="7"><h4>No Data Found</h4></td>

								
						<?php }else{
						while($resu = mysqli_fetch_assoc($red)){?>
							<tr>
							  <td><?php echo $i++ ;?></td>
							  <td><?php echo $resu['fname'].' '.$resu['lname'] ;?></td>
							  <td><?php echo $resu['email'] ;?></td>
							  <td><?php echo $resu['StudentID'] ;?></td>
							  <td><?php echo $resu['Department'] ;?></td>
							  <td>
							  <a href="view.php?email=<?php echo $resu['email'];?>" class="btn btn-success">View
							  </a>
							  <a href="?id=<?php echo $resu['id'];?>" onclick="return confirm('Are you sure you want to Delete?');" class="btn btn-danger">Delete
							  </a>
							  </td>
							</tr>
						<?php } }?>
							
						  </tbody>
						</table>
					</div>
				</div>
			</div> 


<?php } }  ?>










 				  




