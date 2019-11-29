<?php include"corelib.php";?>
<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>

<?php 

if(isset($_REQUEST['submit'])){
		$Degree         = htmlspecialchars(stripslashes(trim($_REQUEST['Degree'])));
		$Institute      = htmlspecialchars(stripslashes(trim($_REQUEST['Institute'])));
		$UniversityBoard= htmlspecialchars(stripslashes(trim($_REQUEST['UniversityBoard'])));
		$PassingYear    = htmlspecialchars(stripslashes(trim($_REQUEST['PassingYear'])));
		$GradeDevision  = htmlspecialchars(stripslashes(trim($_REQUEST['GradeDevision'])));
		$CGPA           = htmlspecialchars(stripslashes(trim($_REQUEST['CGPA'])));
		
		
		
	
			if( $Degree=="" || $Institute=="" || $UniversityBoard=="" || $PassingYear=="" || $GradeDevision=="" || $CGPA==""){
				header("Location:../education.php?error=Field Must Not Be Empty!!!");
			}elseif($Degree=="none"){
				$Degree = htmlspecialchars(stripslashes(trim($_REQUEST['opDegree'])));
				if( $Degree==""){
					header("Location:../education.php?error=Field Must Not Be Empty!!!");
				}else{
				
						$insert ="INSERT INTO tbl_education_info (Degree,Institute,UniversityBoard,PassingYear,GradeDevision,CGPA,email) VALUES('$Degree','$Institute','$UniversityBoard','$PassingYear','$GradeDevision','$CGPA','$email')";
						

						$run = $db->insert($insert);
						if($run== true){
							header("Location:../education.php?msg=Data Added Successfully");
						}else{
							header("Location:../education.php?error=Something Went Wrong");
						}
				}
			}else{
			
			
				$insert ="INSERT INTO tbl_education_info (Degree,Institute,UniversityBoard,PassingYear,GradeDevision,CGPA,email) VALUES('$Degree','$Institute','$UniversityBoard','$PassingYear','$GradeDevision','$CGPA','$email')";
				

				$run = $db->insert($insert);
				if($run== true){
					header("Location:../education.php?msg=Data Added Successfully");
				}else{
					header("Location:../education.php?error=Something Went Wrong");
				}
		
			}
	
		

}



?>
