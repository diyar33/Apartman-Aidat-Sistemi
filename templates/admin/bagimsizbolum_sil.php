<?php 
session_start();
include("db/connection.php");



if(isset($_GET['bb_id'])) 
{
// username and password sent from Form
	$bb_id=$_GET["bb_id"];
	

	if (empty($bb_id)) {
		$_SESSION["bagimsizbolum_silme"]="degerlerbos";
		header("Location:bagimsizbolum_listesi.php");
		exit;
	}



	$sql="delete from tb_bagimsizbolum where id='$bb_id'";
		$result_query=mysqli_query($db,$sql);
		if ($result_query) {
				$_SESSION["bagimsizbolum_silme"]="basarili";
	header("Location:bagimsizbolum_listesi.php");

	
			
		}
		else
		{
	$_SESSION["bagimsizbolum_silme"]="hatali";
	header("Location:bagimsizbolum_listesi.php");
			
		}




	


}


 ?>