<?php 
session_start();
include("db/connection.php");



if(isSet($_POST['username']) && isSet($_POST['password'])&& isset($_POST["kul_id"]))
{
// username and password sent from Form
	$kul_id=$_POST["kul_id"];
	$username=$_POST["username"];
	$password=$_POST["password"];

	if (empty($username) || empty($password)) {
		$_SESSION["update_user_info"]="degerlerbos";
		header("Location:kullanici_ekle.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 


	$sql="update users set username='$username',password='$password' where id='$kul_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["update_user_info"]="hatali";
	header("Location:kullanici_ekle.php");
	
}
else
{
	$_SESSION["update_user_info"]="basarili";
	header("Location:kullanici_ekle.php");
}
	


}


 ?>