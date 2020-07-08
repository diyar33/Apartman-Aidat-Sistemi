<?php
session_start();
if (!true == $_SESSION["yonetici"])
    header("location:/sikayet/kullan.php ");
include '../../../veri.php';
if(!empty($_POST['apt_ad']) and !empty($_POST['adres']) and  !empty($_POST['temad'])  and !empty($_POST['temnum'])
    and !empty($_POST['denetad']) and !empty($_POST['denetnum']))
{
// username and password sent from Form
			$f_id=$_POST["f_id"];


$aptad=$_POST["apt_ad"];
    $temad=$_POST["temad"];
    $temnum=$_POST["temnum"];
    $denetad=$_POST["denetad"];
    $denetnum=$_POST["denetnum"];
    $adres=$_POST["adres"];




//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 


	$sql="update apartman set aptad='$aptad',adres='$adres',temnum='$temnum',temad='$temad',denetnum='$denetnum',denetad='$denetad' where id='$f_id'";

	$result_query=mysqli_query($b,$sql);


if (!$result_query) {
	$_SESSION["apt_duzenle"]="hatali";
    header("Location:apt_ekle.php");
	
}
else
{
	$_SESSION["apt_duzenle"]="basarili";
	header("Location:apt_ekle.php");
}
	


}
else {
    $_SESSION["apt_duzenle"] = "degerlerbos";
    header("Location:apt_ekle.php");
}

 ?>