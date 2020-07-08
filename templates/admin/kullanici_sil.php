<?php 
session_start();
include("db/connection.php");



if(isset($_GET['kul_id'])) 
{
// username and password sent from Form
	$kul_id=$_GET["kul_id"];
	

	if (empty($kul_id)) {
		$_SESSION["delete_user_info"]="degerlerbos";
		header("Location:kullanici_ekle.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="delete from users where id='$kul_id'";

	//$sql="update users set username='$username',password='$password' where id='$kul_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["delete_user_info"]="hatali";
	header("Location:kullanici_ekle.php");
	
}
else
{
	$_SESSION["delete_user_info"]="basarili";
	header("Location:kullanici_ekle.php");
}
	


}


 ?>