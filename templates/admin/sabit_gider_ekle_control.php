<?php
session_start();
include("db/connection.php");

if (isset($_POST["gayrimenkulid"]) && !empty($_POST["gayrimenkulid"])) {
    $gayrimenkulid=$_POST["gayrimenkulid"];
}
else{
    $_SESSION["sabit_gider_ekleme"] = "degerlerbos";
    header("Location:sabit_gider_ekle.php");
    exit;

}
if (isset($_POST["giderincinsi"]) && !empty($_POST["giderincinsi"])) {
    $gider_cinsi=$_POST["giderincinsi"];
}
else{
    $_SESSION["sabit_gider_ekleme"] = "degerlerbos";
    header("Location:sabit_gider_ekle.php");
    exit;

}
if (isset($_POST["dagitimparametresi"])) {
    $dagitim_parametresi=$_POST["dagitimparametresi"];
}
else{
    $_SESSION["sabit_gider_ekleme"] = "degerlerbos";
    header("Location:sabit_gider_ekle.php");
    exit;
}
if (isset($_POST["dagitimyeri"])) {
    $dagitim_yeri=$_POST["dagitimyeri"];
}
else{
    $_SESSION["sabit_gider_ekleme"] = "degerlerbos";
    header("Location:sabit_gider_ekle.php");
    exit;

}
if (isset($_POST["gider_tutar"]) && !empty($_POST["gider_tutar"])) {
    $gider_tutar=$_POST["gider_tutar"];
}
else{
    $_SESSION["sabit_gider_ekleme"] = "degerlerbos";
    header("Location:sabit_gider_ekle.php");
    exit;

}





$temp_key="";
$bagimsizbolumler_kumesi=$_POST["bagimsizbolumler_kumesi"];



foreach ($bagimsizbolumler_kumesi as $key ) {
    $temp_key=$temp_key.$key;
}

$temp_dizi=explode('-', $temp_key);
array_shift($temp_dizi);


if (isset($_POST["muafbagimsizbolum"])) {
    $muafbagimsizbolumler_kumesi=$_POST["muafbagimsizbolum"];

}
else
{
    $muafbagimsizbolumler_kumesi=array();
}

if(!empty($muafbagimsizbolumler_kumesi)){
    $gideryazilacak_bagimsizbolumler_kumesi=array_diff($temp_dizi, $muafbagimsizbolumler_kumesi);

}
else
{
    $gideryazilacak_bagimsizbolumler_kumesi=$temp_dizi;
}
$muaf_db="";
$muafolmayan_db="";
foreach ($muafbagimsizbolumler_kumesi as $item) {
$muaf_db=$muaf_db."-".$item;
}
foreach ($gideryazilacak_bagimsizbolumler_kumesi as $item2) {
$muafolmayan_db=$muafolmayan_db."-".$item2;
}

$sorgu=mysqli_query($db,"insert into tb_sabit_gider(gider_cinsi,gm_id,yapilacak_is_ucreti,dagitim_parametresi,dagitim_yeri,muaf_bolum,muaf_olmayan_bolum)
 values ('$gider_cinsi','$gayrimenkulid','$gider_tutar','$dagitim_parametresi','$dagitim_yeri','$muaf_db','$muafolmayan_db')");

if ($sorgu){
    $_SESSION["sabit_gider_ekleme"] = "eklemetamam";
    header("Location:sabit_gider_ekle.php");
    exit;



}
else{
    $_SESSION["sabit_gider_ekleme"] = "eklemehatali";
    header("Location:sabit_gider_ekle.php");
    exit;
}


?>