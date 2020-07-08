<?php
ob_start();
session_start();
include("db/connection.php");

if (isset($_POST["bagimsizbolumler"])) {
$bagimsizbolumler = $_POST['bagimsizbolumler'];
}


//Then do what you want with the selected items://
foreach ($bagimsizbolumler as $bb_id) {

$sql="delete from tb_bagimsizbolum where id='$bb_id'";
    $result_query=mysqli_query($db,$sql);
    if (!$result_query) {
         $_SESSION["bagimsizbolum_toplu_silme"] = "hatali";
        header("Location:bagimsizbolum_listesi.php");
    }

}

if ($result_query) {
	 $_SESSION["bagimsizbolum_toplu_silme"] = "basarili";
        header("Location:bagimsizbolum_listesi.php");
}

else
{
header("Location:extra_404_option1.html");



}
ob_end_flush();

?>




