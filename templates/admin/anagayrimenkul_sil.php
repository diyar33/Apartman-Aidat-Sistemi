<?php 
session_start();
include("db/connection.php");



if(isset($_GET['gm_id'])) 
{
// username and password sent from Form
	$gm_id=$_GET["gm_id"];
	

	if (empty($gm_id)) {
		$_SESSION["anagayrimenkul_silme"]="degerlerbos";
		header("Location:anagayrimenkul_listesi.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="delete from tb_anagayrimenkul where id='$gm_id'";

	//$sql="update users set username='$username',password='$password' where id='$kul_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["anagayrimenkul_silme"]="hatali";
	header("Location:anagayrimenkul_listesi.php");
	
}
else
{
	$_SESSION["anagayrimenkul_silme"]="basarili";
	header("Location:anagayrimenkul_listesi.php");
}
	


}


 ?>