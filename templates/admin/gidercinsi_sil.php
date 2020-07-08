<?php 
session_start();
include("db/connection.php");



if(isset($_GET['gc_id'])) 
{
// username and password sent from Form
	$gc_id=$_GET["gc_id"];
	

	if (empty($gc_id)) {
		$_SESSION["delete_user_info"]="degerlerbos";
		header("Location:gidercinsi_tanimla.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="delete from tb_gidercinsi where id='$gc_id'";

	//$sql="update users set username='$username',password='$password' where id='$gc_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["gidercinsi_silme"]="hatali";
	header("Location:gidercinsi_tanimla.php");
	
}
else
{
	$_SESSION["gidercinsi_silme"]="basarili";
	header("Location:gidercinsi_tanimla.php");
}
	


}


 ?>