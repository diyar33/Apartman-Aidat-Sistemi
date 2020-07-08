<?php 
session_start();
include("db/connection.php");



if(isSet($_POST['gidercinsi']) && isset($_POST["gc_id"]))
{
// username and password sent from Form
	$gc_id=$_POST["gc_id"];
	$gidercinsi=$_POST["gidercinsi"];
	

	if (empty($gidercinsi)) {
		$_SESSION["gidercinsi_duzenleme"]="degerlerbos";
		header("Location:gidercinsi_tanimla.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 


	$sql="update tb_gidercinsi set aciklama='$gidercinsi' where id='$gc_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["gidercinsi_duzenleme"]="hatali";
	header("Location:gidercinsi_tanimla.php");
	
}
else
{
	$_SESSION["gidercinsi_duzenleme"]="basarili";
	header("Location:gidercinsi_tanimla.php");
}
	


}


 ?>