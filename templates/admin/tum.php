<?php
session_start();
if (!true == $_SESSION["yonetici"])
    header("location:/sikayet/kullan.php ");
include '../../../veri.php';
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
    <meta charset="utf-8"/>
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
    <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
    <!-- END PAGE LEVEL STYLES -->
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
                Tüm İşlemler Listesi
            </h3>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="fa fa-home">
                        </i>
                        <a href="tum.php">
                            Anasayfa
                        </a>
                        <i class="fa fa-angle-right">
                        </i>
                    </li>
                    </li>
                    <li>
                        <a href="
<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
">
Tüm İşlemler Sayfası
                        </a>
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
                                <i class="fa fa-cogs">
                                </i>
                                Anagayrimenkul Listesi
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

                            <div class="portlet-body">

                                <table  class="table table-striped table-bordered table-hover" id="sample_6">
                                    <thead>
                                    <tr>

                                        <th scope="col" style="width=350px">
                                        </th>
                                        <th scope="col" style="width=350px">
                                            Apartman Adı
                                        </th>
                                        <th scope="col" style="width=150px ">
                                            Şikayeti Bildiren
                                        </th>
                                        <th scope="col" style="width=150px ">
                                            Telefon numarası
                                        </th>
                                        <th scope="col" style="width=10px ">
                                            Bildirim Tarihi
                                        </th>

                                        <th scope="col" style="width=50px ">
                                            Şikayet
                                        </th>
                                        <th scope="col" style="width=50px ">
                                            Bilgi/Görev
                                        </th>
                                        <th scope="col" style="width=50px ">
                                            Birim
                                        </th>
                                        <th scope="col" style="width=50px ">
                                            İşlem Tarihi
                                        </th>
                                        <th scope="col" style="width=50px ">
                                            İşlem
                                        </th>
                                        <th scope="col" style="width=50px ">
                                            Açıklama
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $sql = mysqli_query($b," SELECT * FROM sikayet WHERE yetki='0' order by apt");

                                    $sayac=1;
                                    while($row = mysqli_fetch_array($sql)) {
                                        echo '
<tr>
';
                                        echo '
<td>
'.$sayac.'
</td>
';
                                        echo '
<td>
<i class="fa fa-building">
'.$row["apt"].'
</i>

</td>
';
                                        echo '
<td>
<i class="fa fa-user">
'.$row["ad"].'
</i>
</td>
';
                                        echo '
<td>
<i class="fa fa-phone">
'.$row["tel"].'
</i>
</td>
';

                                        echo '<td><span class="badge bg-green-soft">
'.$row["tar"].'
</span>
</td>
';
                                        echo '
<td>
'.$row["sikayet"].'
</td>
';
                                        echo '
<td>
<span class="badge bg-blue">
'.$row["konu"].'
</span>
</td>
';
                                        echo '
<td>
<span class="badge bg-blue">
'.$row["birim"].'
</span>
</td>
';
                                        echo '
<td>
<span class="badge bg-blue">
'.$row["islemtar"].'
</span>
</td>
';
                                        echo '
<td>
<span class="badge bg-blue">
'.$row["islem"].'
</span>
</td>
';
                                        echo '
<td>

'.$row["acik"].'
</td>
';
                                        echo '</tr> ';
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
<script type="text/javascript" src="../../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js">
</script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js">
</script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js">
</script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js">
</script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!-- END PAGE LEVEL PLUGINS -->
<script src="../../assets/admin/pages/scripts/table-advanced.js">
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
            TableAdvanced.init();
        }
    );
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>