<?php
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
                Belgesi Tamamlanmayan İşlemler <small>Belgesi Tamamlanmayan İşlemler</small>
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.php">Anasayfa</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="">Sayfa Paneli</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="belgesi_tamamlanmayan.php">Belgesi Tamamlanmayan İşlemler</a>
                    </li>
                </ul>




            </div>

            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-cogs"></i>Gider Listesi
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
                            <div class="table-toolbar">

                            </div>

                                <br class="clear" />


                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                    <tr>

                                        <th scope="col" style="width:50px">
                                            No
                                        </th>
                                        <th scope="col" style="width:150px">
                                            Gayrimenkul Adı
                                        </th>
                                        <th scope="col" style="width:250px">
                                            Gider Tanimi
                                        </th>
                                        <th scope="col" style="width:150px !important">
                                            Ödenecek Yer
                                        </th>
                                        <th scope="col" style="width:150px">
                                            Toplam Tutar
                                        </th>
                                        <th scope="col" style="width:250px">
                                            Tarih
                                        </th>
                                        <th scope="col">
                                            Düzenle
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>



                                    <?php










                                        $sql="select 
									tb_agm_g.id as 'No',
                                    concat(tb_agm_g.cinsi,tb_agm_g.aciklamasi) as 'gidertanimi',
									 tb_agm_g.toplamtutar,
									 tb_agm_g.tarih,
                                        tb_gm.ad
									from tb_anagayrimenkul_giderler tb_agm_g
                                    inner join tb_anagayrimenkul tb_gm
                                    on tb_agm_g.gayrimenkulid=tb_gm.id
                                    where tb_agm_g.belgenin_tarihi='0000-00-00'";

                                        $result = $db->query($sql);
                                        $sayac_satir_sayisi=1;

                                        $sayac=0;

                                        while($row = $result->fetch_assoc()) {
                                            $gd_id=$row["No"];
                                            $sql2=mysqli_query($db,"select odeme_yer_id,ad from tb_odemeyer 
inner join tb_firma on tb_odemeyer.odeme_yer_id=tb_firma.id
where gider_id='$gd_id'");
                                            echo '<tr class="odd gradeX">';
                                            echo '<td>'.$row["No"].'</td>';
                                            echo '<td>'.$row["ad"].'</td>';
                                            echo '<td>'.$row["gidertanimi"].'</td>';
                                            echo '<td>';
                                            while ($par=mysqli_fetch_array($sql2)){
                                                echo $par["ad"]."<br>";
                                            }
                                            echo '</td>';
                                            echo '<td>'.$row["toplamtutar"].'</td>';
                                            echo '<td>'.$row["tarih"].'</td>';
                                            echo '<td><a class="btn default" href=belgesi_tamamlanmayan_duzenle.php?gd_id='.$row["No"].'><i class="glyphicon glyphicon-cog font-blue"> </i> </a></td>';
                                            echo '</tr>';
                                            $sayac_satir_sayisi++;
                                            $sayac++;
                                        }







                                    ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>

            </div>


        </div>
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
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>