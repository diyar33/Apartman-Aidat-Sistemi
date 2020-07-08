<?php 
session_start();
include("db/connection.php");

$gd_id=$_GET["gd_id"];
if (empty($gd_id)) {
header("Location:gider_listesi.php");
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
        Gider Detayı
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
<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?> ">
  Gider Detay Sayfası
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
tb_agm_g.*,
tb_gm.ad
from tb_anagayrimenkul_giderler tb_agm_g
  inner join tb_anagayrimenkul tb_gm
      inner join tb_odemeyer tb_odeme
  on tb_agm_g.gayrimenkulid=tb_gm.id
where tb_agm_g.id='$gd_id'";

$sql2=mysqli_query($db,"select odeme_yer_id,odeme_tutar,ad from tb_firma 
inner join tb_odemeyer
    on tb_odemeyer.odeme_yer_id=tb_firma.id where tb_odemeyer.gider_id='$gd_id'");
$sql3=mysqli_query($db,"select taksit_tutar,taksit_ay from tb_taksit where gider_id='$gd_id'");

// Hesap Bilgilerinin çekildiği Sorgu

$result= $db->query($sql);
$row_gm = $result->fetch_array(MYSQLI_BOTH);

if (!$result) {
header("Location:gider_listesi.php");
exit;

}
?>
                  
                  <div class="portlet box blue">
                    <div class="portlet-title">
                      <div class="caption">
                        <i class="fa fa-gift">
                        </i>
                        Gider Detayı(
                        <strong style="color:#000000;">
                          <?php echo $row_gm["ad"]; ?>
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
                            Gider Bilgileri
                          </h2>
                          
                          <h3 class="form-section">
                            Bütün Bilgiler
                          </h3>
                          
                          
                          
                          
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Anagayrimnekul Adı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $row_gm["ad"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                 Giderin Ödeneceği Yer:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php
                                    while ($par=mysqli_fetch_array($sql2)){
                                        echo $par["ad"]."= &nbsp;".$par["odeme_tutar"]."&nbsp;₺<br>";
                                    }

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
                                  Cinsi:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $row_gm["cinsi"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                      
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Açıklama:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $row_gm["aciklamasi"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Dağımtım Parametresi:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                  <?php 

                                  if ($row_gm["dagitimparametresi"]==0) {
                                    echo "Arsa Payı";
                                  }
                                  else if($row_gm["dagitimparametresi"]==1)
                                  {
                                    echo  "Eşit";
                                  }                                  else if($row_gm["dagitimparametresi"]==2)
                                  {
                                      echo  "Karışık";
                                  }
                                   ?>
                                  </p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                Dağımtım Yeri:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                              <?php 

                                  if ($row_gm["dagitimyeri"]==0) {
                                    echo "İkamet Eden";
                                  }
                                  else if($row_gm["dagitimyeri"]==1)
                                  {
                                    echo  "Tapu Sahibi";
                                  }
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
                                 Tarih:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $row_gm["tarih"]; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                         
                          
                          </div>
                          
                          
                          
                         
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                 Giderin Toplam Tutar:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $row_gm["toplamtutar"].'   ₺'; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Kar Tutarı:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $row_gm["kartutari"].'   ₺'; ?>
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
                                 Gidere Ödenecek Toplam Tutar:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php echo $row_gm["isiyapanaodenentutar"].'   ₺'; ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
Taksit Durumu
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                      <?php
                                      $sayac=1;
                                      if ($row_gm["taksit_sayisi"]==1){
                                          echo "Taksit Yapılmamıştır.";
                                      }
                                      else{
                                          while ($par2=mysqli_fetch_array($sql3)){
                                              $tarih=$par2["taksit_ay"];
                                              $temp_tarih=explode('-',$tarih);
                                              $taksit_tarih=$temp_tarih[1].'/'.$temp_tarih[0];
                                              echo $sayac.". Taksit&nbsp;".$taksit_tarih."&nbsp;-&nbsp;".$par2["taksit_tutar"]." ₺<br>";
                                              $sayac++;
                                          }
                                      }
                                      ?>
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
                                  Tahsilat Durumu
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                     <?php 

                                  if ($row_gm["tahsilatdurumu"]==0) {
                                    echo "Tahsil Edilmedi";
                                  }
                                  else if($row_gm["tahsilatdurumu"]==1)
                                  {
                                    echo "Tahsil Edildi";
                                  }
                                   ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                Kar Durumu:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                     <?php 

                                  if ($row_gm["kardurumu"]==0) {
                                    echo "Karsız";
                                  }
                                  else if($row_gm["kardurumu"]==1)
                                  {
                                    echo "Karlı";
                                  }
                                   ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <!--/span-->
                          </div>




                          
                        
                          
                           <div class="row">
                            
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                 Belgenin Cinsi
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php 

                                 echo $row_gm["belgenin_cinsi"];
                                   ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Belgenin Seri No:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php 
                                    echo $row_gm["belgenin_serino"];
                                   ?>
                                  </p>
                                </div>
                              </div>
                            </div> 
                             <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label col-md-3">
                                  Belgenin Tarihi:
                                </label>
                                <div class="col-md-9">
                                  <p class="form-control-static">
                                    <?php 
                                    echo $row_gm["belgenin_tarihi"];
                                   ?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            
                            
                            
                          </div>
                          
                          
                          
                          
                          
                          
                          <!--/row-->
                         
                          
                          
                          
                          
                          <!--/row-->
                          
                          
                          
                          
                          
                          
                          
                          <!--/row-->
                          
                          
                          
                        </div>
                        <div class="form-actions">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                  <button type="button" onclick="window.location='gider_listesi.php';" class="btn green">
                                    Gider Listesi
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
                  <!-- BEGIN CONDENSED TABLE PORTLET-->
          <div class="portlet box blue">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-picture"></i>Giderin Sorumlu Olduğu Bağımsızbölümler
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
            <div class="portlet-body">
              <div class="table-scrollable">
                <table class="table table-condensed table-hover">
                <thead>
                <tr>
                  <th>
                     Listeno
                  </th>
                  <th>
                    Kapi No
                  </th>
                  <th>
                    Cinsi
                  </th>
                  <th>
                     Tutar
                  </th>
                  <th>
                     Tahsilat Durumu
                  </th>
                    <th>
                     Muaf
                  </th>
                </tr>
                </thead>
                <tbody>

                    <?php 

                      $sql="select 
tb_bb.kapino,
tb_bb.cinsi,
tb_bb_borcu.tutar,
tb_bb_borcu.tahsilatdurumu,
tb_bb_borcu.muaf
from
tb_bagimsizbolum tb_bb 
inner join tb_bagimsizbolum_borcu tb_bb_borcu
on tb_bb.id=tb_bb_borcu.bbid
where tb_bb_borcu.gid='$gd_id'
order by muaf desc";
$sayac_liste=1;
                        $result = $db->query($sql);
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                  echo '<tr>';
                  echo '<td>'.$sayac_liste.'</td>';
                  echo '<td>'.$row["kapino"].'</td>';
                  echo '<td>'.$row["cinsi"].'</td>';
                  echo '<td>'.$row["tutar"].'      ₺</td>';
                  echo '<td>';
                  if ($row["tahsilatdurumu"]==0) {

                   echo '<span class="label label-sm label-danger">Ödenmedi</span>';
                 }
                 else if($row["tahsilatdurumu"]==1)
                 {
                    echo '<span class="label label-sm label-success">Ödendi</span>';
                 }
                 echo '</td>';

                   echo '<td>';
                  if ($row["muaf"]==1) {

                   echo '<span class="label label-sm label-warning">Muaf</span>';
                 }
                 else if($row["muaf"]==0)
                 {
                    echo '<span class="label label-sm label-info">Dahil</span>';
                 }
                 echo '</td>';


                  
                  echo '</tr>';
                              

                              $sayac_liste++;
                              
                            }




          
                         ?>
                
               
                </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END CONDENSED TABLE PORTLET-->
                  
                  
                  
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