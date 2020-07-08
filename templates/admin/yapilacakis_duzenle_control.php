<?php 
session_start();
include("db/connection.php");



if(isset($_POST['isadi']))
{
// username and password sent from Form
	$is_id=$_POST["is_id"];
	$isadi=$_POST["isadi"];
	

	if (empty($isadi)) {
		$_SESSION["yapilacakis_duzenleme"]="degerlerbos";
		header("Location:yapilacakis_ekle.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 


	$sql="update tb_yapilacakisler set isadi='$isadi' where id='$is_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["yapilacakis_duzenleme"]="hatali";
	header("Location:yapilacakis_ekle.php");
	
}
else
{
	$_SESSION["yapilacakis_duzenleme"]="basarili";
	header("Location:yapilacakis_ekle.php");
}
}
else
{
	header("Location:yapilacakis_ekle.php");
}


 ?>