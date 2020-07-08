<?php
session_start();
if (!true == $_SESSION["yonetici"])
    header("location:/sikayet/kullan.php ");
include '../../../veri.php';
if(isset($_GET['f_id'])) 
{
// username and password sent from Form
	$f_id=$_GET["f_id"];
	

	if (empty($f_id)) {
		$_SESSION["apt_silme"]="degerlerbos";
		header("Location:apt_ekle.php");
		exit;
	}


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="delete from apartman where id='$f_id'";

	//$sql="update users set username='$username',password='$password' where id='$f_id'";

	$result_query=mysqli_query($b,$sql);


if (!$result_query) {
	$_SESSION["apt_silme"]="hatali";
	header("Location:apt_ekle.php");
	
}
else
{
	$_SESSION["apt_silme"]="basarili";
	header("Location:apt_ekle.php");
}
	


}


 ?>