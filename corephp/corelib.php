



<?php
session_start();
include "../lib/config.php";
include "../lib/database.php";
$db = new database();

?>





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
