<?php
session_start();
include("db/connection.php");

$gm_id=$_GET["gm_id"];
if (empty($gm_id)) {
header("Location:anagayrimenkul_listesi.php");
exit;
}
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
<!--[if IE 8]>

<html lang="en" class="ie8 no-js">

<![endif]-->
<!--[if IE 9]>

<html lang="en" class="ie9 no-js">

<![endif]-->
<!--[if !IE]>
<!-->
<html lang="en">
  <!--
<![endif]-->
  <!-- BEGIN HEAD -->
  <head>
    <meta charset="Content-Type: text/html; charset=windows-1254"/>
    <title>
      Metronic | Page Layouts - Blank Page
    </title>
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
    <!-- END PAGE LEVEL SCRIPTS -->
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
        Anagayrimenkul Detay
      </h3>
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li>
            <i class="fa fa-home">
            </i>
            <a href="index.php">
              Anasayfa
            </a>
            <i class="fa fa-angle-right">
            </i>
          </li>
          <li>
            <a href="">
              İşlemler
            </a>
            <i class="fa fa-angle-right">
            </i>
          </li>
          <li>
            <a href="
<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
">
  Anagayrimenkul Detay Sayfası
                      </a>
                  </li>
              </ul>




          </div>

          <!-- END PAGE HEADER-->
          <!-- BEGIN PAGE CONTENT-->
          <div class="row">
            <div class="col-md-12">




              <?php
$sql="select
tb_agm_hb.ad,
tb_agm_hb.aciklama,
tb_agm_hb.adres,
tb_agm_hb.bagimsizbolumsayisi,
tb_agm_hb.banka_adi,
tb_agm_hb.hesapadi,
tb_agm_hb.subekodu,
tb_agm_hb.hesapno,
tb_agm_hb.iban_no,
tb_agm_hb.vergino,
tb_agm_hb.temsilci,
tb_agm_hb.denetci,
       tb_agm_hb.payda,
tb_agm_hb.karardefteri,
tb_agm_hb.isletmedefteri
from tb_anagayrimenkul tb_agm_hb
where id='$gm_id'";



// Hesap Bilgilerinin çekildiği Sorgu

$result= $db->query($sql);
$row_gm = $result->fetch_array(MYSQLI_BOTH);

if (!$result) {
header("Location:anagayrimenkul_listesi.php");
exit;

}

//Genel Bilgiler
/*$genel_bilgiler["ad"]="Değer Girilmemiş";
$genel_bilgiler["aciklama"]="Değer Girilmemiş";
$genel_bilgiler["adres"]="Değer Girilmemiş";*/




$genel_bilgiler["karardefteri"]="Değer Girilmemiş";
$genel_bilgiler["isletmedefteri"]="Değer Girilmemiş";
$genel_bilgiler["aciklama"]="Değer Girilmemiş";
$genel_bilgiler["bagimsizbolumsayisi"]="Değer Girilmemiş";


//Hesap Bilgileri
$hesap_bilgileri["banka_adi"]="Değer Girilmemiş";
$hesap_bilgileri["hesapadi"]="Değer Girilmemiş";
$hesap_bilgileri["subekodu"]="Değer Girilmemiş";
$hesap_bilgileri["hesapno"]	="Değer Girilmemiş";
$hesap_bilgileri["iban_no"]	="Değer Girilmemiş";
$hesap_bilgileri["vergino"]	="Değer Girilmemiş";





//Temsilci Bilgileri
$temsilci_denetci_bilgileri["temsilci"]="Değer Girilmemiş";
$temsilci_denetci_bilgileri["denetci"]="Değer Girilmemiş";




//Genel Bilgiler Ataması
if ($row_gm["ad"]) {
$genel_bilgiler["ad"]			=$row_gm["ad"];
}
if ($row_gm["aciklama"]) {
$genel_bilgiler["aciklama"]			=$row_gm["aciklama"];
}
if ($row_gm["adres"]) {
$genel_bilgiler["adres"]			=$row_gm["adres"];
}
if ($row_gm["bagimsizbolumsayisi"]) {
$genel_bilgiler["bagimsizbolumsayisi"] =$row_gm["bagimsizbolumsayisi"];
}
if ($row_gm["karardefteri"]) {
$genel_bilgiler["karardefteri"]			=$row_gm["karardefteri"];
}
if ($row_gm["isletmedefteri"]) {
$genel_bilgiler["isletmedefteri"]			=$row_gm["isletmedefteri"];
}


//Hesap Bilgileri Ataması

if ($row_gm["banka_adi"]) {
$hesap_bilgileri["banka_adi"]	=$row_gm["banka_adi"];
}
if ($row_gm["hesapadi"]) {
$hesap_bilgileri["hesapadi"]	=$row_gm["hesapadi"];
}
if ($row_gm["subekodu"]) {
$hesap_bilgileri["subekodu"]	=$row_gm["subekodu"];
}
if ($row_gm["hesapno"]) {
$hesap_bilgileri["hesapno"]	=$row_gm["hesapno"];
}
if ($row_gm["iban_no"]) {
$hesap_bilgileri["iban_no"]	=$row_gm["iban_no"];
}
if ($row_gm["vergino"]) {
$hesap_bilgileri["vergino"]	=$row_gm["vergino"];
}





//Temsilci-Denetci Bilgileri Ataması
if ($row_gm["temsilci"]) {
$temsilci_denetci_bilgileri["temsilci"]	=$row_gm["temsilci"];
}
if ($row_gm["denetci"]) {
$temsilci_denetci_bilgileri["denetci"]	=$row_gm["denetci"];
}














?>

                  <div class="portlet box blue">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="fa fa-gift">
                        </i>
                        Anagayrimenkul Detayı(
                        <strong style="color:#000000;">
                          <?php echo $row_gm[0]; ?>
                        </strong>
                        )
                      </div>
                      <div class="tools">
                        <a href="javascript:;" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                      </div>
                    </div>
                    <div class="portlet-body form">
                      <!-- BEGIN FORM-->
                      <form class="form-horizontal" role="form">
                        <div class="form-body">
                          <h2 class="margin-bottom-20">
                            Gayrimenkul Bilgileri
                          </h2>

                          <h3 class="form-section">
                            Genel Bilgiler
                          </h3>




                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Ad:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["ad"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Açıklama:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["aciklama"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Adres:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["adres"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Tanımlanan Bağımsız Bölüm Sayısı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["bagimsizbolumsayisi"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                 Arsapayı Oranları Toplamı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">

                                <?php

                                $sql="select 
sum(pay) as 'oran'
from tb_bagimsizbolum tb_bb
where tb_bb.gayrimenkulid ='$gm_id'";
                                $result= $db->query($sql);
                                $row_arsapayioranlari_toplami = $result->fetch_array(MYSQLI_BOTH);
                                if (($row_arsapayioranlari_toplami["oran"]+0.02)>= $row_gm["payda"] and ($row_arsapayioranlari_toplami["oran"]-0.02)<= $row_gm["payda"] ){
                                  echo round($row_gm["payda"]).'&nbsp;&nbsp;&nbsp;&nbsp;'.'<i class="fa fa-check"> </i>';
                                }
                                else
                                  echo 'Arsapayı oranlari toplamı  eşit değil<br />Gider Eklerken Dikkatli Olun';

                                     ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Karar Defteri:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["karardefteri"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  İşletme Defteri:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["isletmedefteri"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>



                          <h3 class="form-section">
                            Hesap Bilgileri
                          </h3>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Banka Adı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $hesap_bilgileri["banka_adi"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Hesap Adı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $hesap_bilgileri["hesapadi"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <!--/row-->
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Şube Kodu:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $hesap_bilgileri["subekodu"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Hesap No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $hesap_bilgileri["hesapno"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                          </div>
                          <!--/row-->
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Iban No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $hesap_bilgileri["iban_no"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Vergi No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $hesap_bilgileri["vergino"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                          </div>



                          <h3 class="form-section">
                            Temsilci - Denetçi Bilgileri
                          </h3>

                          <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Temsilci Bilgisi
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $temsilci_denetci_bilgileri["temsilci"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>


                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Denetçi Bilgisi
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $temsilci_denetci_bilgileri["denetci"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>



                          </div>






                          <!--/row-->
                            <h3 class="form-section">
                                Yapılacak İşler
                            </h3>



                            <?php
                            $sql="select * from tb_sabit_gider 
where gm_id='$gm_id' order by id";

                            // Hesap Bilgilerinin çekildiği Sorgu

                            $result= $db->query($sql);
                                if ($result->num_rows>0) {
                                $sayac=1;
                                while($row = $result->fetch_assoc()) {
                                    echo '
<div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
Sabit Gider Adı :                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                  '.$row["gider_cinsi"].'
                                  </p>
                                </div>
                              </div>
                            </div>


                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Ücreti :
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                                                    '.$row["yapilacak_is_ucreti"].'
                                  </p>
                                </div>
                              </div>
                            </div>



                          </div>';
                                    $sayac++;
                                }
                            }
                            else
                            {
                                echo '
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label class="control-label col-md-3">
</label>
<div class="col-md-9">
<p class="form-control-static">
Yapılacak İş Girilmemiş
</p>
</div>
</div>
</div>
</div>
';



                            }



                            ?>



                          <!--/row-->







                          <!--/row-->



                        </div>
                        <div class="form-actions">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                  <button type="button" onclick="window.location='anagayrimenkul_listesi.php';" class="btn green">
                                    Anagayrimenkul  Listesi
                                  </button>

                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                          </div>
                        </div>
                      </form>
                      <!-- END FORM-->
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
<script src="../../assets/global/plugins/respond.min.js">
</script>
<script src="../../assets/global/plugins/excanvas.min.js">
</script>

<![endif]-->
  <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript">
  </script>
  <script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript">
  </script>
  <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
  <script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript">
  </script>
  <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript">
  </script>
  <script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript">
  </script>
  <script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript">
  </script>
  <script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript">
  </script>
  <script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript">
  </script>
  <script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript">
  </script>
  <script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript">
  </script>
  <!-- END CORE PLUGINS -->
  <script src="../../assets/global/scripts/metronic.js" type="text/javascript">
  </script>
  <script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript">
  </script>
  <script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript">
  </script>
  <script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript">
  </script>
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js">
  </script>
  <!-- END PAGE LEVEL PLUGINS -->
  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="../../assets/admin/pages/scripts/form-samples.js">
  </script>
  <script>
    jQuery(document).ready(function() {

      Metronic.init();
      // init metronic core components
      Layout.init();
      // init current layout
      QuickSidebar.init();
      // init quick sidebar
      Demo.init();
      // init demo features
      FormSamples.init();
    }
                          );
  </script>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>