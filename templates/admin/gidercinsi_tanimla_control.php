<?php 
session_start();
include("db/connection.php");



if(isset($_POST['gidercinsi']))
{
// username and password sent from Form
	$gidercinsi=$_POST["gidercinsi"];
	
	if (empty($gidercinsi) ) {
		$_SESSION["gidercinsi_ekleme"]="degerlerbos";
			header("Location:gidercinsi_tanimla.php");
		exit;
	}


	

//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="insert into tb_gidercinsi(aciklama) values('$gidercinsi')";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["gidercinsi_ekleme"]="hatali";
	header("Location:gidercinsi_tanimla.php");
	
}
else
{
	$_SESSION["gidercinsi_ekleme"]="basarili";
	header("Location:gidercinsi_tanimla.php");
}
	


}
else
{
	header("Location:extra_404_option1.html.php");
}


 ?>