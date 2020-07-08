<?php 
session_start();
include("db/connection.php");



if(isset($_POST['firma_adi']) && isset($_POST['firma_telno']) && isset($_POST['firma_email']) && isset($_POST['firma_adres']) && isset($_POST['firma_ibanno'])
	&& isset($_POST['firma_subekodu']) && isset($_POST['firma_hesapadi']))
{
// username and password sent from Form
	$firma_adi=		$_POST["firma_adi"];
	$firma_telno=	$_POST["firma_telno"];
	$firma_email=	$_POST["firma_email"];
	$firma_adres=	$_POST["firma_adres"];
	$firma_ibanno=	$_POST["firma_ibanno"];
	$firma_subekodu=$_POST["firma_subekodu"];
	$firma_hesapadi=$_POST["firma_hesapadi"];


	



	$sql="insert into tb_firma(ad,telno,email,adres,iban_no,subekodu,hesapadi) values('$firma_adi','$firma_telno','$firma_email','$firma_adres','$firma_ibanno','$firma_subekodu','$firma_hesapadi')";

	$result_query=mysqli_query($db,$sql);


if (!$result_query) {
	$_SESSION["firma_ekle"]="hatali";
	header("Location:firma_ekle.php");
	
}
else
{
	$_SESSION["firma_ekle"]="basarili";
	header("Location:firma_ekle.php");
}
	


}
else
{
	header("Location:extra_404_option1.html.php");
}


 ?>