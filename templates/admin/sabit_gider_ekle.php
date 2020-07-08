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
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<!-- END PAGE LEVEL STYLES -->
<link id="style_color" href="../../assets/admin/layout/css/themes/blue.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
    <script src="jquery.js"></script>
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
			Sabit Gider Ekle
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
						<a href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Sabit Gider Ekleme Sayfası</a>
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
								<i class="fa fa-gift"></i>Sabit Gider Ekleme Sayfası
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
							<form action="sabit_gider_ekle_control.php" method="post"  class="form-horizontal form-row-seperated">
								<div class="form-body">

									<?php if (!empty($_SESSION["sabit_gider_ekleme"]) && $_SESSION["sabit_gider_ekleme"]=="degerlerbos") {
									unset($_SESSION["sabit_gider_ekleme"]);
									 ?>
									<div class="alert alert-warning ">
										<button class="close" data-close="alert"></button>
										Bilgileri Kontrol Ediniz.!
									</div>
									<?php } ?>
                                    <?php if (!empty($_SESSION["sabit_gider_ekleme"]) && $_SESSION["sabit_gider_ekleme"]=="eklemetamam") {
                                        unset($_SESSION["sabit_gider_ekleme"]);
                                        ?>
                                        <div class="alert alert-success ">
                                            <button class="close" data-close="alert"></button>
                                            Ekleme Başarılı!
                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($_SESSION["sabit_gider_ekleme"]) && $_SESSION["sabit_gider_ekleme"]=="eklemehatali") {
                                        unset($_SESSION["sabit_gider_ekleme"]);
                                        ?>
                                        <div class="alert alert-danger ">
                                            <button class="close" data-close="alert"></button>
                                            Ekleme Hatalı!
                                        </div>
                                    <?php } ?>






                                    <div class="form-group">
										<label class="control-label col-md-3">Gayrimenkul Adı<span class="required">
										*</span></label>
										<div class="col-md-4">
											<select name="gayrimenkulid" id="gayrimenkulid" onchange="gayrimenkulSec()" class="form-control input-xlarge select2me" data-placeholder="Seç......">
												<?php 
															
									
												$sql="select 
												tb_gm.id,
												tb_gm.ad
												from 
												tb_anagayrimenkul tb_gm";
												$result = $db->query($sql);
												    // output data of each row
											echo '<option value=""></option>';
												    	if (!empty($_COOKIE["global_gmid"]) && !empty($_COOKIE["global_gmad"])) {

												    		$gayrimenkulid_cookie=$_COOKIE["global_gmid"];
															$gayrimenkulad_cookie=$_COOKIE["global_gmad"];

															$temp_gayrimenkulid_cookie=$gayrimenkulid_cookie;
															$temp_gayrimenkulad_cookie=$gayrimenkulad_cookie;

															unset($_COOKIE["global_gmid"]);
															unset($_COOKIE["global_gmad"]);
															setcookie("global_gmid", "", time()-3600);
															setcookie("global_gmad", "", time()-3600);

															while($row = $result->fetch_assoc()) {
																if ($row["id"]==$temp_gayrimenkulid_cookie && $row["ad"]==$temp_gayrimenkulad_cookie) {
																	echo '<option selected value='.$temp_gayrimenkulid_cookie.'>'.$temp_gayrimenkulad_cookie.'</option>';
																}
															}
														}

														while($row = $result->fetch_assoc()) {
																
																	echo '<option  value='.$row["id"].'>'.$row["ad"].'</option>';
																
															}
					
					
												 ?>
												
												
											
											</select>
										</div>
									</div>


										<div class="form-group">
										<label class="control-label col-md-3">Giderin Cinsi<span class="required">
										*</span></label>
										<div class="col-md-4">
											<select class="form-control input-medium select2me" name="giderincinsi" id="giderincinsi" data-placeholder="Seç...">
											<option value=""></option>
											<?php 

												$sql="select 
												tb_gc.id,
												tb_gc.aciklama
												from 
												tb_gidercinsi tb_gc";
												$result = $db->query($sql);
												    // output data of each row
												    while($row = $result->fetch_assoc()) {
												    	echo '<option value="'.$row["aciklama"].'">'.$row["aciklama"].'</option>';
												    	
												    }
					
					
												 ?>
											</select>
											
										</div>
									</div>





								<div class="form-group ">
									
									<label class="control-label col-md-3">Dağıtım Yeri</label>
									<div class="col-md-4">
										<div class="md-radio">
											<input type="radio" id="radio8" value="1" name="dagitimyeri" class="md-radiobtn" checked>
											<label for="radio8">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Tapu Sahibi </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio9" value="0" name="dagitimyeri" class="md-radiobtn" >
											<label for="radio9">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
										İkamet Eden </label>
										</div>
										
									</div>
								</div>




                                    <div class="form-group ">

                                        <label class="control-label col-md-3">Dağıtım Parametresi</label>
                                        <div class="col-md-4">
                                            <div class="md-radio">
                                                <input type="radio" id="radio1" value="1" name="dagitimparametresi" class="md-radiobtn" checked>
                                                <label for="radio1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    Eşit </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="radio2" value="0" name="dagitimparametresi" class="md-radiobtn" >
                                                <label for="radio2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    Arsa Payı </label>
                                            </div>

                                        </div>
                                    </div>

								<div class="form-group">
										<label class="control-label col-md-3">Giderden Muaf Bağımsızbölüm Seç</label>
										<div class="col-md-9">
											<select multiple="multiple" class="multi-select"   id="my_multi_select2" name="muafbagimsizbolum[]">

												<optgroup label="Hepsini Ata">	
												<?php 


												if (!empty($_COOKIE["global_gmid"])) {
									$gayrimenkulid_cookie=$_COOKIE["global_gmid"];
									unset($_COOKIE["global_gmid"]);
									setcookie("global_gmid", "", time()-3600);
								}


											$sql = "select id,kapino from tb_bagimsizbolum where gayrimenkulid='$gayrimenkulid_cookie'";
											$result = $db->query($sql);
$sayac=0;//bagimsizbolum kumesi oluşturmak için
													    while($row = $result->fetch_assoc()) {
													    	echo 	'<option value='.$row["id"].'>'.$row["kapino"].'</option>';
													    	$bagimsizbolumler_kumesi[$sayac]=$row["id"];
													    	$sayac++;
													    }
												 ?>
									
											</select>
										</div>
									</div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Giderin Tutarı
                                        </label>
                                        <div class="col-md-4">
                                            <input name="gider_tutar" id="giderid"  type="text" class="form-control"/>
                                        </div>
                                    </div>

									








										<input type="hidden" name="bagimsizbolumler_kumesi[]" value="<?php $temp_bk_id=""; for ($i=0; $i <count(@$bagimsizbolumler_kumesi) ; $i++) {
										$temp_bk_id=$temp_bk_id.'-'.$bagimsizbolumler_kumesi[$i];
										} echo $temp_bk_id; ?>" >
								</div>
									

									
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
                                            <button type="submit"  class="btn green" >Gönder</button>
                                            <button type="button" onclick="window.location='sabit_gider_listesi.php';"  class="btn default">Vazgeç</button>
										</div>
									</div>
								</div>

							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
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
<script type="text/javascript" src="../../assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/admin/pages/scripts/table-managed.js"></script>
<script src="../../assets/admin/pages/scripts/table-advanced.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="../../asssets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script src="../../assets/admin/pages/scripts/components-dropdowns.js"></script>
<script src="../../assets/admin/pages/scripts/components-pickers.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
ComponentsDropdowns.init();
    ComponentsPickers.init();
      });
   </script>

       <script>
function gayrimenkulSec() {
    var gayimenkul_e = document.getElementById("gayrimenkulid");
    var secilen_gayrimenkul_ad=gayimenkul_e.options[gayimenkul_e.selectedIndex].text;
    var secilen_gayrimenkul_id=gayimenkul_e.options[gayimenkul_e.selectedIndex].value;

    

    document.cookie = "global_gmid="+secilen_gayrimenkul_id;
    document.cookie = "global_gmad="+secilen_gayrimenkul_ad;
    window.location='sabit_gider_ekle.php';
        }


       </script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>




