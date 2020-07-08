<?php 
session_start();
include("db/connection.php");



if(isset($_GET['is_id'])) 
{
// username and password sent from Form
	$is_id=$_GET["is_id"];
	

	if (empty($is_id)) {
		$_SESSION["delete_user_info"]="degerlerbos";
		header("Location:yapilacakis_ekle.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="delete from tb_yapilacakisler where id='$is_id'";

	//$sql="update users set username='$username',password='$password' where id='$is_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["yapilacakis_silme"]="hatali";
	header("Location:yapilacakis_ekle.php");
	
}
else
{
	$_SESSION["yapilacakis_silme"]="basarili";
	header("Location:yapilacakis_ekle.php");
}
	


}


 ?>