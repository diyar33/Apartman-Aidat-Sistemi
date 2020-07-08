<?php










session_start();
include("db/connection.php");






if (isset($_POST["gayrimenkuladi"]) && isset($_POST["temsilci"]) && isset($_POST["denetci"]) && isset($_POST["adres"]) && isset($_POST["bagimsizbolumsayisi"])) {
    
    
    $gayrimenkuladi = $_POST["gayrimenkuladi"];
    $aciklama       = $_POST["aciklama"];
    $adres          = $_POST["adres"];
    $bagimsizbolumsayisi    = $_POST["bagimsizbolumsayisi"];

$arsa_paydasi=$_POST["arsapaydasi"];



    $temsilci=$_POST["temsilci"];
    $denetci=$_POST["denetci"];

    
    $karardefteri   = $_POST["karardefteri"];
    $isletmedefteri = $_POST["isletmedefteri"];
    $banka_adi      = $_POST["banka_adi"];
    $hesapadi       = $_POST["hesapadi"];
    $subekodu       = $_POST["subekodu"];
    $hesapno        = $_POST["hesapno"];
    $iban_no        = $_POST["iban_no"];
    $vergino        = $_POST["vergino"];


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

    
    
    if (empty($gayrimenkuladi) ||  empty($adres) || (empty($bagimsizbolumsayisi) && $bagimsizbolumsayisi!=0) || empty($temsilci) || empty($denetci)) {
        $_SESSION["anagayrimenkul_ekleme"] = "degerlerbos";
        header("Location:anagayrimenkul_ekle.php");
        exit;
    }
    
    
    
    $sql          = "insert into tb_anagayrimenkul
    (ad,payda,aciklama,adres,karardefteri,isletmedefteri,banka_adi,hesapadi,subekodu,hesapno,iban_no,vergino,temsilci,denetci,bagimsizbolumsayisi) 
    values('$gayrimenkuladi','$arsa_paydasi','$aciklama','$adres','$karardefteri','$isletmedefteri','$banka_adi','$hesapadi','$subekodu','$hesapno','$iban_no','$vergino','$temsilci','$denetci','$bagimsizbolumsayisi')";

    $result_query = mysqli_query($db, $sql);

    if (!$result_query) {
        $_SESSION["anagayrimenkul_ekleme"] = "hatali";
        header("Location:anagayrimenkul_ekle.php");
        
    } 
    else {

 $_SESSION["anagayrimenkul_ekleme"] = "basarili";
        header("Location:anagayrimenkul_ekle.php");

}
}
else
{
header("Location:extra_404_option1.html");
}


?>




