<?php 
session_start();
include("db/connection.php");



if(isSet($_POST['gideraciklama']) && isset($_POST["ga_id"]))
{
// username and password sent from Form
	$ga_id=$_POST["ga_id"];
	$gideraciklama=$_POST["gideraciklama"];
	

	if (empty($gideraciklama)) {
		$_SESSION["gideraciklama_duzenleme"]="degerlerbos";
		header("Location:gideraciklama_ekle.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 


	$sql="update tb_gideraciklama set aciklama='$gideraciklama' where id='$ga_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["gideraciklama_duzenleme"]="hatali";
	header("Location:gideraciklama_ekle.php");
	
}
else
{
	$_SESSION["gideraciklama_duzenleme"]="basarili";
	header("Location:gideraciklama_ekle.php");
}
	


}


 ?>