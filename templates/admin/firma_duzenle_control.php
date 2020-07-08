<?php 
session_start();
include("db/connection.php");



if(isset($_POST['firma_adi']) && isset($_POST['firma_telno']) && isset($_POST['firma_email']) && isset($_POST['firma_adres']) && isset($_POST['firma_ibanno'])
	&& isset($_POST['firma_subekodu']) && isset($_POST['firma_hesapadi']))
{
// username and password sent from Form
			$f_id=$_POST["f_id"];


	$firma_adi=	$_POST["firma_adi"];
	$firma_telno=$_POST["firma_telno"];
	$firma_email=$_POST["firma_email"];
	$firma_adres=$_POST["firma_adres"];
	$firma_ibanno=$_POST["firma_ibanno"];
	$firma_subekodu=$_POST["firma_subekodu"];
	$firma_hesapadi=$_POST["firma_hesapadi"];
	




//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 


	$sql="update tb_firma set ad='$firma_adi',telno='$firma_telno',email='$firma_email',adres='$firma_adres',iban_no='$firma_ibanno',subekodu='$firma_subekodu',hesapadi='$firma_hesapadi' where id='$f_id'";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["firma_duzenleme"]="hatali";
	header("Location:firma_ekle.php");
	
}
else
{
	$_SESSION["firma_duzenleme"]="basarili";
	header("Location:firma_ekle.php");
}
	


}


 ?>