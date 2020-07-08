<?php
ob_start();
session_start();
include("db/connection.php");

if ($_POST){
    $net_tutar=$_POST["net_tutar"];
    $gelen_id=$_GET["gelenid"];
    $sorgu=mysqli_query($db,"update tb_tahmini_yazilan set net_tutar='$net_tutar' where id='$gelen_id' ");
    if ($sorgu){
        $_SESSION["tahmini_yazilan"]="basarili";
    }
    else{
        $_SESSION["tahmini_yazilan"]="hatali";
    }
    $fark_temp=mysqli_fetch_array(mysqli_query($db,"select (tahmini_tutar-net_tutar) as fark, gider_muaf_carpan from tb_tahmini_yazilan where id='$gelen_id'"));
$fark=$fark_temp["fark"];
$muaf_carpani=$fark_temp["gider_muaf_carpan"];
echo $fark."&emsp;";
if ($fark<0){
    $fark=$fark*(-1);
    echo $fark."<br>";
    $sorgu2=mysqli_fetch_array(mysqli_query($db,"select tb_agm.bagimsizbolumsayisi from tb_anagayrimenkul tb_agm inner join tb_tahmini_yazilan tb_tahmin on
 tb_tahmin.apt_id=tb_agm.id
where tb_tahmin.id='$gelen_id'"));

$sorgu=mysqli_query($db,"select (tb_bb.pay/tb_agm.payda) as muaf_olmayan_payi,tb_bb.id as 'bb_no',
       tb_agm_gider.dagitimparametresi,
       tb_agm_gider.id as 'gider_no',
       tb_bb_borc.muaf 
from tb_tahmini_yazilan tb_tahmin inner join tb_bagimsizbolum_borcu tb_bb_borc on 
tb_bb_borc.gid=tb_tahmin.gider_id inner join tb_bagimsizbolum tb_bb on 
tb_bb.id=tb_bb_borc.bbid inner join tb_anagayrimenkul tb_agm on 
tb_agm.id=tb_bb.gayrimenkulid inner join tb_anagayrimenkul_giderler tb_agm_gider on 
tb_agm_gider.id=tb_bb_borc.gid
where tb_tahmin.id='$gelen_id'
");
$bb_sayisi=$sorgu2["bagimsizbolumsayisi"];
while ($par=mysqli_fetch_array($sorgu)){
    $bb_id=$par["bb_no"];
    $gider_id=$par["gider_no"];
    $muaf=$par["muaf"];
$dagitim_parametresi=$par["dagitimparametresi"];
    if ($dagitim_parametresi==0){
    $muaf_olmayan_pay=($par["muaf_olmayan_payi"]*$muaf_carpani)+$par["muaf_olmayan_payi"];
    $son_tutar=round($fark*$muaf_olmayan_pay,2);

    if ($muaf==1){
        $son_tutar=0;
    }

}
else if ($dagitim_parametresi==1){
    $son_tutar=$fark/$bb_sayisi;
    if ($muaf==1){
        $son_tutar=0;
    }




    mysqli_query($db,"INSERT INTO `tb_tahmini_yazilan_borcu` (`bb_id`, `borc_tutar`, `muaf`, `gider_id`, `tahmini_yazilan_id`) 
VALUES ('$bb_id', '$son_tutar', '$muaf', '$gider_id', '$gelen_id')");


}
}


    // INSERT INTO `tb_tahmini_yazilan_borcu` (`bb_id`, `borc_tutar`, `muaf`, `gider_id`, `tahmini_yazilan_id`) VALUES ('10', '12', '0', '4', '1')
}
header("location:tahmini_yazilan.php");


}
?>