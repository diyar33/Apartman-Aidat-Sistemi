<?php
ob_start();
session_start();
include("db/connection.php");

 ?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Page Layouts - Blank Page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<?php include'page_flash.php'; ?>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../assets/admin/layout/css/themes/blue.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->
<link id="style_color" href="../../assets/admin/layout/css/themes/blue.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
<!-- BEGIN HEADER -->
<?php include 'header.php'; ?>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<!-- BEGIN SIDEBAR MENU -->
		<?php include 'side_menu.php'; ?>
		<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->

			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Aidat Tablosu
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.php">Anasayfa</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="">İşlemler</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="">	Aidat Tablosu</a>
					</li>
				</ul>




			</div>


			<?php
if (isset($_POST["gm_ad"])) {
	$gm_ad=$_POST["gm_ad"];
}
if (isset($_POST["gm_id_no"])) {
	$gm_id_no=$_POST["gm_id_no"];
}

if (isset($_POST["tarih"])) {
	$tarih=$_POST["tarih"];
}




if (isset($_POST["giderler"])) {
$giderler = $_POST['giderler'];
}




			 ?>

			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">

						<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box  blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Aidat Tablosu(<strong style="color:#000000;"> <?php echo $gm_ad; ?> </strong>)
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="aidat_tablosu">
							<thead>
							<tr>
								<th>
									Bilgiler
								</th>

							</tr>
							</thead>
							<tbody>
						<?php




// Değişken Tanımlamalar
$temp_gider_id="";
$sayac=0;
$bagimsizbolum_ikamet_eden_toplam_tutar=0;
$bagimsizbolum_tapusahibi_toplam_tutar=0;
$toplam_ikamet_eden_tutar=0;
$toplam_tapusahibi_tutar=0;

if (!empty($giderler)) {
    foreach ($giderler as $g_id) {

        $temp_gider_id = $temp_gider_id . '\'' . $g_id . '\',';

        $sayac++;
    }
    $temp_gider_id = rtrim($temp_gider_id, ',');

$sayac=0;



$sql2="select id from tb_bagimsizbolum
where gayrimenkulid='$gm_id_no' ORDER BY kapino";


$result2 = $db->query($sql2);
 while($row = $result2->fetch_assoc()) {

 	$temp_bb_id[$sayac]=$row["id"];
 	$sayac++;

 }



 foreach ($temp_bb_id as $bb_id) {

     $sql="select
       id,
kapino,
kiraciad,
kiracisoyad,
tapusahibiad,
tapusahibisoyad,
       pay,
kiracidurumu
from tb_bagimsizbolum 
where id = '$bb_id' ";




// Aidat Kişi Bilgilerinin çekildiği Sorgu

$result= $db->query($sql);
$row_aidat_kisi_bilgisi = $result->fetch_array(MYSQLI_BOTH);












$sayac_satir_sayisi=1;



echo '<tr align="center">';
echo '<td>';
$gelen_tarih=$tarih;
$temp_tarih_array=explode('-', $tarih);
$tarih_ay=$temp_tarih_array[1];



switch ($tarih_ay) {
		case '01':
		$tarih_ay="Ocak";
		break;
		case '02':
		$tarih_ay="Şubat";
		break;
		case '03':
		$tarih_ay="Mart";
		break;
		case '04':
		$tarih_ay="Nisan";
		break;
		case '05':
		$tarih_ay="Mayıs";
		break;
		case '06':
		$tarih_ay="Haziran";
		break;
		case '07':
		$tarih_ay="Temmuz";
		break;
		case '08':
		$tarih_ay="Ağustos";
		break;
		case '09':
		$tarih_ay="Eylül";
		break;
		case '10':
		$tarih_ay="Ekim";
		break;
		case '11':
		$tarih_ay="Kasım";
		break;
		case '12':
		$tarih_ay="Aralık";
		break;


	default:
		$tarih_ay="";
		break;
}

if ($row_aidat_kisi_bilgisi["kiracidurumu"]==0) {
	$genel_kisi_bilgisi=$row_aidat_kisi_bilgisi["tapusahibiad"]."&nbsp;".$row_aidat_kisi_bilgisi["tapusahibisoyad"]."&nbsp;".$row_aidat_kisi_bilgisi["kapino"]."&nbsp;No"."'"."lu Daire";

}
else
{
		$genel_kisi_bilgisi=$row_aidat_kisi_bilgisi["kiraciad"]."&nbsp;".$row_aidat_kisi_bilgisi["kiracisoyad"]."&nbsp;".$row_aidat_kisi_bilgisi["kapino"]."&nbsp;No"."'"."lu Daire";

}



echo '<table bgcolor="#000000"  style="text-align:center;width:768px;">';
			echo '<tr bgcolor="#FFFFFF">';
echo '<td><img src="logo1.png"></td>';
echo '<td><font color="red" size="5"> '.$gm_ad.'&nbsp;Apartmanı&nbsp;'.$temp_tarih_array[0].' '.$tarih_ay.'  &nbsp;AYI AİDAT TABLOSU</font></td>';
     echo '</tr>';
     echo '<tr bgcolor="#FFFFFF"> ';
     echo '<td colspan="4" ><font style="font-weight: bold" size="4"> '.$genel_kisi_bilgisi.'</font></td>';
     echo '</tr>';
     echo '</table>';



     $sql="select 
tb_agm_gd.cinsi,tb_agm_gd.aciklamasi,
tb_agm_gd.toplamtutar,
tb_agm_gd.dagitimyeri,
tb_bb_borc.tutar,
       tb_tks.taksit_num,
       tb_acklma.aciklama,
       tb_agm_gd.taksit_sayisi
from tb_bagimsizbolum_borcu tb_bb_borc
inner join tb_anagayrimenkul_giderler tb_agm_gd
on tb_bb_borc.gid=tb_agm_gd.id
inner join tb_taksit tb_tks on
tb_tks.id=tb_bb_borc.taksit_id
inner join tb_gideraciklama tb_acklma
on tb_acklma.id=tb_agm_gd.aciklamasi
where  tb_agm_gd.id in ($temp_gider_id) and  tb_bb_borc.bbid='$bb_id' and tb_tks.taksit_ay='$gelen_tarih' 
order by tb_bb_borc.bbid";
     $result = $db->query($sql);



$sayac_satir_sayisi=0;

if ($result->num_rows>0  ) {

echo '<table bgcolor="#000000"  border="1" style="text-align:center;width:768px;">';

			echo '<tr bgcolor="#FFFFFF">';
			echo '<td colspan="2" rowspan="2">#</td>';
			echo '<td colspan="2" rowspan="2">APARTMAN / SİTE GİDERLERİ</td>';
			echo '<td rowspan="2">TUTAR</td>';
			echo '<td colspan="2">BİR BAĞIMSIZ BÖLÜME DÜŞEN PAY</td>';
    echo '<tr><td>İkamet Eden</td>';
    echo '<td>Tapu Sahibi</td></tr>';
    echo '</tr>';




    $genel_toplam_tutar=0;
    $sabit_toplam_tutar=0;
    $ikamet_eden_sabit_toplam_tutar=0;
    $tapu_sahibi_sabit_toplam_tutar=0;

    $sorgu=mysqli_query($db,"select * from tb_sabit_gider where gm_id='$gm_id_no'");

    while ($par2=mysqli_fetch_array($sorgu)){
        $sayac_satir_sayisi++;

        echo '<tr bgcolor="#FFFFFF">';
        echo '<td colspan="2">'.$sayac_satir_sayisi.'</td>';

        echo '<td>'.$par2["gider_cinsi"].'</td>';
        echo '<td><font color="red">(Ayda 1 Kez Yazılır)</font></td>';
        echo '<td>'.$par2["yapilacak_is_ucreti"].'&nbsp;TL</td>';

        $muaf_olmayan_paytoplam=0;
        $muaf_paytoplam=0;
$ikamet_eden_tutar=0;
$tapusahibi_tutar=0;
        $sayac=0;
        $sayac2=0;
        $muaf=explode("-",$par2["muaf_bolum"]);
        array_shift($muaf);
        $muaf_olmayan=explode("-",$par2["muaf_olmayan_bolum"]);
        array_shift($muaf_olmayan);
if ($par2["dagitim_parametresi"]==0){
        $sorgu2=mysqli_query($db,"select tb_bb.id as no,(tb_bb.pay/tb_gm.payda) as arsapay from tb_anagayrimenkul tb_gm
inner join tb_bagimsizbolum tb_bb
on tb_bb.gayrimenkulid=tb_gm.id
    where tb_bb.gayrimenkulid='$gm_id_no'");
        while ($par=mysqli_fetch_array($sorgu2)){
            foreach ($muaf_olmayan as $item) {
                if ($item==$par["no"]){
                    $muaf_olmayan_paytoplam+=$par["arsapay"];
                }
            }
            foreach ($muaf as $item2) {
                if ($item2==$par["no"]){
                    $muaf_paytoplam+=$par["arsapay"];
                }

            }

        }

        $muaf_carpani=$muaf_paytoplam/$muaf_olmayan_paytoplam;
        foreach ($muaf_olmayan as $id_sorgula) {
            if($id_sorgula==$bb_id){


        $par3=mysqli_fetch_array(mysqli_query($db,"select tb_bb.id as no,(tb_bb.pay/tb_gm.payda) as arsapay from tb_bagimsizbolum tb_bb
inner join tb_anagayrimenkul tb_gm
on tb_bb.gayrimenkulid=tb_gm.id
    where tb_bb.id='$bb_id'"));
$daire_pay=$par3["arsapay"];
        $daire_pay=($daire_pay*$muaf_carpani)+$daire_pay;
        $son_tutar=round($daire_pay*$par2["yapilacak_is_ucreti"],2);
        if ($par2["dagitim_yeri"]==0){
echo '<td>';
echo $son_tutar;
echo '&nbsp;TL</td>';
            echo '<td>0.00&nbsp;TL</td>';
$ikamet_eden_tutar+=$son_tutar;
        }
        else
            {
        echo '<td>0.00&nbsp;TL</td>';
        echo '<td>';
echo $son_tutar;
            echo '&nbsp;TL</td>';
$tapusahibi_tutar+=$son_tutar;
        }
    }

    }
        foreach ($muaf as $id_sorgula2) {
            if ($id_sorgula2 == $bb_id) {

                echo '<td>0.00&nbsp;TL</td>';
                echo '<td>0.00&nbsp;TL</td>';

            }

        }   }
else{
     $son_tutar=round($par2["yapilacak_is_ucreti"]/count($muaf_olmayan),2);
     foreach ($muaf_olmayan as $id_sorgula){
         if ($id_sorgula==$bb_id){
                if ($par2["dagitim_yeri"]==0){
echo '<td>';
echo $son_tutar;
echo '&nbsp;TL</td>';
            echo '<td>0.00&nbsp;TL</td>';
$ikamet_eden_tutar+=$son_tutar;
        }
        else
            {
        echo '<td>0.00&nbsp;TL</td>';
        echo '<td>';
echo $son_tutar;
            echo '&nbsp;TL</td>';
$tapusahibi_tutar+=$son_tutar;
        }
    }


         }
             foreach ($muaf as $id_sorgula2) {
            if ($id_sorgula2 == $bb_id) {

                echo '<td>0.00&nbsp;TL</td>';
                echo '<td>0.00&nbsp;TL</td>';

            }

        }
     }







        $ikamet_eden_sabit_toplam_tutar+=$ikamet_eden_tutar;
        $tapu_sahibi_sabit_toplam_tutar+=$tapusahibi_tutar;
        $sabit_toplam_tutar+=$par2["yapilacak_is_ucreti"];
    }






    while($row = $result->fetch_assoc()) {
        $sayac_satir_sayisi++;

        if ($row["dagitimyeri"]=='1')
                     {
                         $bagimsizbolum_tapusahibi_toplam_tutar+=$row["tutar"];
                         $toplam_tapusahibi_tutar+=$row["toplamtutar"];
                     }
                 else if ($row["dagitimyeri"]=='0'){
                         $bagimsizbolum_ikamet_eden_toplam_tutar+=$row["tutar"];
                         $toplam_ikamet_eden_tutar+=$row["toplamtutar"];}

        echo '<tr bgcolor="white">';
        echo '<td colspan="2">'.$sayac_satir_sayisi.'</td>';
                     echo '<td>'.$row["cinsi"].'&nbsp;('.$row["taksit_num"].'/'.$row["taksit_sayisi"].')</td>';
                     echo '<td><font color="red">'.$row["aciklama"].'</font></td>';
                     echo '<td>'.$row["toplamtutar"].' TL</td>';

                     if ($row["dagitimyeri"]=='1' ){
                         echo '<td>0.00&nbsp;TL</td>';
                         echo '<td>'.$row["tutar"].' TL</td>';}
                 else if ($row["dagitimyeri"]=='0'){
                         echo '<td>'.$row["tutar"].' TL</td>';
                         echo '<td>0.00&nbsp;TL</td>';}
                     echo '</tr>';
					$genel_toplam_tutar+=$row["toplamtutar"];
				}



    $sorgu1=mysqli_query($db,"select  (tb_tahmin.tahmini_tutar-tb_tahmin.net_tutar) as 'fark',
       tb_agm_g.cinsi,
       tb_agm_g.dagitimyeri,
                tb_tahmin_b.borc_tutar
       from tb_tahmini_yazilan_borcu tb_tahmin_b inner join tb_tahmini_yazilan tb_tahmin on 
tb_tahmin.id=tb_tahmin_b.tahmini_yazilan_id 
inner join tb_anagayrimenkul_giderler tb_agm_g on 
tb_tahmin.gider_id=tb_agm_g.id
where tb_tahmin_b.bb_id='$bb_id' and tb_tahmin.yansitilacak_ay='$gelen_tarih' and tb_tahmin.apt_id='$gm_id_no'
");
  $toplam_fark=0;
  $toplam_ikameteden=0;
  $toplam_tapusahibi=0;

    while ($par1=mysqli_fetch_array($sorgu1)) {
        $fark =round(-1*$par1["fark"],2);
        $sayac_satir_sayisi++;

        echo '<tr><td colspan="2">' . $sayac_satir_sayisi . '</td>';
        echo '<td>' . $par1["cinsi"] . '</td>';
        echo '<td><font color="red">(Tahmin Edilen Tutardan Yüksek Fatura Farkı)</font></td>';
        echo '<td>' . $fark . '&nbsp;TL</td>';

$dagitim_yeri=$par1["dagitimyeri"];
if ($dagitim_yeri==0){
    echo '<td>'.$par1["borc_tutar"].'&nbsp;TL</td>';
    echo '<td>0.00 TL</td>';
    $toplam_ikameteden+=$par1["borc_tutar"];

}
else{
    echo '<td>0.00</td>';
    echo '<td>'.$par1["borc_tutar"].'&nbsp;TL</td>';
    $toplam_ikameteden+=$par1["borc_tutar"];
}


$toplam_fark+=$fark;

    }




			echo '<tr>';
			echo '<td colspan="4" >BİR BAĞIMSIZ BÖLÜMÜN AİDATI</td>';
    echo '<td><font style="font-weight: bold">'.($genel_toplam_tutar+$sabit_toplam_tutar+$toplam_fark).' TL</font></td>';
    echo '<td><font style="font-weight: bold">'.($bagimsizbolum_ikamet_eden_toplam_tutar+$ikamet_eden_sabit_toplam_tutar+$toplam_ikameteden).' TL</font></td>';
    echo '<td><font style="font-weight: bold">'.($bagimsizbolum_tapusahibi_toplam_tutar+$tapu_sahibi_sabit_toplam_tutar+$toplam_tapusahibi).' TL</font></td>';
			echo '</tr> ';
			echo '</table>	';


			$sql5="select
tb_agm.banka_adi,
tb_agm.hesapadi,
tb_agm.subekodu,
tb_agm.hesapno,
tb_agm.iban_no
from tb_anagayrimenkul tb_agm
where tb_agm.id='$gm_id_no'";



// Aidat Kişi Bilgilerinin çekildiği Sorgu

$result5= $db->query($sql5);
$row_aidat_odeme_bilgileri = $result->fetch_array(MYSQLI_BOTH);


 			echo '<table bgcolor="#000000"  border="1" style="text-align:center;width:768px;">';
			echo '<tr align="center" bgcolor="#FFFFFF">';
			echo '<td colspan="4" >ÖDEME BİLGILERİ</td>';
			echo '</tr>';
			echo '<tr bgcolor="#FFFFFF">';
			echo '<td >'.$row_aidat_odeme_bilgileri["banka_adi"].' İBAN NO</td>';
			echo '<td colspan="3">'.$row_aidat_odeme_bilgileri["iban_no"].'</td> ';
			echo '</tr>';
			echo '<tr bgcolor="#FFFFFF"> ';
			echo '<td >'.$row_aidat_odeme_bilgileri["banka_adi"].' HESAP NO</td>';
			echo '<td > '.$row_aidat_odeme_bilgileri["hesapno"].' </td> ';
			echo '<td >'.$row_aidat_odeme_bilgileri["banka_adi"].' ŞUBE KODU</td> ';
			echo '<td >'.$row_aidat_odeme_bilgileri["subekodu"].'</td>  ';
			echo '</tr>';
			echo '<tr bgcolor="#FFFFFF">';
			echo '<td >HESAP ADI</td>';
			echo '<td colspan="3"> '.$row_aidat_odeme_bilgileri["hesapadi"].'</td> ';
			echo '</tr>';
			echo '</table>';
			echo '<table bgcolor="#000000"  border="1" style="text-align:center;width:768px;"> ';
			echo '<tr align="center" bgcolor="#FFFFFF">';
			echo '<td colspan="4" >İLETİŞİM BİLGILERİ</td>';
			echo '</tr>';
			echo '<tr bgcolor="#FFFFFF"> ';
			echo '<td >7/24</td>';
			echo '<td > 5234234234 </td> ';
			echo '<td >MUHASEBE</td> ';
			echo '<td >  12341235  </td>  ';
			echo '</tr>';
			echo '<tr bgcolor="#FFFFFF"> ';
			echo '<td >SAHA SORUMLUSU</td>';
			echo '<td > 234234234 </td> ';
			echo '<td >TAHSİLAT</td> ';
			echo '<td >  12341235  </td>  ';
			echo '</tr>';
			echo '<tr bgcolor="#FFFFFF">';
			echo '<td >İNTERNET ADRESİMİZ</td>';
			echo '<td colspan="3"> wwww..... </td> ';
			echo '</tr>';
			echo '<tr bgcolor="#FFFFFF">';
			echo '<td >E-MAİL ADRESİMİZ</td>';
			echo '<td colspan="3"> ...@dincer.com </td> ';
			echo '</tr>';
			echo '<tr bgcolor="#FFFFFF"> ';
			echo '<td colspan="4"><h4><strong> ÖNEMLİ HUSUSLAR OKUYUNUZ</strong></h4> </td> ';
			echo '</tr>';
    echo '<tr bgcolor="#FFFFFF"> ';
    echo '<td colspan="4"><strong> BİR ÖNCEKİ AYIN TAHMİNİ YAZILAN GİDERLERİ</strong> </td> ';
    echo '</tr>';
    echo '<tr bgcolor="#FFFFFF"> ';
    echo '<td >Açıklama</td>';
    echo '<td > Tahmin Edilen Tutar </td> ';
    echo '<td >Net Gerçekleşen</td> ';
    echo '<td >  Fark  </td>  ';
    echo '</tr>';
$sorgu3=mysqli_query($db,"select tb_agm_g.cinsi,tb_tahmin.tahmini_tutar,tb_tahmin.net_tutar from tb_tahmini_yazilan tb_tahmin inner join tb_anagayrimenkul_giderler tb_agm_g on
tb_agm_g.id=tb_tahmin.gider_id
where tb_tahmin.yansitilacak_ay='$gelen_tarih' and tb_tahmin.apt_id='$gm_id_no'
");
    while ($par4=mysqli_fetch_array($sorgu3)){
        echo '<tr bgcolor="#FFFFFF"> ';
        echo '<td >'.$par4["cinsi"].'</td>';
        echo '<td > '.$par4["tahmini_tutar"].' </td> ';
        echo '<td >'.$par4["net_tutar"].'</td> ';
        echo '<td >'.($par4["tahmini_tutar"]-$par4["net_tutar"]).'</td>  ';
        echo '</tr>';
    }

    echo '</table>';
			echo '&nbsp;';
			echo '	<table border="0">	';
			echo '<tr><td><font style="font-weight: bold" size="5">BİR BAĞIMSIZ BÖLÜMÜN TOPLAM AİDAT TUTARI : </font></td>';
			echo '<td>&nbsp;<font style="font-weight: bold" size="5">'.($bagimsizbolum_ikamet_eden_toplam_tutar+$ikamet_eden_sabit_toplam_tutar+$tapu_sahibi_sabit_toplam_tutar+$bagimsizbolum_tapusahibi_toplam_tutar+$toplam_tapusahibi+$toplam_ikameteden).'&nbsp;TL</font></td>';
    echo '	</tr></table>	';




    echo '<p style="text-align:center;width:768px;"> </p>';
}

	echo '</td>';
	echo '</tr>';


	$bagimsizbolum_ikamet_eden_toplam_tutar=0;
	$bagimsizbolum_tapusahibi_toplam_tutar=0;

 }
}

//Giderler Boş İse

else
    {


        $sql2="select id from tb_bagimsizbolum
where gayrimenkulid='$gm_id_no' ORDER BY kapino";


        $result2 = $db->query($sql2);
        while($row = $result2->fetch_assoc()) {

            $temp_bb_id[$sayac]=$row["id"];
            $sayac++;

        }



        foreach ($temp_bb_id as $bb_id) {

            $sql="select
       id,
kapino,
kiraciad,
kiracisoyad,
tapusahibiad,
tapusahibisoyad,
       pay,
kiracidurumu
from tb_bagimsizbolum 
where id = '$bb_id' ";




// Aidat Kişi Bilgilerinin çekildiği Sorgu

            $result= $db->query($sql);
            $row_aidat_kisi_bilgisi = $result->fetch_array(MYSQLI_BOTH);












            $sayac_satir_sayisi=1;



            echo '<tr align="center">';
            echo '<td>';

            $temp_tarih_array=explode('-', $tarih);
            $tarih_ay=$temp_tarih_array[1];



            switch ($tarih_ay) {
                case '01':
                    $tarih_ay="Ocak";
                    break;
                case '02':
                    $tarih_ay="Şubat";
                    break;
                case '03':
                    $tarih_ay="Mart";
                    break;
                case '04':
                    $tarih_ay="Nisan";
                    break;
                case '05':
                    $tarih_ay="Mayıs";
                    break;
                case '06':
                    $tarih_ay="Haziran";
                    break;
                case '07':
                    $tarih_ay="Temmuz";
                    break;
                case '08':
                    $tarih_ay="Ağustos";
                    break;
                case '09':
                    $tarih_ay="Eylül";
                    break;
                case '10':
                    $tarih_ay="Ekim";
                    break;
                case '11':
                    $tarih_ay="Kasım";
                    break;
                case '12':
                    $tarih_ay="Aralık";
                    break;


                default:
                    $tarih_ay="";
                    break;
            }

            if ($row_aidat_kisi_bilgisi["kiracidurumu"]==0) {
                $genel_kisi_bilgisi=$row_aidat_kisi_bilgisi["tapusahibiad"]."&nbsp;".$row_aidat_kisi_bilgisi["tapusahibisoyad"]."&nbsp;".$row_aidat_kisi_bilgisi["kapino"]."&nbsp;No"."'"."lu Daire";

            }
            else
            {
                $genel_kisi_bilgisi=$row_aidat_kisi_bilgisi["kiraciad"]."&nbsp;".$row_aidat_kisi_bilgisi["kiracisoyad"]."&nbsp;".$row_aidat_kisi_bilgisi["kapino"]."&nbsp;No"."'"."lu Daire";

            }



            echo '<table bgcolor="#000000"  style="text-align:center;width:768px;">';
            echo '<tr bgcolor="#FFFFFF">';
            echo '<td><img src="logo1.png"></td>';
            echo '<td><font color="red" size="5"> '.$gm_ad.'&nbsp;Apartmanı&nbsp;'.$temp_tarih_array[0].' '.$tarih_ay.'  &nbsp; AYI AİDAT TABLOSU</font></td>';
            echo '</tr>';
            echo '<tr bgcolor="#FFFFFF"> ';
            echo '<td colspan="4" ><font style="font-weight: bold" size="4"> '.$genel_kisi_bilgisi.'</font></td>';
            echo '</tr>';
            echo '</table>';








            $sayac_satir_sayisi=0;

            echo '<table bgcolor="#000000"  border="1" style="text-align:center;width:768px;">';

                echo '<tr bgcolor="#FFFFFF">';
                echo '<td colspan="2" rowspan="2">#</td>';
                echo '<td colspan="2" rowspan="2">APARTMAN / SİTE GİDERLERİ</td>';
                echo '<td rowspan="2">TUTAR</td>';
                echo '<td colspan="2">BİR BAĞIMSIZ BÖLÜME DÜŞEN PAY</td>';
                echo '<tr><td>İkamet Eden</td>';
                echo '<td>Tapu Sahibi</td></tr>';
                echo '</tr>';


                $genel_toplam_tutar=0;
                $sabit_toplam_tutar=0;
                $ikamet_eden_sabit_toplam_tutar=0;
                $tapu_sahibi_sabit_toplam_tutar=0;

                $sorgu=mysqli_query($db,"select * from tb_sabit_gider where gm_id='$gm_id_no'");

                while ($par2=mysqli_fetch_array($sorgu)){
                    $sayac_satir_sayisi++;

                    echo '<tr bgcolor="#FFFFFF">';
                    echo '<td colspan="2">'.$sayac_satir_sayisi.'</td>';

                    echo '<td>'.$par2["gider_cinsi"].'</td>';
                    echo '<td><font color="red">(Ayda 1 Kez Yazılır)</font></td>';
                    echo '<td>'.$par2["yapilacak_is_ucreti"].'</td>';

                    $muaf_olmayan_paytoplam=0;
                    $muaf_paytoplam=0;
                    $ikamet_eden_tutar=0;
                    $tapusahibi_tutar=0;
                    $sayac=0;
                    $sayac2=0;
                    $muaf=explode("-",$par2["muaf_bolum"]);
                    array_shift($muaf);
                    $muaf_olmayan=explode("-",$par2["muaf_olmayan_bolum"]);
                    array_shift($muaf_olmayan);
                    if ($par2["dagitim_parametresi"]==0){
                        $sorgu2=mysqli_query($db,"select tb_bb.id as no,(tb_bb.pay/tb_gm.payda) as arsapay from tb_anagayrimenkul tb_gm
inner join tb_bagimsizbolum tb_bb
on tb_bb.gayrimenkulid=tb_gm.id
    where tb_bb.gayrimenkulid='$gm_id_no'");
                        while ($par=mysqli_fetch_array($sorgu2)){
                            foreach ($muaf_olmayan as $item) {
                                if ($item==$par["no"]){
                                    $muaf_olmayan_paytoplam+=$par["arsapay"];
                                }
                            }
                            foreach ($muaf as $item2) {
                                if ($item2==$par["no"]){
                                    $muaf_paytoplam+=$par["arsapay"];
                                }

                            }

                        }

                        $muaf_carpani=$muaf_paytoplam/$muaf_olmayan_paytoplam;
                        foreach ($muaf_olmayan as $id_sorgula) {
                            if($id_sorgula==$bb_id){


                                $par3=mysqli_fetch_array(mysqli_query($db,"select tb_bb.id as no,(tb_bb.pay/tb_gm.payda) as arsapay from tb_bagimsizbolum tb_bb
inner join tb_anagayrimenkul tb_gm
on tb_bb.gayrimenkulid=tb_gm.id
    where tb_bb.id='$bb_id'"));
                                $daire_pay=$par3["arsapay"];
                                $daire_pay=($daire_pay*$muaf_carpani)+$daire_pay;
                                $son_tutar=round($daire_pay*$par2["yapilacak_is_ucreti"],2);
                                if ($par2["dagitim_yeri"]==0){
                                    echo '<td>';
                                    echo $son_tutar;
                                    echo '&nbsp;TL</td>';
                                    echo '<td>0.00&nbsp;</td>';
                                    $ikamet_eden_tutar+=$son_tutar;
                                }
                                else
                                {
                                    echo '<td>0.00&nbsp;</td>';
                                    echo '<td>';
                                    echo $son_tutar;
                                    echo '&nbsp;TL</td>';
                                    $tapusahibi_tutar+=$son_tutar;
                                }
                            }

                        }
                        foreach ($muaf as $id_sorgula2) {
                            if ($id_sorgula2 == $bb_id) {

                                echo '<td>0.00&nbsp;</td>';
                                echo '<td>0.00&nbsp;</td>';

                            }

                        }   }
                    else{
                        $son_tutar=round($par2["yapilacak_is_ucreti"]/count($muaf_olmayan),2);
                        foreach ($muaf_olmayan as $id_sorgula){
                            if ($id_sorgula==$bb_id){
                                if ($par2["dagitim_yeri"]==0){
                                    echo '<td>';
                                    echo $son_tutar;
                                    echo '&nbsp;TL</td>';
                                    echo '<td>0.00&nbsp;</td>';
                                    $ikamet_eden_tutar+=$son_tutar;
                                }
                                else
                                {
                                    echo '<td>0.00&nbsp;</td>';
                                    echo '<td>';
                                    echo $son_tutar;
                                    echo '&nbsp;TL</td>';
                                    $tapusahibi_tutar+=$son_tutar;
                                }
                            }


                        }
                        foreach ($muaf as $id_sorgula2) {
                            if ($id_sorgula2 == $bb_id) {

                                echo '<td>0.00&nbsp;</td>';
                                echo '<td>0.00&nbsp;</td>';

                            }

                        }
                    }



                    $ikamet_eden_sabit_toplam_tutar+=$ikamet_eden_tutar;
                    $tapu_sahibi_sabit_toplam_tutar+=$tapusahibi_tutar;
                    $sabit_toplam_tutar+=$par2["yapilacak_is_ucreti"];
                }
                echo '<tr>';
                echo '<td colspan="4" >BİR BAĞIMSIZ BÖLÜMÜN AİDATI</td>';
                echo '<td><font style="font-weight: bold">'.($genel_toplam_tutar+$sabit_toplam_tutar).' TL</font></td>';
                echo '<td><font style="font-weight: bold">'.($bagimsizbolum_ikamet_eden_toplam_tutar+$ikamet_eden_sabit_toplam_tutar).' TL</font></td>';
                echo '<td><font style="font-weight: bold">'.($bagimsizbolum_tapusahibi_toplam_tutar+$tapu_sahibi_sabit_toplam_tutar).' TL</font></td>';
                echo '</tr> ';
                echo '</table>	';




                $sql5="select
tb_agm.banka_adi,
tb_agm.hesapadi,
tb_agm.subekodu,
tb_agm.hesapno,
tb_agm.iban_no
from tb_anagayrimenkul tb_agm
where tb_agm.id='$gm_id_no'";



// Aidat Kişi Bilgilerinin çekildiği Sorgu

                $result5= $db->query($sql5);
                $row_aidat_odeme_bilgileri = $result->fetch_array(MYSQLI_BOTH);


                echo '<table bgcolor="#000000"  border="1" style="text-align:center;width:768px;">';
                echo '<tr align="center" bgcolor="#FFFFFF">';
                echo '<td colspan="4" >ÖDEME BİLGILERİ</td>';
                echo '</tr>';
                echo '<tr bgcolor="#FFFFFF">';
                echo '<td >'.$row_aidat_odeme_bilgileri["banka_adi"].' İBAN NO</td>';
                echo '<td colspan="3">'.$row_aidat_odeme_bilgileri["iban_no"].'</td> ';
                echo '</tr>';
                echo '<tr bgcolor="#FFFFFF"> ';
                echo '<td >'.$row_aidat_odeme_bilgileri["banka_adi"].' HESAP NO</td>';
                echo '<td > '.$row_aidat_odeme_bilgileri["hesapno"].' </td> ';
                echo '<td >'.$row_aidat_odeme_bilgileri["banka_adi"].' ŞUBE KODU</td> ';
                echo '<td >'.$row_aidat_odeme_bilgileri["subekodu"].'</td>  ';
                echo '</tr>';
                echo '<tr bgcolor="#FFFFFF">';
                echo '<td >HESAP ADI</td>';
                echo '<td colspan="3"> '.$row_aidat_odeme_bilgileri["hesapadi"].'</td> ';
                echo '</tr>';
                echo '</table>';
                echo '<table bgcolor="#000000"  border="1" style="text-align:center;width:768px;"> ';
                echo '<tr align="center" bgcolor="#FFFFFF">';
                echo '<td colspan="4" >İLETİŞİM BİLGILERİ</td>';
                echo '</tr>';
                echo '<tr bgcolor="#FFFFFF"> ';
                echo '<td >7/24</td>';
                echo '<td > 5234234234 </td> ';
                echo '<td >MUHASEBE</td> ';
                echo '<td >  12341235  </td>  ';
                echo '</tr>';
                echo '<tr bgcolor="#FFFFFF"> ';
                echo '<td >SAHA SORUMLUSU</td>';
                echo '<td > 234234234 </td> ';
                echo '<td >TAHSİLAT</td> ';
                echo '<td >  12341235  </td>  ';
                echo '</tr>';
                echo '<tr bgcolor="#FFFFFF">';
                echo '<td >İNTERNET ADRESİMİZ</td>';
                echo '<td colspan="3"> wwww..... </td> ';
                echo '</tr>';
                echo '<tr bgcolor="#FFFFFF">';
                echo '<td >E-MAİL ADRESİMİZ</td>';
                echo '<td colspan="3"> ...@dincer.com </td> ';
                echo '</tr>';
                echo '<tr bgcolor="#FFFFFF"> ';
                echo '<td colspan="4"> ÖNEMLİ HUSUSLAR OKUYUNUZ </td> ';
                echo '</tr>';
                echo '</table>';
                echo '&nbsp;';
                echo '	<table border="0">	';
                echo '<tr><td><font style="font-weight: bold" size="5">BİR BAĞIMSIZ BÖLÜMÜN TOPLAM AİDAT TUTARI : </font></td>';
                echo '<td>&nbsp;<font style="font-weight: bold" size="5">'.($bagimsizbolum_ikamet_eden_toplam_tutar+$ikamet_eden_sabit_toplam_tutar+$tapu_sahibi_sabit_toplam_tutar+$bagimsizbolum_tapusahibi_toplam_tutar).'&nbsp;TL</font></td>';
                echo '	</tr></table>	';




                echo '<p style="text-align:center;width:768px;"> </p>';
            }

            echo '</td>';
            echo '</tr>';


            $bagimsizbolum_ikamet_eden_toplam_tutar=0;
            $bagimsizbolum_tapusahibi_toplam_tutar=0;



}


						 ?>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					<!-- BEGIN EXAMPLE TABLE PORTLET-->

					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>





















				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>

	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->

	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include 'footer.php'; ?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/admin/pages/scripts/table-advanced.js"></script>
<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   TableAdvanced.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

