<?php
session_start();
include("db/connection.php");
$temp_key="";
$bagimsizbolumler_kumesi=$_POST["bagimsizbolumler_kumesi"];











$son_gider_id=1;
$toplamgidertutari=1000;

foreach ($bagimsizbolumler_kumesi as $key ) {
    $temp_key=$temp_key.$key;
}

$temp_dizi=explode('-', $temp_key);
array_shift($temp_dizi);



if (isset($_POST["muafsecilen"])) {
    $muafbagimsizbolumler_kumesi=$_POST["muafsecilen"];

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




if (isset($_POST["paysecilen"])) {
    $secilenpay=$_POST["paysecilen"];

}
if(!empty($secilenpay)){
    $esit_yazilacak=array_diff($gideryazilacak_bagimsizbolumler_kumesi, $secilenpay);
    $arsapayi_yazilacak=$secilenpay;
}


echo "Eşit<br>";
foreach ($esit_yazilacak as $esit) {
    echo $esit."<br>";

}
echo "arsa payi<br>";
foreach ($arsapayi_yazilacak as $arsa){
    echo $arsa."<br>";

}





$muafbagimsizbolum_paylari_toplami=0;
$muafolmayanbagimsizbolum_paylari_toplami=0;
$muafbagimsizbolum_paylari=array();
$muafolmayanbagimsizbolum_paylari=array();
$toplam_arsapayi_tutari=0;
$toplam_esitpay_tutari=0;
$muafislemi_carpani=0;
$son_tutar=0;
$sayac=0;
if(!empty($muafbagimsizbolumler_kumesi)){
    foreach ($muafbagimsizbolumler_kumesi as $muaf_id) {
        $sql="select tb_bm.pay/tb_gm.payda as 'muafbagimsizbolum_paylari_toplami' from tb_bagimsizbolum tb_bm
inner join tb_anagayrimenkul tb_gm
on tb_bm.gayrimenkulid=tb_gm.id
                        where tb_bm.id='$muaf_id'";

        $result= $db->query($sql);
        $row_gm = $result->fetch_array(MYSQLI_BOTH);
        $muafbagimsizbolum_paylari_toplami=$muafbagimsizbolum_paylari_toplami+$row_gm["muafbagimsizbolum_paylari_toplami"];
    }
}
echo "muaf bagimsiz pay toplam".$muafbagimsizbolum_paylari_toplami."<br>";

foreach ($gideryazilacak_bagimsizbolumler_kumesi as $muafolmayan_id) {
    $sql="select tb_bm.pay/tb_gm.payda as 'muafolmayanbagimsizbolum_paylari_toplami' from tb_bagimsizbolum tb_bm
inner join tb_anagayrimenkul tb_gm
on tb_bm.gayrimenkulid=tb_gm.id
                        where tb_bm.id='$muafolmayan_id'";

    $result= $db->query($sql);
    $row_gm = $result->fetch_array(MYSQLI_BOTH);
    $muafolmayanbagimsizbolum_paylari_toplami=$muafolmayanbagimsizbolum_paylari_toplami+$row_gm["muafolmayanbagimsizbolum_paylari_toplami"];
    $muafolmayanbagimsizbolum_paylari[$sayac]=$row_gm["muafolmayanbagimsizbolum_paylari_toplami"];
    $sayac++;
}
echo "muaf olmayan pay".$muafolmayanbagimsizbolum_paylari_toplami."<br>";

$sayac=0;
$muafislemi_carpani=$muafbagimsizbolum_paylari_toplami/$muafolmayanbagimsizbolum_paylari_toplami;

foreach ($gideryazilacak_bagimsizbolumler_kumesi as $muafolmayan_id) {
    foreach ($arsapayi_yazilacak as $arsa_payi_id) {
        if ($muafolmayan_id==$arsa_payi_id){
            $muafolmayanbagimsizbolum_paylari[$sayac]=($muafolmayanbagimsizbolum_paylari[$sayac]*$muafislemi_carpani)+$muafolmayanbagimsizbolum_paylari[$sayac];
            $son_tutar=$toplamgidertutari*$muafolmayanbagimsizbolum_paylari[$sayac];
            $toplam_arsapayi_tutari+=$son_tutar;
            echo "arsa".$muafolmayan_id."&nbsp;".$son_tutar."<br>";



        }

    }
$sayac++;

}
echo $toplam_arsapayi_tutari."<br>";
$toplam_esitpay_tutari=$toplamgidertutari-$toplam_arsapayi_tutari;
echo $toplam_esitpay_tutari;
$esitislemi_tutari=$toplam_esitpay_tutari/count($esit_yazilacak);


    foreach ($esit_yazilacak as $esit_pay_id) {
echo "essit".$esit_pay_id."&nbsp;".$esitislemi_tutari."<br>";

}
if(!empty($muafbagimsizbolumler_kumesi)){
    foreach ($muafbagimsizbolumler_kumesi as $muaf_id) {
        echo "muaf".$muaf_id."&nbsp;0<br>";


    }

}

?>