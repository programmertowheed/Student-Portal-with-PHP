
<?php include"corelib.php";?>




<?php 

if(isset($_REQUEST['submit'])){
		$permited = array('jpg','jpeg','png','gif');
		$file_name  =$_FILES['image']['name'];
		$file_size  =$_FILES['image']['size'];
		$file_temp  =$_FILES['image']['tmp_name'];
		
		$div = explode('.', $file_name );
		$file_ext = strtolower(end($div));
		$unique_image = $email.'ad.'.$file_ext;
		$upload_image = "../upload/".$unique_image;
		
		if( $file_name=="" ){
			header("Location:../home.php?error=File Not Selected!!!");
		}elseif(!empty($file_name)){
				
				
				if(in_array($file_ext,$permited) === false){
					header("Location:../home.php?error=You can upload only: ".implode(', ',$permited));
				}else{
					move_uploaded_file($file_temp,$upload_image);

					$insert ="UPDATE tbl_admin 
						SET
							picture     = '$unique_image'
							WHERE adminEmail = '$email'
							";

					$run = $db->update($insert);
					if($run == false){
						header("Location:../home.php?error=Picture Not Updated!!");
					}else{
						header("Location:../home.php");
					}

				}
		}

}

?>