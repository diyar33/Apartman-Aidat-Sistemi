<?php 
session_start();
include("db/connection.php");



if(isSet($_POST['username']) && isSet($_POST['password']))
{
// username and password sent from Form
	$username=$_POST["username"];
	$password=$_POST["password"];
	if (empty($username) && empty($password)) {
		$_SESSION["add_user_info"]="degerlerbos";
			header("Location:kullanici_ekle.php");
		exit;
	}


if (preg_match('/\s/',$username)) {
		$_SESSION["add_user_info"]="degerbosluklu"; 
		header("Location:kullanici_ekle.php");
		exit;
}
	

//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="insert into users(username,password) values('$username','$password')";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["add_user_info"]="hatali";
	header("Location:kullanici_ekle.php");
	
}
else
{
	$_SESSION["add_user_info"]="basarili";
	header("Location:kullanici_ekle.php");
}
	header("Location:kullanici_ekle.php");


}


 ?>