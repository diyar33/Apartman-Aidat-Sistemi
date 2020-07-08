<?php
ob_start();
session_start();
include("db/connection.php");
$global_tarih_id="";


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
        <title>Profesyonel Yönetim Programı</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/HTML; charset=utf-8">
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
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
        <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="../../assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="../../assets/admin/layout/css/themes/blue.css" rel="stylesheet" type="text/css"/>
        <link href="../../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
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
    <body onLoad="JavaScript:checkRefresh();" class="page-header-fixed page-quick-sidebar-over-content">
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
                    Tahmini Yazılanlar Listesi
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
                            <a href="">Tahmini Yazılanlar Listesi</a>
                        </li>
                    </ul>
                </div>



                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN VALIDATION STATES-->
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-gift"></i>Anagayrimenkul Seç
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
                                        <form   class="form-horizontal">
                                            <div class="form-body">

                                                <?php if (!empty($_SESSION["gidercinsi_ekleme"]) && $_SESSION["gidercinsi_ekleme"]=="degerlerbos") {
                                                    unset($_SESSION["gidercinsi_ekleme"]);
                                                    ?>
                                                    <div class="alert alert-warning ">
                                                        <button class="close" data-close="alert"></button>
                                                        Boş Değerler Girilemez.
                                                    </div>
                                                <?php } ?>

                                                <?php if (!empty($_SESSION["gidercinsi_ekleme"]) && $_SESSION["gidercinsi_ekleme"]=="hatali") {
                                                    unset($_SESSION["gidercinsi_ekleme"]);
                                                    ?>
                                                    <div class="alert alert-danger ">
                                                        <button class="close" data-close="alert"></button>
                                                        Hatalı Ekleme İşlemi
                                                    </div>
                                                <?php } ?>

                                                <?php if (!empty($_SESSION["gidercinsi_ekleme"]) && $_SESSION["gidercinsi_ekleme"]=="basarili") {
                                                    unset($_SESSION["gidercinsi_ekleme"]);
                                                    ?>
                                                    <div class="alert alert-success ">
                                                        <button class="close" data-close="alert"></button>
                                                        Ekleme İşlemi Başarılı
                                                    </div>
                                                <?php } ?>


                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Giderin Tarihi</label>
                                                    <div class="col-md-4">
                                                        <select id="select2_sample2" name="select2_sample2" class="form-control select2" >
                                                            <option></option>

                                                            <?php
                                                            for ($i=2020; $i >2000; $i--) {
                                                                echo '<optgroup label="'.$i.'">
												<option value="'.$i.'-01">Ocak('.$i.')</option>
												<option value="'.$i.'-02">Şubat('.$i.')</option>
												<option value="'.$i.'-03">Mart('.$i.')</option>
												<option value="'.$i.'-04">Nisan('.$i.')</option>
												<option value="'.$i.'-05">Mayıs('.$i.')</option>
												<option value="'.$i.'-06">Haziran('.$i.')</option>
												<option value="'.$i.'-07">Temmuz('.$i.')</option>
												<option value="'.$i.'-08">Ağustos('.$i.')</option>
												<option value="'.$i.'-09">Eylül('.$i.')</option>
												<option value="'.$i.'-10">Ekim('.$i.')</option>
												<option value="'.$i.'-11">Kasım('.$i.')</option>
												<option value="'.$i.'-12">Aralık('.$i.')</option>
												</optgroup>';
                                                            }
                                                            ?>


                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="button" class="btn green" onclick="sorgulamaFonksiyonu()">Sorgula</button>
                                                        </div>
                                                    </div>
                                                </div>

                                        </form>
                                    </div>


                                    <!-- END FORM-->
                                </div>
                            </div>
                            <!-- END VALIDATION STATES-->
                        </div>
                    </div>





                    <!-- END PAGE CONTENT-->

                    <?php if (!empty($_SESSION["tahmini_yazilan"]) && $_SESSION["tahmini_yazilan"]=="basarili") {
                        unset($_SESSION["tahmini_yazilan"]);
                        ?>

                        <div class="alert alert-success ">
                            <button class="close" data-close="alert"></button>
                            Güncelleme İşlemi Başarılı
                        </div>
                    <?php } ?>
                    <?php if (!empty($_SESSION["tahmini_yazilan"]) && $_SESSION["tahmini_yazilan"]=="hatali") {
                        unset($_SESSION["tahmini_yazilan"]);
                        ?>

                        <div class="alert alert-danger ">
                            <button class="close" data-close="alert"></button>
                            Güncelleme İşlemi Hatalı
                        </div>
                    <?php } ?>



                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-edit"></i>Tahmini Giderler
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

                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                        <thead>
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>
                                                Apartman Adı
                                            </th>
                                            <th>
                                                Gider Cinsi
                                            </th>
                                            <th>
                                                Tahmini ücret
                                            </th>
                                            <th>
                                                Giderin Tarihi
                                            </th>
                                            <th>
                                                Net Ücret
                                            </th>
                                            <th>
                                                Gönder
                                            </th>

                                        </tr>
                                        </thead>




                                        <tbody>

                                        <?php

                                        if (!empty($_COOKIE["global_tarih_id"]) ) {

                                            $gtarih = $_COOKIE["global_tarih_id"];

                                            unset($_COOKIE["global_tarih_id"]);
                                            setcookie("global_tarih_id", "", time() - 3600);

                                            $tarih=$gtarih."-08";
                                            $sql = "select *,tahmin.id as no from tb_tahmini_yazilan tahmin
    inner join tb_anagayrimenkul gm on gm.id=tahmin.apt_id
inner join tb_anagayrimenkul_giderler gm_gider on tahmin.gider_id=gm_gider.id
where tahmin.gider_ayi='$tarih' and tahmin.net_tutar is null";
                                            $result = $db->query($sql);
                                            $sayac=1;

                                            while ($row = $result->fetch_assoc()) {
                                                echo '<form method="post" action="tahmini_yazilan_control.php?gelenid='.$row["no"].'">';
                                                echo '<tr>';
                                                echo '<td>'.$sayac.'</td>';
                                                echo '<td>' . $row["ad"] . '</td>';
                                                echo '<td>' . $row["cinsi"] . '</td>';
                                                echo '<td>' . $row["tahmini_tutar"] . '</td>';
                                                echo '<td>' . $row["gider_ayi"] . '</td>';
                                                echo '<td><input type="text" name="net_tutar" required></td>';
                                                echo '<td><input type="submit" value="Gönder" class="btn green"></td>';
                                                echo '</form>';

                                                $sayac++;
                                            }
                                        }






                                        ?>
                                         </tbody>
                                        </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
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
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="../../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="../../assets/admin/pages/scripts/table-managed.js"></script>
    <script src="../../assets/admin/pages/scripts/table-advanced.js"></script>

    <script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
    <script type="text/javascript" src="../../asssets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="../../assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="../../assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="../../assets/admin/pages/scripts/components-dropdowns.js"></script>



    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            QuickSidebar.init(); // init quick sidebar
            Demo.init(); // init demo features
            TableManaged.init();
            ComponentsDropdowns.init();
        });
    </script>


    <script>
        function sorgulamaFonksiyonu() {
            var tarih_id=document.getElementById("select2_sample2").value;
            document.cookie = "global_tarih_id="+tarih_id;
            window.location='tahmini_yazilan.php';
        }
    </script>


    <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
    </html>

<?php
ob_end_flush();
?>