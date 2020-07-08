<?php



session_start();
include("db/connection.php");







if (isset($_POST["gayrimenkulid"])) {


    $gayrimenkulid = $_POST["gayrimenkulid"];
    $bagimsizbolumcinsi = $_POST["bagimsizbolumcinsi"];
    $arsapayi = $_POST["arsapayi"];
    $kapino = $_POST["kapino"];

    $tapusahibitcno = $_POST["tapusahibitcno"];
    $tapusahibiad = $_POST["tapusahibiad"];
    $tapusahibisoyad = $_POST["tapusahibisoyad"];
    $tapusahibitelno = $_POST["tapusahibitelno"];
    $tapusahibiemail = $_POST["tapusahibiemail"];

    $tapusahibivekiliad = $_POST["tapusahibivekiliad"];
    $tapusahibivekilisoyad = $_POST["tapusahibivekilisoyad"];

    $kiracitcno = $_POST["kiracitcno"];
    $kiraciad = $_POST["kiraciad"];
    $kiracisoyad = $_POST["kiracisoyad"];
    $kiracitelno = $_POST["kiracitelno"];
    $kiraciemail = $_POST["kiraciemail"];
    $kiracidurumu = $_POST["kiracidurumu"];


    /*'$kiraciad','$kiracisoyad','$kiracitelno','$kiracitcno','$kiraciemail'
    kiraciad,kiracisoyad,kiracitelno,kiracitcno,kiraciemail

    kiraciad,kiracisoyad,kiracitelno,kiracitcno,kiraciemail

    '$tapusahibiad','$tapusahibisoyad','$tapusahibitelno','$tapusahibitcno','$tapusahibiemail'
    tapusahibiad,tapusahibisoyad,tapusahibitelno,tapusahibitcno,tapusahibiemail

    '$tapusahibivekiliad','$tapusahibivekilisoyad'
    tapusahibivekiliad,tapusahibivekilisoyad*/


    if (empty($gayrimenkulid) || empty($kapino)) {
        $_SESSION["bagimsizbolum_ekleme"] = "degerlerbos";
        header("Location:bagimsizbolum_ekle.php");
        exit;
    }


    $sql = "select 
tb_agm.bagimsizbolumsayisi,tb_agm.payda,sum(tb_bb.pay) as pay_toplam,
 count(tb_bb.id) as mevcut from tb_anagayrimenkul tb_agm 
 inner join tb_bagimsizbolum tb_bb on
     tb_bb.gayrimenkulid=tb_agm.id
where tb_agm.id='$gayrimenkulid'";

// Tanımlanan bağımsızbölüm ile mevcut bağımzız bölüm bilgilerini karşılaştırma


    $result = $db->query($sql);
    $row_karsilastirma = $result->fetch_array(MYSQLI_BOTH);
    $cikan_pay = 0;
    if ($row_karsilastirma["bagimsizbolumsayisi"] == $row_karsilastirma["mevcut"]) {
        $_SESSION["bagimsizbolum_ekleme"] = "bagimsizbolumsayisiesit";
        header("Location:bagimsizbolum_ekle.php");
        exit;
    }
if (($row_karsilastirma["bagimsizbolumsayisi"]-1)==$row_karsilastirma["mevcut"]){
        $cikan_pay = ($row_karsilastirma["pay_toplam"] + $arsapayi) / $row_karsilastirma["payda"];
        if ($cikan_pay >= 0.99 and $cikan_pay <= 1.01){
        }
        else{
            $_SESSION["bagimsizbolum_ekleme"] = "bagimsizbolumpayyanlis";
            header("Location:bagimsizbolum_ekle.php");
            exit;
        }
}




        $sql = "insert into 
        tb_bagimsizbolum (cinsi,pay,kapino,gayrimenkulid,
            kiraciad,kiracisoyad,kiracitelno,kiracitcno,kiraciemail,
            tapusahibiad,tapusahibisoyad,tapusahibitelno,tapusahibitcno,tapusahibiemail,
            tapusahibivekiliad,tapusahibivekilisoyad,kiracidurumu)
        values('$bagimsizbolumcinsi','$arsapayi','$kapino','$gayrimenkulid',
                '$kiraciad','$kiracisoyad','$kiracitelno','$kiracitcno','$kiraciemail',
                '$tapusahibiad','$tapusahibisoyad','$tapusahibitelno','$tapusahibitcno','$tapusahibiemail',
                '$tapusahibivekiliad','$tapusahibivekilisoyad','$kiracidurumu')";
        $result_query = mysqli_query($db, $sql);

        if ($result_query) {

            $_SESSION["bagimsizbolum_ekleme"] = "basarili";
            header("Location:bagimsizbolum_ekle.php");
        } else {

            $_SESSION["bagimsizbolum_ekleme"] = "hatali";
            header("Location:bagimsizbolum_ekle.php");

        }



    }


else {
        header("Location:extra_404_option1.html.php");
    }








?>




