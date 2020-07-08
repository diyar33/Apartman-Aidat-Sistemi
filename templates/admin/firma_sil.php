<?php 
session_start();
include("db/connection.php");



if(isset($_GET['f_id'])) 
{
// username and password sent from Form
	$f_id=$_GET["f_id"];
	

	if (empty($f_id)) {
		$_SESSION["firma_silme"]="degerlerbos";
		header("Location:firma_ekle.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="delete from tb_firma where id='$f_id'";

	//$sql="update users set username='$username',password='$password' where id='$f_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["firma_silme"]="hatali";
	header("Location:firma_ekle.php");
	
}
else
{
	$_SESSION["firma_silme"]="basarili";
	header("Location:firma_ekle.php");
}
	


}


 ?>