
<?php include"corelib.php";?>

<?php
if(!isset($_COOKIE['C_U'])){
	header("Location: index.php");
}?>


<?php 

if(isset($_REQUEST['submit'])){
		$permited = array('jpg','jpeg','png','gif');
		$file_name  =$_FILES['image']['name'];
		$file_size  =$_FILES['image']['size'];
		$file_temp  =$_FILES['image']['tmp_name'];
		
		$div = explode('.', $file_name );
		$file_ext = strtolower(end($div));
		$unique_image = $email.'.'.$file_ext;
		$upload_image = "../admin/upload/".$unique_image;
		
		if( $file_name=="" ){
			header("Location:../index.php?error=File Not Selected!!!");
		}elseif(!empty($file_name)){
				
				
				if(in_array($file_ext,$permited) === false){
					header("Location:../index.php?error=You can upload only: ".implode(', ',$permited));
				}else{
					move_uploaded_file($file_temp,$upload_image);

					$insert ="UPDATE tbl_user 
						SET
							picture     = '$unique_image'
							WHERE userEmail = '$email'
							";

					$run = $db->update($insert);
					if($run == false){
						header("Location:../index.php?error=Picture Not Updated!!");
					}else{
						header("Location:../index.php");
					}

				}
		}

}

?>