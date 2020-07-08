<?php
session_start();
include("db/connection.php");






if (isset($_POST["gayrimenkuladi"]) && isset($_POST["aciklama"]) && isset($_POST["adres"])) {
    
        $gm_id=$_POST["gm_id"];

    $gayrimenkuladi = $_POST["gayrimenkuladi"];
    $aciklama       = $_POST["aciklama"];
    $adres          = $_POST["adres"];
    $bagimsizbolumsayisi=$_POST["bagimsizbolumsayisi"];


    $arsa_paydasi=$_POST["arsapaydasi"];





    $karardefteri   = $_POST["karardefteri"];
    $isletmedefteri = $_POST["isletmedefteri"];
    $banka_adi      = $_POST["banka_adi"];
    $hesapadi       = $_POST["hesapadi"];
    $subekodu       = $_POST["subekodu"];
    $hesapno        = $_POST["hesapno"];
    $iban_no        = $_POST["iban_no"];
    $vergino        = $_POST["vergino"];

    $temsilci      =$_POST["temsilci"];

    $denetci       =$_POST["denetci"];



     

                                 




                                    



    if ($karardefteri==0) {
        $karardefteri="alindi/onaylandi";
    }
    else
    {
        $karardefteri="eski defter teslim alindi";
    }


      if ($isletmedefteri==0) {
        $isletmedefteri="alindi/onaylandi";
    }
    else
    {
        $isletmedefteri="eski defter teslim alindi";
    }

    if (empty($gayrimenkuladi) || empty($adres) || empty($bagimsizbolumsayisi)) {
        $_SESSION["anagayrimenkul_duzenleme"] = "degerlerbos";
        header("Location:anagayrimenkul_duzenle.php?gm_id=".$gm_id);
        exit;
    }










    $sql= "update tb_anagayrimenkul
     set ad ='$gayrimenkuladi',   aciklama ='$aciklama',payda='$arsa_paydasi', yapilacak_isler_ucret='$yapilacak_isler_ucret',dagitimparametresi='$dagitim_parametresi',yapilacak_isler_yazilacak_yer='$yapilacak_isler_yazilacak_yer',  adres ='$adres',   karardefteri ='$karardefteri',   isletmedefteri ='$isletmedefteri',   banka_adi ='$banka_adi',   hesapadi ='$hesapadi',   subekodu ='$subekodu',   hesapno ='$hesapno',   iban_no ='$iban_no',   vergino ='$vergino', 
          temsilci ='$temsilci',denetci='$denetci',bagimsizbolumsayisi='$bagimsizbolumsayisi'
        where id='$gm_id'";



    $result_query = mysqli_query($db, $sql);


    if (!$result_query) {
        $_SESSION["anagayrimenkul_duzenleme"] = "hatali";
        header("Location:anagayrimenkul_duzenle.php?gm_id=".$gm_id);
          exit;
        
    } 
    else {
         $_SESSION["anagayrimenkul_duzenleme"] = "basarili";
        header("Location:anagayrimenkul_duzenle.php?gm_id=".$gm_id);
  
}
}
else
{
header("Location:extra_404_option1.html.php");



}


?>




