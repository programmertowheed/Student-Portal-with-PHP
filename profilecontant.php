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
		   <h3>Personal Info</h3>
		</div>
	</div>	   
</div>
					  
<?php
	$query = "SELECT * FROM tbl_signup_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>
			
	
<div class="section">
   
	<div class="secdiv">
		 <label for="firstName"><strong>First Name :</strong></label>
		<span><?php echo $resu['fname'] ;?></span>

	</div>

	<div class="secdiv">
		 <label for="lastName"><strong>Last Name :</strong></label>
		<span><?php echo $resu['lname'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="nickname"><strong>Nick Name :</strong></label>
		 <span><?php echo $resu['nname'] ;?></span>

	</div>

	<div class="secdiv">
		 <label for="BirthDate"><strong>Birth Date :</strong></label>
		 <span><?php echo $resu['birthdate'] ;?></span>

	</div>

	<div class="secdiv">
		 <label for="Gender"><strong>Gender :</strong></label>
		 <span><?php echo $resu['gender'] ;?></span>
	</div>
	<div class="secdiv">
		 <label for="MaritalStatus"><strong>Marital Status :</strong></label>
		 <span><?php echo $resu['mstatus'] ;?></span>

	</div>
	
	<div class="secdiv">
		 <label for="BloodGroup"><strong>Blood Group :</strong></label>
		 <span><?php echo $resu['blood'] ;?></span>

	</div>
	
	<div class="secdiv">
		 <label for="Nationality"><strong>Nationality :</strong></label>
		 <span><?php echo $resu['nationality'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="Religion"><strong>Religion :</strong></label>
		<span><?php echo $resu['religion'] ;?></span>

	</div>
	
	<div class="secdiv">
		 <label for="StudentID"><strong>Student ID :</strong></label>
		<span><?php echo $resu['StudentID'] ;?></span>

	</div>
	
	<div class="secdiv">
		 <label for="Department"><strong>Department :</strong></label>
		<span><?php echo $resu['Department'] ;?></span>

	</div>

	
	<div class="secdiv">
		 <label for="Mobile"><strong>Mobile No :</strong></label>
		<span><?php echo $resu['mobile'] ;?></span>

	</div>

	<div class="secdiv">
		 <label for="Email"><strong>Email :</strong></label>
		<span><?php echo $resu['email'] ;?></span>

	</div>
</div> 
<?php }?>





 
<!-- Guardian  Info -->
<div class="top">
	<div class="row">
		<div class="col">
		   <h3>Guardian  Info</h3>
		</div>
	</div>	   
</div>

<?php
	$query = "SELECT * FROM tbl_guardian_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>



<div class="section">
	<div class="secdiv">
		 <label for="fatherName"><strong>Father's Name :</strong></label>
		<span><?php echo $resu['father_name'] ;?></span>

	</div>

	 <div class="secdiv">
		 <label for="fatherContact"><strong>Father's Contact No :</strong></label>
		<span><?php echo $resu['FatherMobile'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="fatherOccupation"><strong>Father's Occupation :</strong></label>
		 <span><?php echo $resu['FatherOccupation'] ;?></span>

	</div>

	  <div class="secdiv">
		 <label for="fatherDesignation"><strong>Father's Designation :</strong></label>
		 <span><?php echo $resu['FatherDesignation'] ;?></span>
	 </div>
	 
	 <div class="secdiv">
		 <label for="motherName"><strong>Mother's Name :</strong></label>
		<span><?php echo $resu['mother_name'] ;?></span>

	</div>

	 <div class="secdiv">
		 <label for="motherContact"><strong>Mother's Contact No :</strong></label>
		<span><?php echo $resu['MotherMobile'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="motherOccupation"><strong>Mother's Occupation :</strong></label>
		 <span><?php echo $resu['MotherOccupation'] ;?></span>

	</div>

	  <div class="secdiv">
		 <label for="motherDesignation"><strong>Mother's Designation :</strong></label>
		 <span><?php echo $resu['MotherDesignation'] ;?></span>
	 </div>
	  

	  <div class="secdiv">
		 <label for="localGuardin"><strong>Local Guardian's Name :</strong></label>
		 <span><?php echo $resu['LocalGuardianName'] ;?></span>

	</div>
	  <div class="secdiv">
		 <label for="lContact"><strong>Local Guardian's Contact No :</strong></label>
		 <span><?php echo $resu['LocalGuardianContact'] ;?></span>

	</div>
	  <div class="secdiv">
		 <label for="RWL"><strong>Relation with Local Guardian :</strong></label>
		 <span><?php echo $resu['RelationwithLocalGuardian'] ;?></span>

	</div>
	  <div class="secdiv">
		 <label for="localGuardianAddress"><strong>Local Guardian's Address :</strong></label>
		<span><?php echo $resu['LocalGuardianAddress'] ;?></span>
	</div>
</div>
<?php }?>





<!-- Present Address -->
<div class="top">
	<div class="row">
		<div class="col">
		   <h3>Present Address</h3>
		</div>
	</div>	   
</div>



<?php
	$query = "SELECT * FROM tbl_present_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>
	
	
<div class="section">
	<div class="secdiv">
		 <label for="PAddress"><strong>Address :</strong></label>
		<span><?php echo $resu['PAddress'] ;?></span>

	</div>

	 <div class="secdiv">
		 <label for="PPostOffice"><strong>Post Office :</strong></label>
		<span><?php echo $resu['PPostOffice'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="PPoliceStation"><strong>Police Station :</strong></label>
		 <span><?php echo $resu['PPoliceStation'] ;?></span>

	</div>

	  <div class="secdiv">
		 <label for="PDistrictCity"><strong>District/City :</strong></label>
		 <span><?php echo $resu['PDistrictCity'] ;?></span>
	 </div>
	 
	 <div class="secdiv">
		 <label for="PDivisionState"><strong>Division/State :</strong></label>
		<span><?php echo $resu['PDivisionState'] ;?></span>

	</div>

	 <div class="secdiv">
		 <label for="PCountry"><strong>Country :</strong></label>
		<span><?php echo $resu['PCountry'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="PZipCode"><strong>Zip Code :</strong></label>
		 <span><?php echo $resu['PZipCode'] ;?></span>

	</div>

	  <div class="secdiv">
		 <label for="PHostelAddress"><strong>Hostel Address :</strong></label>
		 <span><?php echo $resu['PHostelAddress'] ;?></span>
	 </div>
	  

	  <div class="secdiv">
		 <label for="PMessAddress"><strong>Mess Address :</strong></label>
		 <span><?php echo $resu['PMessAddress'] ;?></span>

	</div>
	  <div class="secdiv">
		 <label for="POtherAddress"><strong>Other Address :</strong></label>
		 <span><?php echo $resu['POtherAddress'] ;?></span>

	</div>
	  
</div>
<?php }?>


<!-- Permanent Address -->
<div class="top">
	<div class="row">
		<div class="col">
		   <h3>Permanent Address</h3>
		</div>
	</div>	   
</div>

<?php
	$query = "SELECT * FROM tbl_permanent_info WHERE email ='$email'";
	$red = $db->select($query);
	while($resu = mysqli_fetch_assoc($red)){?>
	
	
	
<div class="section">
	<div class="secdiv">
		 <label for="Address"><strong>Address :</strong></label>
		<span><?php echo $resu['Address'] ;?></span>

	</div>

	 <div class="secdiv">
		 <label for="PostOffice"><strong>Post Office :</strong></label>
		<span><?php echo $resu['PostOffice'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="PoliceStation"><strong>Police Station :</strong></label>
		 <span><?php echo $resu['PoliceStation'] ;?></span>

	</div>

	  <div class="secdiv">
		 <label for="DistrictCity"><strong>District/City :</strong></label>
		 <span><?php echo $resu['DistrictCity'] ;?></span>
	 </div>
	 
	 <div class="secdiv">
		 <label for="DivisionState"><strong>Division/State :</strong></label>
		<span><?php echo $resu['DivisionState'] ;?></span>

	</div>

	 <div class="secdiv">
		 <label for="Country"><strong>Country :</strong></label>
		<span><?php echo $resu['Country'] ;?></span>

	</div>
	<div class="secdiv">
		 <label for="ZipCode"><strong>Zip Code :</strong></label>
		 <span><?php echo $resu['ZipCode'] ;?></span>

	</div>
	  
</div>
<?php }?>


<!-- Education -->
<div class="top">
	<div class="row">
		<div class="col">
		   <h3>Education and Training</h3>
		</div>
	</div>	   
</div>
	
<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Degree</th>
      <th scope="col">Institute</th>
      <th scope="col">University/Board</th>
      <th scope="col">Passing Year</th>
      <th scope="col">Grade/Class/Devision</th>
      <th scope="col">Marks/CGPA</th>
    </tr>
  </thead>
  <tbody>
  
 <?php
	$query = "SELECT * FROM tbl_education_info WHERE email ='$email'";
	$red = $db->select($query);
	if($red==false){?>
	
	<td colspan="6"><h4>No Data Found</h4></td>
	
			
	<?php }else{
		while($resu = mysqli_fetch_assoc($red)){?>	
		<tr>
		  <td><?php echo $resu['Degree'] ;?></td>
		  <td><?php echo $resu['Institute'] ;?></td>
		  <td><?php echo $resu['UniversityBoard'] ;?></td>
		  <td><?php echo $resu['PassingYear'] ;?></td>
		  <td><?php echo $resu['GradeDevision'] ;?></td>
		  <td><?php echo $resu['CGPA'] ;?></td>
		</tr>
	<?php }}?>	
  </tbody>
</table>
