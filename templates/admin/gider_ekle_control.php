<?php
ob_start();
session_start();
include("db/connection.php");





if (isset($_POST["gayrimenkulid"]) && !empty($_POST["gayrimenkulid"])) {
    $gayrimenkulid=$_POST["gayrimenkulid"];
}
else{  
     $_SESSION["gider_ekleme"] = "degerlerbos";
        header("Location:gider_ekle.php");
        exit;
    
}

if (isset($_POST["toplamgidertutari"]) && !empty($_POST["toplamgidertutari"])) {
    $toplamgidertutari=$_POST["toplamgidertutari"];
      
}
else{  
     $_SESSION["gider_ekleme"] = "degerlerbos";
        header("Location:gider_ekle.php");
        exit;
    
}


if (isset($_POST["giderincinsi"]) && !empty($_POST["giderincinsi"])) {
    $giderincinsi=$_POST["giderincinsi"];
      
}
else{  
     $_SESSION["gider_ekleme"] = "degerlerbos";
        header("Location:gider_ekle.php");
        exit;
    
}


if (isset($_POST["taksit_sayisi"]) && !empty($_POST["taksit_sayisi"])) {
    $taksit_sayisi=$_POST["taksit_sayisi"];

}
else{
    $taksit_sayisi=1;

}

if (isset($_POST["giderintarihi"]) && !empty($_POST["giderintarihi"])) {
    $giderintarihi=$_POST["giderintarihi"];
    $temp_gider_tarihi=explode('-', $giderintarihi);

    $giderintarihi=$temp_gider_tarihi[0].'/'.$temp_gider_tarihi[1].'/08';
      
}
else{  
     $_SESSION["gider_ekleme"] = "degerlerbos";
        header("Location:gider_ekle.php");
        exit;
    
}



if (isset($_POST["toplamgidertutari"]) && !empty($_POST["toplamgidertutari"])) {
    $toplamgidertutari=$_POST["toplamgidertutari"];
      
}
else{  
     $_SESSION["gider_ekleme"] = "degerlerbos";
        header("Location:gider_ekle.php");
        exit;
    
}




if (isset($_POST["odenecekyer"]) && !empty($_POST["odenecekyer"])) {
    $odenecekyer=$_POST["odenecekyer"];
    $odenecektutar=$_POST["val"];
    $toplam_odenecek_tutar=0;
    foreach ($odenecektutar as $ode){
        $toplam_odenecek_tutar+=$ode;
    }

    $giderkari=$toplamgidertutari-$toplam_odenecek_tutar;
    if($giderkari=='0'){
        $kardurumu=0;
    }
    else if ($giderkari > 0){
        $kardurumu=1;
    }
    else{
        echo "yanlış değer";
    }
    $isiyapantutari=$toplam_odenecek_tutar;

} 
else
 {
    
$_SESSION["gider_ekleme"] = "degerlerbos";
        header("Location:gider_ekle.php");
        exit;

}


    
    // Post edilmesi zorunlu olmayan alanlar

                    $giderinaciklamasi=$_POST["giderinaciklamasi"];
                    // İlk 4 radio button
                    $dagitimparametresi =$_POST["dagitimparametresi"];
                    $dagitimyeri        =$_POST["dagitimyeri"];
$belgeninserino=$_POST["belgeninserino"];

$belgenintarihi=$_POST["belgenintarihi"];


if ($belgenintarihi!=''){
    $temp_belgenintarihi_tarihi=explode('-',$belgenintarihi);
    $belgenintarihi=$temp_belgenintarihi_tarihi[0].'/'.$temp_belgenintarihi_tarihi[1].'/'.$temp_belgenintarihi_tarihi[2];
}
else
    {
$belgenintarihi="00/00/0000";

    }
$belgenincinsi=$_POST["belgenincinsi"];


if ($taksit_sayisi>1){
    $taksit_tutar=$_POST["taksit_tutar"];
    $taksit_aylar=$_POST["taksit_ay"];
    $toplam_taksit_tutar=0;
    foreach ($taksit_tutar as $taksit){
        $toplam_taksit_tutar+=$taksit;

    }}
else{
    $toplam_taksit_tutar=$toplamgidertutari;
}
    if ($toplam_taksit_tutar == $toplamgidertutari){

$sql="insert into tb_anagayrimenkul_giderler(cinsi,aciklamasi,dagitimparametresi,dagitimyeri,tarih,taksit_sayisi,toplamtutar,kartutari,
    isiyapanaodenentutar,tahsilatdurumu,kardurumu,gayrimenkulid,belgenin_cinsi,belgenin_serino,belgenin_tarihi) 

values('$giderincinsi'
    ,'$giderinaciklamasi'
    ,'$dagitimparametresi'
    ,'$dagitimyeri'
    ,'$giderintarihi'
            ,'$taksit_sayisi'
    ,'$toplamgidertutari'
    ,'$giderkari'
    ,'$isiyapantutari'
    ,'0'
    ,'$kardurumu'
    ,'$gayrimenkulid'
    ,'$belgenincinsi'
    ,'$belgeninserino'
    ,'$belgenintarihi')";


$result_query = mysqli_query($db, $sql);
if ($result_query){
    $_SESSION["gider_ekleme"] = "kayittamam";

}
else{
    $_SESSION["gider_ekleme"] = "yanliskayit";
    header("Location:gider_ekle.php");
    exit;
}
    }
    else {
        $_SESSION["gider_ekleme"] = "taksityanlis";
        header("Location:gider_ekle.php");
        exit;
    }


$sql="select id from tb_anagayrimenkul_giderler order by id desc limit 1";

$result= $db->query($sql);
$row_songiderid = $result->fetch_array(MYSQLI_BOTH);
$son_gider_id=$row_songiderid["id"];



$sayac=1;
if (isset($_POST["taksit_ay"]) && !empty($_POST["taksit_ay"])) {
    foreach ($taksit_aylar as $taksit_ay){

        $taksit=$taksit_tutar[$sayac];
        $temp_taksit_tarihi=explode('-', $taksit_ay);

        $taksit_tarihi=$temp_taksit_tarihi[0].'/'.$temp_taksit_tarihi[1].'/08';

        mysqli_query($db,"INSERT INTO `tb_taksit` (`taksit_tutar`, `gider_id`, `taksit_ay`, `taksit_num`, `apartman_id`, `odenen_tutar`, `taksit_odeme_durum`) VALUES ('$taksit', '$son_gider_id', '$taksit_tarihi','$sayac', '$gayrimenkulid', '0', '0')");

        $sayac++;

    }
}
else{
    mysqli_query($db,"INSERT INTO `tb_taksit` (`taksit_tutar`, `gider_id`, `taksit_ay`, `taksit_num`, `apartman_id`, `odenen_tutar`, `taksit_odeme_durum`) VALUES ('$toplamgidertutari', '$son_gider_id', '$giderintarihi','$sayac', '$gayrimenkulid', '0', '0')");
}

$sayac=1;
foreach ($odenecektutar as $ode){
    $sql="insert into tb_odemeyer (odeme_yer_id,odeme_tutar,odenen_tarih,odenen_tutar,odeme_durumu,gider_id,anagayrimenkul_id) values ('$odenecekyer[$sayac]','$ode',NULL,'0','0','$son_gider_id','$gayrimenkulid')";
    $result_query = mysqli_query($db, $sql);
    $sayac++;
}











$sayac=0;
$sql="select id from tb_taksit where gider_id='$son_gider_id'";

$result= $db->query($sql);
while ($row_sontaksit=$result->fetch_assoc()){
    $taksit_idleri[$sayac]=$row_sontaksit["id"];
    $sayac++;
}
$par=mysqli_fetch_array(mysqli_query($db,$sql));
$taksit_idsi=$par["id"];















$temp_key="";
$bagimsizbolumler_kumesi=$_POST["bagimsizbolumler_kumesi"];



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







if ($dagitimparametresi==0) {
        
$muafbagimsizbolum_paylari_toplami=0;
$muafolmayanbagimsizbolum_paylari_toplami=0;
$muafbagimsizbolum_paylari=array();
$muafolmayanbagimsizbolum_paylari=array();
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

                    $sayac=0;
                    $sayac_taksit=1;
$muafislemi_carpani=$muafbagimsizbolum_paylari_toplami/$muafolmayanbagimsizbolum_paylari_toplami;
if ($taksit_sayisi==1){
foreach ($gideryazilacak_bagimsizbolumler_kumesi as $muafolmayan_id) {
    $muafolmayanbagimsizbolum_paylari[$sayac]=($muafolmayanbagimsizbolum_paylari[$sayac]*$muafislemi_carpani)+$muafolmayanbagimsizbolum_paylari[$sayac];
    $son_tutar=$toplamgidertutari*$muafolmayanbagimsizbolum_paylari[$sayac];
    $sql="insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar,taksit_id) values('$son_gider_id','$muafolmayan_id','0','0','$son_tutar','$taksit_idsi')";
    $result_query = mysqli_query($db, $sql);
    $sayac++;
}
 if(!empty($muafbagimsizbolumler_kumesi)){
foreach ($muafbagimsizbolumler_kumesi as $muaf_id) {
    $sql="insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar,taksit_id) values('$son_gider_id','$muaf_id','1','0','0','$taksit_idsi')";
    $result_query = mysqli_query($db, $sql);
}
}
}
else{

    foreach ($taksit_idleri as $taksit_id) {

        foreach ($gideryazilacak_bagimsizbolumler_kumesi as $muafolmayan_id) {
            $muafolmayanbagimsizbolum_paylari[$sayac] = ($muafolmayanbagimsizbolum_paylari[$sayac] * $muafislemi_carpani) + $muafolmayanbagimsizbolum_paylari[$sayac];
            $son_tutar = $taksit_tutar[$sayac_taksit] * $muafolmayanbagimsizbolum_paylari[$sayac];
            $sql = "insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar,taksit_id) values('$son_gider_id','$muafolmayan_id','0','0','$son_tutar','$taksit_id')";
            $result_query = mysqli_query($db, $sql);
            $sayac++;

        }
        $sayac=0;
        if (!empty($muafbagimsizbolumler_kumesi)) {
            foreach ($muafbagimsizbolumler_kumesi as $muaf_id) {
                $sql = "insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar,taksit_id) values('$son_gider_id','$muaf_id','1','0','0','$taksit_id')";
                $result_query = mysqli_query($db, $sql);
            }
        }
        $sayac_taksit++;
    }
}




}

else if ($dagitimparametresi==1)
{
    $sayac_taksit=1;
    foreach ($taksit_idleri as $taksit) {
foreach ($gideryazilacak_bagimsizbolumler_kumesi as $muafolmayan_id) {
    if ($taksit_sayisi>1) {
        $son_tutar = $taksit_tutar[$sayac_taksit] / count($gideryazilacak_bagimsizbolumler_kumesi);
    }
    else
        $son_tutar = $toplamgidertutari/ count($gideryazilacak_bagimsizbolumler_kumesi);

    $sql="insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar,taksit_id) values('$son_gider_id','$muafolmayan_id','0','0','$son_tutar','$taksit')";
    
    $result_query = mysqli_query($db, $sql);

    
}


 if(!empty($muafbagimsizbolumler_kumesi)){
foreach ($muafbagimsizbolumler_kumesi as $muaf_id) {

    
    
    $sql="insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar,taksit_id) values('$son_gider_id','$muaf_id','1','0','0','$taksit')";

    $result_query = mysqli_query($db, $sql);


}
 }

 $sayac_taksit++;
}

$muafislemi_carpani=0;



}
else if ($dagitimparametresi==2){

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
                $sql="insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar) values('$son_gider_id','$muafolmayan_id','0','0','$son_tutar')";
                $result_query = mysqli_query($db, $sql);


            }

        }
        $sayac++;

    }
    $toplam_esitpay_tutari=$toplamgidertutari-$toplam_arsapayi_tutari;
    $esitislemi_tutari=$toplam_esitpay_tutari/count($esit_yazilacak);

    foreach ($esit_yazilacak as $esit_pay_id) {
        $sql="insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar) values('$son_gider_id','$esit_pay_id','0','0','$esitislemi_tutari')";
        $result_query = mysqli_query($db, $sql);

    }
    if(!empty($muafbagimsizbolumler_kumesi)){
        foreach ($muafbagimsizbolumler_kumesi as $muaf_id) {
            $sql="insert into tb_bagimsizbolum_borcu(gid,bbid,muaf,tahsilatdurumu,tutar) values('$son_gider_id','$muaf_id','1','0','0')";
            $result_query = mysqli_query($db, $sql);

        }

    }



}
if($giderinaciklamasi==4){
    $sonraki_ay=$temp_gider_tarihi[1]+1;
    $yansitilacak_ay=$temp_gider_tarihi[0]."/".$sonraki_ay."/08";
    mysqli_query($db,"INSERT INTO `tb_tahmini_yazilan` (`tahmini_tutar`, `gider_ayi`, `yansitilacak_ay`, `apt_id`, `gider_id`,gider_muaf_carpan)
 VALUES ('$toplamgidertutari','$giderintarihi', '$yansitilacak_ay', '$gayrimenkulid', '$son_gider_id','$muafislemi_carpani')");


}
header("Location:gider_ekle.php");
exit;


 ?>