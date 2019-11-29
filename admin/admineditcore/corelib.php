



<?php
session_start();
include "../../lib/config.php";
include "../../lib/database.php";
$db = new database();

?>





<?php
if(!isset($_COOKIE['C_U_A'])){
	header("Location: home.php");
}?>

<?php
if(isset($_COOKIE["C_U_A"])){
$target = $_COOKIE["C_U_A"];
$query = "SELECT * FROM tbl_admin WHERE auth ='$target'";
$red = $db->select($query);	
	while($res = mysqli_fetch_assoc($red)){
		$email = $res['adminEmail'] ;
		$pic = $res['picture'] ;
	}
}
?>
