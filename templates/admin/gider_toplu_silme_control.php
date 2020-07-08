<?php
ob_start();
session_start();
include("db/connection.php");



if (isset($_POST["giderler"])) {
$giderler = $_POST['giderler'];



//Then do what you want with the selected items://
foreach ($giderler as $g_id) {

$sql="delete from tb_anagayrimenkul_giderler where id='$g_id'";
    $result_query=mysqli_query($db,$sql);
    if (!$result_query) {
         $_SESSION["gider_toplu_silme"] = "hatali";
        header("Location:gider_listesi.php");
    }

}

if ($result_query) {
	 $_SESSION["gider_toplu_silme"] = "basarili";
        header("Location:gider_listesi.php");
}
}
else
{
header("Location:extra_404_option1.html");
}
ob_end_flush();

?>




