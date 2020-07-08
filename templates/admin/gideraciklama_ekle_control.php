<?php 
session_start();
include("db/connection.php");



if(isset($_POST['gidercinsiaciklama']))
{
// username and password sent from Form
	$gidercinsiaciklama=$_POST["gidercinsiaciklama"];
	
	if (empty($gidercinsiaciklama) ) {
		$_SESSION["gideraciklama_ekle"]="degerlerbos";
			header("Location:gideraciklama_ekle.php");
		exit;
	}


	

//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="insert into tb_gideraciklama(aciklama) values('$gidercinsiaciklama')";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["gideraciklama_ekle"]="hatali";
	header("Location:gideraciklama_ekle.php");
	
}
else
{
	$_SESSION["gideraciklama_ekle"]="basarili";
	header("Location:gideraciklama_ekle.php");
}
	


}
else
{
	header("Location:extra_404_option1.html.php");
}


 ?>