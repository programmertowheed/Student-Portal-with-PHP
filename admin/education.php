<!-- Header -->
<?php include("header.php")?>

<!-- main menu -->
<?php include("nav.php")?>
<?php
if(!isset($_COOKIE['C_U_A'])){
	 header("Location: index.php");
}
?>

<?php include"deshheader.php";?>




<?php
if(isset($_REQUEST['email'])){
		$email=$_REQUEST['email'];
	}?>

	
	
<div class="otersection">
	<div class="deshsec">
			
<h4 class="log-text text-center mb-4">Edit Education And Training</h4>


<?php if(isset($_GET['delmsg'])){
	$msg = $_GET['delmsg'];
	echo "<h4 class='text-success'>".$msg."</h4>";
}?>
<?php if(isset($_GET['delerror'])){
	$error = $_GET['delerror'];
	echo "<h4 class='text-danger'>".$error."</h4>";
}?>




<div class="table-responsive">
	<table class="table table-striped table-hover">
	  <thead class="thead-dark">
		<tr>
		  <th scope="col">Degree</th>
		  <th scope="col">Institute</th>
		  <th scope="col">University/Board</th>
		  <th scope="col">Passing Year</th>
		  <th scope="col">Grade/Class/Devision</th>
		  <th scope="col">Marks/CGPA</th>
		  <th scope="col">Action</th>
		</tr>
	  </thead>
	  <tbody>
 <?php
	$query = "SELECT * FROM tbl_education_info WHERE email ='$email'";
	$red = $db->select($query);
	if($red==false){?>
	
	<td colspan="7"><h4>No Data Found</h4></td>

			
	<?php }else{
		while($resu = mysqli_fetch_assoc($red)){
			$id=$resu['id']; ?>	
		<tr>
		  <td><?php echo $resu['Degree'] ;?></td>
		  <td><?php echo $resu['Institute'] ;?></td>
		  <td><?php echo $resu['UniversityBoard'] ;?></td>
		  <td><?php echo $resu['PassingYear'] ;?></td>
		  <td><?php echo $resu['GradeDevision'] ;?></td>
		  <td><?php echo $resu['CGPA'] ;?></td>
		  <td><a href="corephp/deleteedu.php?id=<?php echo $resu['id'];?>&email=<?php echo $email;?>" onclick="return confirm('Are you sure you want to Delete?');" class="btn btn-danger">Delete</a>
		  </td>
		</tr>
	<?php }}?>
		
	  </tbody>
	</table>
</div>

<!--  data-toggle="modal" data-target="#exampleModalCenter"-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="corephp/deleteedu.php?id=<?php echo $id;?>" type="button" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

















<!-- Add Education -->

<div class="mt-5">
<h4 class="log-text text-center mb-4">Add Education/Training</h4>
<div class="container"> 
	<div class="from-inner eidtpage"> 
		<form action="corephp/addeducation.php?email=<?php echo $email;?>" method="post">
		
		
		<?php if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "<h4 class='text-success'>".$msg."</h4>";
		}?>
		<?php if(isset($_GET['error'])){
			$error = $_GET['error'];
			echo "<h4 class='text-danger'>".$error."</h4>";
		}?>
		
		  <div class="form-row">
			<div class="form-group col-md-12">
			  <label for="Degree"><i class="fas fa-pencil-alt mr-2"></i>Degree<span class="requerd">*</span></label>
			  
			  <select id="inputState" class="form-control" name="Degree">
				<option selected value="none">----Select Degree----</option>
				<option  value="A-Level">A-Level</option>
				<option  value="Advanced Diploma">Advanced Diploma</option>
				<option  value="Alim">Alim</option>
				<option  value="B A(Pass)">B A(Pass)</option>
				<option  value="B.A">B.A</option>
				<option  value="B.A(Honors)">B.A(Honors)</option>
				<option  value="B.B.A">B.B.A</option>
				<option  value="B.Com">B.Com</option>
				<option  value="B.Com(Honors)">B.Com(Honors)</option>
				<option  value="B.Ed">B.Ed</option>
				<option  value="B.Pharm">B.Pharm</option>
				<option  value="B.S">B.S</option>
				<option  value="B.S.S">B.S.S</option>
				<option  value="B.Sc">B.Sc</option>
				<option  value="B.Sc(Honors)">B.Sc(Honors)</option>
				<option  value="B.Sc Eng(Computer)">B.Sc Eng(Computer)</option>
				<option  value="B.Sc in CSE">B.Sc in CSE</option>
				<option  value="B.Sc in EEE">B.Sc in EEE</option>
				<option  value="B.Sc in ETE">B.Sc in ETE</option>
				<option  value="BSS(Honors)">BSS(Honors)</option>
				<option  value="B.Sc Eng(Civil)">B.Sc Eng(Civil)</option>
				<option  value="B.Sc Eng(Textile)">B.Sc Eng(Textile)</option>
				<option  value="C.M.A">C.M.A</option>
				<option  value="Dhakhil">Dhakhil</option>
				<option  value="Diploma">Diploma</option>
				<option  value="F.C.P.S">F.C.P.S</option>
				<option  value="H.S.C">H.S.C</option>
				<option  value="J.S.C">J.S.C</option>
				<option  value="LL.B">LL.B</option>
				<option  value="LL.M">LL.M</option>
				<option  value="M. Pharm">M. Pharm</option>
				<option  value="M.A. Preliminary">M.A. Preliminary</option>
				<option  value="M.A">M.A</option>
				<option  value="M.B.A">M.B.A</option>
				<option  value="M.B.B.S">M.B.B.S</option>
				<option  value="M.Com">M.Com</option>
				<option  value="M.Ed">M.Ed</option>
				<option  value="M.Phil">M.Phil</option>
				<option  value="M.S">M.S</option>
				<option  value="M.S.S">M.S.S</option>
				<option  value="M.Sc">M.Sc</option>
				<option  value="O-Level">O-Level</option>
				<option  value="P.G.D">P.G.D</option>
				<option  value="Ph.D">Ph.D</option>
				<option  value="S.S.C">S.S.C</option>
			  </select>
			  <input type="text" class="form-control mt-1" id="opDegree" name="opDegree" placeholder="Optional">
			</div>
			<div class="form-group col-md-12">
			  <label for="Institute"><i class="fas fa-pencil-alt mr-2"></i>Institute<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="Institute" name="Institute" placeholder="Institute">
			</div>
		  </div>
		  
		  <div class="form-row">
			<div class="form-group col-md-12">
			  <label for="UniversityBoard"><i class="fas fa-pencil-alt mr-2"></i>University/Board<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="UniversityBoard" name="UniversityBoard" placeholder="University/Board">
			</div>
			<div class="form-group col-md-12">
			  <label for="PassingYear"><i class="fas fa-pencil-alt mr-2"></i>Passing Year<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="PassingYear" name="PassingYear" placeholder="Passing Year">
			</div>
		  </div>
		  <div class="form-row">
			<div class="form-group col-md-12">
			  <label for="GradeDevision"><i class="fas fa-pencil-alt mr-2"></i>Grade/Class/Devision<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="GradeDevision" name="GradeDevision" placeholder="Grade/Class/Devision">
			</div>
			<div class="form-group col-md-12">
			  <label for="CGPA"><i class="fas fa-pencil-alt mr-2"></i>Marks/CGPA<span class="requerd">*</span></label>
			  <input type="text" class="form-control" id="CGPA" name="CGPA" placeholder="Marks/CGPA">
			</div>
		  </div>
		  
		  <div class="text-center">
			<button type="submit" class="btn tomato col-6 mt-3" name="submit">Add</button>
		  </div>
		</form>
		
		
		
		
	</div>
</div>
</div>






			</div> 
		</div>
	</div>
</div>





<?php include"deshfooter.php";?>
 <?php include"footer.php";?>