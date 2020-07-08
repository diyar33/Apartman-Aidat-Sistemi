<?php 
session_start();
include("db/connection.php");



if(isset($_POST['isadi']))
{
// username and password sent from Form
	$isadi=$_POST["isadi"];
	
	if (empty($isadi) ) {
		$_SESSION["yapilacakis_ekleme"]="degerlerbos";
			header("Location:yapilacakis_ekle.php");
		exit;
	}


	

//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

	$sql="insert into tb_yapilacakisler(isadi) values('$isadi')";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["yapilacakis_ekleme"]="hatali";
	header("Location:yapilacakis_ekle.php");
	
}
else
{
	$_SESSION["yapilacakis_ekleme"]="basarili";
	header("Location:yapilacakis_ekle.php");
}
	


}
else
{
	header("Location:extra_404_option1.html.php");
}


 ?>