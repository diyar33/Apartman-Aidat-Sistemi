<?php 
session_start();
include("db/connection.php");



if(isset($_GET['ga_id'])) 
{
// username and password sent from Form
	$ga_id=$_GET["ga_id"];
	

	if (empty($ga_id)) {
		$_SESSION["gideraciklama_silme"]="degerlerbos";
		header("Location:gideraciklama_ekle.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="delete from tb_gideraciklama where id='$ga_id'";

	//$sql="update users set username='$username',password='$password' where id='$ga_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["gideraciklama_silme"]="hatali";
	header("Location:gideraciklama_ekle.php");
	
}
else
{
	$_SESSION["gideraciklama_silme"]="basarili";
	header("Location:gideraciklama_ekle.php");
}
	


}


 ?>