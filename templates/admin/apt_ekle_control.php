<?php
session_start();
if (!true == $_SESSION["yonetici"])
    header("location:/sikayet/kullan.php ");
include '../../../veri.php';

if(!empty($_POST['apt_ad']) and !empty($_POST['tem_ad']) and  !empty($_POST['tem_tel'])  and !empty($_POST['denetci_ad'])
    and !empty($_POST['denetci_tel']) and !empty($_POST['apt_adres']))
{
// username and password sent from Form
	$apt_ad=$_POST["apt_ad"];
    $tam_ad=$_POST["tem_ad"];
    $denetci_ad=$_POST["denetci_ad"];
    $denetci_tel=$_POST["denetci_tel"];
    $tem_tel=$_POST["tem_tel"];
    $apt_adres=$_POST["apt_adres"];
	



	$sql="INSERT INTO `apartman` (`aptad`, `adres`, `temad`, `temnum`, `denetad`, `denetnum`) VALUES ( '$apt_ad', '$apt_adres', '$tam_ad', '$tem_tel', '$denetci_ad', '$denetci_tel');";

	$result_query=mysqli_query($b,$sql);

    if (!$result_query) {
        $_SESSION["apt_ekle"]="hatali";
        header("Location:apt_ekle.php");

    }
    else
    {
        $_SESSION["apt_ekle"]="basarili";
        header("Location:apt_ekle.php");
    }



}
else
{
    $_SESSION["apt_ekle"]="degerlerbos";
    header("Location:apt_ekle.php");

}


 ?>