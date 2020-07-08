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
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
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
			Anagayrimenkul Düzenle
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
						<a href="">Anagayrimenkul Düzenleme Sayfası</a>
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
								<i class="fa fa-gift"></i>Anagayrimenkul Düzenle
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
							<form action="anagayrimenkul_duzenle_control.php" method="post"  class="form-horizontal form-row-seperated">
								<div class="form-body">

									<?php if (!empty($_SESSION["anagayrimenkul_duzenleme"]) && $_SESSION["anagayrimenkul_duzenleme"]=="degerlerbos") {
									unset($_SESSION["anagayrimenkul_duzenleme"]);
									 ?>
									<div class="alert alert-warning ">
										<button class="close" data-close="alert"></button>
										Gayrimenkul  Adı , Açıklama ve Adres Değerleri Boş Girilemez.
									</div>
									<?php } ?>

									<?php if (!empty($_SESSION["anagayrimenkul_duzenleme"]) && $_SESSION["anagayrimenkul_duzenleme"]=="hatali") {
									unset($_SESSION["anagayrimenkul_duzenleme"]);
									 ?>
									<div class="alert alert-danger ">
										<button class="close" data-close="alert"></button>
										Hatalı Düzenleme İşlemi
									</div>
									<?php } ?>

									<?php if (!empty($_SESSION["anagayrimenkul_duzenleme"]) && $_SESSION["anagayrimenkul_duzenleme"]=="basarili") {
									unset($_SESSION["anagayrimenkul_duzenleme"]);
									 ?>
									<div class="alert alert-success ">
										<button class="close" data-close="alert"></button>
										Düzenleme İşlemi Başarılı.
									</div>
									<?php } ?>

									

								
									


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
										      tb_agm_hb.karardefteri,
              										      tb_agm_hb.payda,
					      					tb_agm_hb.isletmedefteri
										 from tb_anagayrimenkul tb_agm_hb
										 where id='$gm_id'";


									

								$result= $db->query($sql);
       					 		$row = $result->fetch_array(MYSQLI_BOTH);
								$result->free();


									 ?>

									 <input type="hidden" id="gizliDeger" name="gm_id" value="<?php echo $gm_id; ?>"/>
									<div class="form-group">
										<label class="control-label col-md-3">Gayrimenkul Adı<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="gayrimenkuladi" id="gayrimenkuladi"  data-required="1"  value="<?php echo $row["ad"]; ?>"  class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Açıklama
										</label>
										<div class="col-md-4">
											<textarea class="form-control"  name="aciklama" id="aciklama" ><?php echo $row["aciklama"]; ?></textarea>
										</div>
									</div>
										<div class="form-group">
										<label class="control-label col-md-3">Adresi<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<textarea class="form-control"   name="adres" id="adres" ><?php echo $row["adres"]; ?></textarea>
										</div>
									</div>

										<div class="form-group">
										<label class="control-label col-md-3">Bağımsız Bölüm Sayısı<span class="required">
										* </span>
										</label>
										<div class="col-md-3">
											<input type="textbox" name="bagimsizbolumsayisi" id="bagimsizbolumsayisi" onfocusout="bagimsizbolumsayisi_control()"  data-required="1"  value="<?php echo $row["bagimsizbolumsayisi"]; ?>"  class="form-control"/>
										</div>
									</div>
										

									<div class="form-group" >
											<div id="temsilci_bilgileri">
													<label class="control-label col-md-3">Temsilci Bilgileri  <span class="required"></span></label>
												<div class="col-md-3" id="temsilci_bilgi1" >
												<input name="temsilci" type="textbox" id='textbox1' value="<?php echo $row["temsilci"]; ?>" class="form-control" />
												</div>
											</div>
									</div>
									

                                    
									<div class="form-group" >
											<div id="denetci_bilgileri">
										<label class="control-label col-md-3">Denetçi Bilgileri <span class="required">
										</span>
										</label>
										<div class="col-md-3" id="denetci_bilgi1" >
											<input name="denetci" type="textbox" id='textbox1' value="<?php echo $row["denetci"]; ?>" class="form-control" />
										</div>
									</div>
									</div>	
								

									



								
                                    
									


						
								
								<div class="form-group ">
									
									<label class="control-label col-md-3">Karar Defteri</label>
									<div class="col-md-4">
										<div class="md-radio">
											<input type="radio" id="radio6" name="karardefteri" value="0" class="md-radiobtn" <?php if($row["karardefteri"]=="alindi/onaylandi"){echo "checked";} ?> >
											<label for="radio6">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Alındı/Onaylandı</label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio7" name="karardefteri"  value="1" class="md-radiobtn" <?php if($row["karardefteri"]=="eski defter teslim alindi"){echo "checked";} ?>  >
										<label for="radio7">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Eski Defter Teslim Alındı</label>
										</div>
									</div>
								</div>

										<div class="form-group ">
									
									<label class="control-label col-md-3">İşletme Defteri</label>
									<div class="col-md-4">
										<div class="md-radio">
											<input type="radio" id="radio8" name="isletmedefteri"  value="0" class="md-radiobtn" <?php if($row["isletmedefteri"]=="alindi/onaylandi"){echo "checked";} ?> >
											<label for="radio8">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Alındı/Onaylandı</label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio9" name="isletmedefteri" value="1" class="md-radiobtn" <?php if($row["isletmedefteri"]=="eski defter teslim alindi"){echo "checked";} ?>  >
											<label for="radio9">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Eski Defter Teslim Alındı </label>
										</div>
									
									</div>
								</div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3"><strong>Arsa Paydası </strong>:<span class="required">
										</span>
                                        </label>
                                        <div class="col-md-2">
                                            <input name="arsapaydasi" id="arsapaydasi" type="text" class="form-control" value="<?php echo $row["payda"]; ?>" />

                                        </div>
                                    </div>


									
							
									<div class="form-group">
										<label class="control-label col-md-3">Banka Adı<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="banka_adi" id="banka_adi" type="text" value="<?php echo $row["banka_adi"]; ?>" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Hesap Adı<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="hesapadi" id="hesapadi" type="text" value="<?php echo $row["hesapadi"]; ?>" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Şube Kodu<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="subekodu" id="subekodu" type="text" value="<?php echo $row["subekodu"]; ?>" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Hesap No<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="hesapno" id="hesapno" type="text" value="<?php echo $row["hesapno"]; ?>" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">IBAN No<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="iban_no" id="iban_no" type="text" value="<?php echo $row["iban_no"]; ?>" class="form-control"/>
										</div>
									</div>
										<div class="form-group">
										<label class="control-label col-md-3">Vergi No<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="vergino" id="vergino" type="text" value="<?php echo $row["vergino"]; ?>" class="form-control"/>
										</div>
									</div>

									
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Düzenle</button>
											<button type="button" onclick="window.location='anagayrimenkul_listesi.php';"  class="btn default">Vazgeç</button>&nbsp;&nbsp;&nbsp;
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

<script type="text/javascript" src="../../assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="../../assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/components-dropdowns.js"></script>


<!-- END CORE PLUGINS -->
<script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
ComponentsDropdowns.init();
      });

      function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}



 function bagimsizbolumsayisi_control() {
    var var_bagimsizbolum_sayisi = document.getElementById("bagimsizbolumsayisi").value;

    if (!isNumber(var_bagimsizbolum_sayisi))
     {
      document.getElementById("bagimsizbolumsayisi").value='';

      alert("Lüften Sayı Giriniz");

           };
    
    
}





</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>