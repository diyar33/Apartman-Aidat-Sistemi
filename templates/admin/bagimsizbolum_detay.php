<?php 
session_start();
include("db/connection.php");

$bb_id=$_GET["bb_id"];
if (empty($bb_id)) {
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
        Bağımsızbölüm Detay
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
            <a href="">
  Bağımsızbölüm Detay Sayfası
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
*
from tb_bagimsizbolum tb_bb
where tb_bb.id='$bb_id'";



// Hesap Bilgilerinin çekildiği Sorgu

$result= $db->query($sql);
$row_gm = $result->fetch_array(MYSQLI_BOTH);

if (!$result) {
header("Location:bagimsizbolum_listesi.php");
exit;

}

//Genel Bilgiler
/*$genel_bilgiler["ad"]="Değer Girilmemiş";
$genel_bilgiler["aciklama"]="Değer Girilmemiş";
$genel_bilgiler["adres"]="Değer Girilmemiş";*/




$genel_bilgiler["cinsi"]="Değer Girilmemiş";
$genel_bilgiler["pay"]="Değer Girilmemiş";


//Kiracı Bilgileri
$kiraci_bilgileri["kiraciad"]="Değer Girilmemiş";
$kiraci_bilgileri["kiracisoyad"]="Değer Girilmemiş";
$kiraci_bilgileri["kiracitelno"]="Değer Girilmemiş";
$kiraci_bilgileri["kiracitcno"]  ="Değer Girilmemiş";
$kiraci_bilgileri["kiraciemail"]  ="Değer Girilmemiş";
//Tapu Sahibi Bilgileri
$tapusahibi_bilgileri["tapusahibiad"]="Değer Girilmemiş";
$tapusahibi_bilgileri["tapusahibisoyad"]="Değer Girilmemiş";
$tapusahibi_bilgileri["tapusahibitelno"]="Değer Girilmemiş";
$tapusahibi_bilgileri["tapusahibitcno"]	="Değer Girilmemiş";
$tapusahibi_bilgileri["tapusahibiemail"]	="Değer Girilmemiş";






//Temsilci Bilgileri
$tapusahibi_vekili_bilgileri["tapusahibivekiliad"]="Değer Girilmemiş";
$tapusahibi_vekili_bilgileri["tapusahibivekilisoyad"]="Değer Girilmemiş";




//Genel Bilgiler Ataması
if ($row_gm["kapino"]) {
$genel_bilgiler["kapino"]=$row_gm["kapino"];
}
if ($row_gm["cinsi"]) {
$genel_bilgiler["cinsi"] =$row_gm["cinsi"];
}
if ($row_gm["pay"]) {
$genel_bilgiler["pay"] =$row_gm["pay"];
}




//Kiraci Bilgileri Ataması

if ($row_gm["kiraciad"]) {
$kiraci_bilgileri["kiraciad"] =$row_gm["kiraciad"];
}
if ($row_gm["kiracisoyad"]) {
$kiraci_bilgileri["kiracisoyad"]  =$row_gm["kiracisoyad"];
}
if ($row_gm["kiracitelno"]) {
$kiraci_bilgileri["kiracitelno"]  =$row_gm["kiracitelno"];
}
if ($row_gm["kiracitcno"]) {
$kiraci_bilgileri["kiracitcno"] =$row_gm["kiracitcno"];
}
if ($row_gm["kiraciemail"]) {
$kiraci_bilgileri["kiraciemail"]  =$row_gm["kiraciemail"];
}

//Tapu Sahibi Bilgileri Ataması

if ($row_gm["tapusahibiad"]) {
$tapusahibi_bilgileri["tapusahibiad"]	=$row_gm["tapusahibiad"];
}
if ($row_gm["tapusahibisoyad"]) {
$tapusahibi_bilgileri["tapusahibisoyad"]	=$row_gm["tapusahibisoyad"];
}
if ($row_gm["tapusahibitelno"]) {
$tapusahibi_bilgileri["tapusahibitelno"]	=$row_gm["tapusahibitelno"];
}
if ($row_gm["tapusahibitcno"]) {
$tapusahibi_bilgileri["tapusahibitcno"]	=$row_gm["tapusahibitcno"];
}
if ($row_gm["tapusahibiemail"]) {
$tapusahibi_bilgileri["tapusahibiemail"]	=$row_gm["tapusahibiemail"];
}






//Temsilci-Denetci Bilgileri Ataması
if ($row_gm["tapusahibivekiliad"]) {
$tapusahibi_vekili_bilgileri["tapusahibivekiliad"]	=$row_gm["tapusahibivekiliad"];
}
if ($row_gm["tapusahibivekilisoyad"]) {
$tapusahibi_vekili_bilgileri["tapusahibivekilisoyad"]	=$row_gm["tapusahibivekilisoyad"];
}














?>
                  
                  <div class="portlet box blue">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="fa fa-gift">
                        </i>
                        Bağımsızbölüm Detayı(
                        <strong style="color:#000000;">
                          <?php echo 'Kapi No:  '.$row_gm["kapino"]; ?>
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
                                  Kapı No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["kapino"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Cinsi:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["cinsi"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Pay:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $genel_bilgiler["pay"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                   
                          
                          
                          
                          <h3 class="form-section">
                            Kiracı Bilgileri
                          </h3>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Kiracı Adı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $kiraci_bilgileri["kiraciad"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Kiracı Soyadı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $kiraci_bilgileri["kiracisoyad"]; ?>
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
                                  Kiracı Tel No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $kiraci_bilgileri["kiracitelno"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Kiracı TC No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $kiraci_bilgileri["kiracitcno"]; ?>
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
                                  Kiracı Email:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $kiraci_bilgileri["kiraciemail"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                           
                            <!--/span-->
                          </div>  


                           <h3 class="form-section">
                            Tapu Sahibi Bilgileri
                          </h3>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Tapusahibi Adı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $tapusahibi_bilgileri["tapusahibiad"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Tapusahibi Soyadı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $tapusahibi_bilgileri["tapusahibisoyad"]; ?>
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
                                  Tapusahibi Tel No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $tapusahibi_bilgileri["tapusahibitelno"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Tapusahibi TC No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $tapusahibi_bilgileri["tapusahibitcno"]; ?>
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
                                  Tapusahibi Email:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $tapusahibi_bilgileri["tapusahibiemail"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                           
                            <!--/span-->
                          </div>
                          
                          
                          
                          <h3 class="form-section">
                          Tapusahibi Vekili Bilgileri
                          </h3>
                          
                          <div class="row">
                            
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                 Tapusahibi Vekili Ad:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $tapusahibi_vekili_bilgileri["tapusahibivekiliad"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                Tapusahibi Vekili Soyad:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $tapusahibi_vekili_bilgileri["tapusahibivekilisoyad"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            
                            
                            
                          </div>
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          
                          <!--/row-->
                          
                          
                          
                          
                          
                          
                          
                          <!--/row-->
                          
                          
                          
                        </div>
                        <div class="form-actions">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                  <button type="button" onclick="window.location='bagimsizbolum_listesi.php';" class="btn green">
                                    Bağımsızbölüm  Listesi
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