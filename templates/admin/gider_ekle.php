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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <script src=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
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
			Gider Ekle
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
						<a href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Gider Ekleme Sayfası</a>
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
			<i class="fa fa-gift"></i>Gider Ekleme Sayfası
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
		<form action="gider_ekle_control.php" method="post"  class="form-horizontal form-row-seperated">
			<div class="form-body">
				<?php if (!empty($_SESSION["gider_ekleme"]) && $_SESSION["gider_ekleme"]=="degerlerbos") {
				unset($_SESSION["gider_ekleme"]);
				 ?>
				<div class="alert alert-warning ">
					<button class="close" data-close="alert"></button>
					Boş Değer Girdiniz!
				</div>
				<?php } ?>
                <?php if (!empty($_SESSION["gider_ekleme"]) && $_SESSION["gider_ekleme"]=="taksityanlis") {
                    unset($_SESSION["gider_ekleme"]);
                    ?>
                    <div class="alert alert-danger ">
                        <button class="close" data-close="alert"></button>
                        Taksit Tutarıyla Toplam Tutar Eşit Değil. Kontrol Edip Tekrar Deneyiniz...
                    </div>
                <?php } ?>
                <?php if (!empty($_SESSION["gider_ekleme"]) && $_SESSION["gider_ekleme"]=="kayittamam") {
                    unset($_SESSION["gider_ekleme"]);
                    ?>
                    <div class="alert alert-success ">
                        <button class="close" data-close="alert"></button>
Kayıt İşlemi Başarıyla Tamamlanmıştır.
                    </div>
                <?php } ?>
                <?php if (!empty($_SESSION["gider_ekleme"]) && $_SESSION["gider_ekleme"]=="yanliskayit") {
                    unset($_SESSION["gider_ekleme"]);
                    ?>
                    <div class="alert alert-danger ">
                        <button class="close" data-close="alert"></button>
                        Kayıt İşlemi Tamamlanamadı.
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
					<div class="form-group">
					<label class="control-label col-md-3">Giderin Açıklaması</label>
					<div class="col-md-4">
						<select class="form-control input-medium select2me" name="giderinaciklamasi" id="giderinaciklamasi" data-placeholder="Seç...">
					<option value=""></option>
						<?php 
							$sql="select 
							tb_ga.id,
							tb_ga.aciklama
							from 
							tb_gideraciklama tb_ga";
							$result = $db->query($sql);
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							    	echo '<option value="'.$row["id"].'">'.$row["aciklama"].'</option>';
							    	
							    }


							 ?>
						</select>
						
					</div>
				</div>
				<div class="form-group ">
				

			<div class="form-group ">
				
				<label class="control-label col-md-3">Dağıtım Parametresi</label>
				<div class="col-md-4">
					<div class="md-radio">
						<input type="radio" id="radio6" value="0" name="dagitimparametresi" class="md-radiobtn" checked>
						<label for="radio6">
						<span></span>
						<span class="check"></span>
						<span class="box"></span>
						Arsa Payi </label>
					</div>
					<div class="md-radio">
						<input type="radio" id="radio7" value="1" name="dagitimparametresi" class="md-radiobtn" >
						<label for="radio7">
						<span></span>
						<span class="check"></span>
						<span class="box"></span>
						Eşit </label>
					</div>
                         <div class="md-radio">
                             <input type="radio" id="radio1" value="2" name="dagitimparametresi" class="md-radiobtn" onclick="dagitimyer()" >
                             <label for="radio1">
                                 <span></span>
                                 <span class="check"></span>
                                 <span class="box"></span>
                                 Karışık </label>
                         </div>
				
				</div>
			</div>
			<div class="form-group ">
				
				<label class="control-label col-md-3">Dağıtım Yeri</label>
				<div class="col-md-4">
                         <div class="md-radio">
                             <input type="radio" id="radio9" value="0" name="dagitimyeri" class="md-radiobtn" checked >
                             <label for="radio9">
                                 <span></span>
                                 <span class="check"></span>
                                 <span class="box"></span>
                                 İkamet Eden </label>
                         </div>
                         <div class="md-radio">
						<input type="radio" id="radio8" value="1" name="dagitimyeri" class="md-radiobtn" >
						<label for="radio8">
						<span></span>
						<span class="check"></span>
						<span class="box"></span>
						Tapu Sahibi </label>
					</div>
					
				</div>
			</div>
				<div class="form-group">
					<label class="control-label col-md-3">Belgenin Cinsi</label>
					<div class="col-md-4">
						<select class="form-control input-medium select2me" name="belgenincinsi" id="belgenincinsi" data-placeholder="Seç...">
					<option value=""></option>
							    <option value="Fatura">Fatura</option>
							    <option value="Fiş">Fiş  </option>
							    <option value="Gider Pusulası">Gider Pusulası</option>
							    <option value="Tahsilat Makbuzu">Tahsilat Makbuzu</option>
						</select>
						
					</div>
				</div>
					<div class="form-group">
					<label class="control-label col-md-3">Belgenin Seri No
					</label>
					<div class="col-md-4">
						<input name="belgeninserino" id="belgeninserino"  type="text" class="form-control"/>
					</div>
				</div>
					<div class="form-group">
					<label class="control-label col-md-3">Belgenin Tarihi</label>
					<div class="col-md-3">
						<input type="date" class="form-control" name="belgenintarihi" id="belgenintarihi">
						<!-- /input-group -->
						<span class="help-block">
						GG/AA/YYYY </span>
					</div>
				</div>


<style type="text/css">
.coklusecim{width: 30%; min-width: 160px; min-height: 200px;border:1px solid #ddd;}
.coklusecim option {padding: 2px 5px 2px 5px; border-bottom: 1px solid #eee; cursor: pointer;}
</style>


<div class="form-group">
<label class="control-label col-md-3">Giderden Muaf Bağımsızbölüm Seç</label>
<div class="col-md-9">

<select multiple="multiple" id="muafsecim" name="muafsecim" class="coklusecim">
<?php
if (!empty($_COOKIE["global_gmid"])) {
$gayrimenkulid_cookie=$_COOKIE["global_gmid"];
unset($_COOKIE["global_gmid"]);
setcookie("global_gmid", "", time()-3600);
}
$sayac=0;
$sql = "select id,kapino from tb_bagimsizbolum where gayrimenkulid='$gayrimenkulid_cookie' order by kapino ";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
$PIDNo = $row["id"];
$PKapiNo = $row["kapino"];
echo 	'<option id="msecim_'.$PIDNo.'" onclick="MEkle(\''.$PIDNo.'\')" value='.$PIDNo.'>'.$PKapiNo.'</option>';
    $bagimsizbolumler_kumesi[$sayac]=$row["id"];
    $sayac++;

}
?>
</select>

<select multiple="multiple" id="muafsecilen" name="muafsecilen[]" class="coklusecim" >

</select>

</div>
</div>
                <div class="form-group" id="gizle">
                    <label class="control-label col-md-3">Eşit / Arsa Payı</label>
                    <div class="col-md-9">
                <select multiple="multiple" id="paysecim" name="paysecim" class="coklusecim">
<?php
if (!empty($_COOKIE["global_gmid"])) {
$gayrimenkulid_cookie=$_COOKIE["global_gmid"];
unset($_COOKIE["global_gmid"]);
setcookie("global_gmid", "", time()-3600);
}
$sql = "select id,kapino from tb_bagimsizbolum where gayrimenkulid='$gayrimenkulid_cookie' order by kapino";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
$PIDNo = $row["id"];
$PKapiNo = $row["kapino"];
echo 	'<option id="psecim_'.$PIDNo.'" onclick="PEkle(\''.$PIDNo.'\')" value='.$PIDNo.'>'.$PKapiNo.'</option>';
}
?>
</select>

<select multiple="multiple" id="paysecilen" name="paysecilen[]" class="coklusecim" >

</select>

                    </div></div>

				<div class="form-group">
					<label class="control-label col-md-3">Giderin Yansıtılacağı Ay <span class="required">
					*</span></label>
					<div class="col-md-3">
						<input type="month" class="form-control" name="giderintarihi" id="giderintarihi" >
						<!-- /input-group -->
						<span class="help-block">
						 AA/YYYY </span>
					</div>
				</div>
						<div class="form-group">
					<label class="control-label col-md-3">Giderin Ödeneceği Yer<span class="required">
					*</span></label>
                                 <div id="button_pro">
                                     <table>
                                         <tr>
                                             <td>
                                                 <div class='space' id='input_1' data-bgposition="center"  data-position="relative">
<span class="custom-dropdown big">
 <select  name="odenecekyer[1]" id="odenecekyer" onchange="gider_odenek_control_select()" data-placeholder="Seç...">
<option value=""></option>
<?php
$sql="select 
							tb_f.id,
							tb_f.ad
							from 
							tb_firma tb_f";
$result = $db->query($sql);
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<option value="'.$row["id"].'">'.$row["ad"].'</option>';
}
?>
</select>
</span>&emsp;
                                         <input id="input_1" type="text" name="val[1]" class='left txt' required/>
                                         <img class="add right" src="add.png" />
                                     </div>
                                             </td></tr>   </table>
                                 </div>
                             </div>
                                 <div class="form-group">
					<label class="control-label col-md-3">Giderin Toplam Tutarı<span class="required">
					*</span>
					</label>
					<div class="col-md-4">
						<input name="toplamgidertutari" id="toplamgidertutari" onfocusout="gider_odenek_control_input()" type="text" class="form-control"/>
						<span class="help-block">
						  </span>
					</div>
			</div>
                     <div class="form-group">
                         <label class="control-label col-md-3">Taksit Sayısı</label>
                         <div class="col-md-4">
                             <select class="form-control input-medium select2me" name="taksit_sayisi" id="taksit_sayisi" onchange="tikla()" data-placeholder="Seç...">
                                 <option value=""></option>
                                 <?php
                                 for ($i=1;$i<=12;$i++){
                                     echo '<option value="'.$i.'">'.$i.'</option>';
                                 }
                                 ?>
                             </select>
                         </div>
                     </div>

                <div class="form-group" id="taksit">
                    <label class="control-label col-md-3">Taksit Detayları<span class="required">
					*</span></label>
                    <div id="taksit_div" data-position="center">
<table>

</table>
                    </div>
                </div>


					<input type="hidden" name="bagimsizbolumler_kumesi[]" value="<?php $temp_bk_id=""; for ($i=0; $i <count(@$bagimsizbolumler_kumesi) ; $i++) {
					$temp_bk_id=$temp_bk_id.'-'.$bagimsizbolumler_kumesi[$i];
					} echo $temp_bk_id; ?>" >
			</div>
				
				
			<div class="form-actions">
				<div class="row">
					<div class="col-md-offset-3 col-md-9">
						<button type="submit" class="btn green">Ekle</button>
                             <button type="button" onclick="window.location='gider_listesi.php';"  class="btn default">Vazgeç</button>
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
    $("#taksit").hide();

    $("#gizle").hide();
 Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
ComponentsPickers.init();
ComponentsDropdowns.init();
});
</script>

<script>
function gayrimenkulSec() {
var gayimenkul_e = document.getElementById("gayrimenkulid");
var secilen_gayrimenkul_ad=gayimenkul_e.options[gayimenkul_e.selectedIndex].text;
var secilen_gayrimenkul_id=gayimenkul_e.options[gayimenkul_e.selectedIndex].value;
document.cookie = "global_gmid="+secilen_gayrimenkul_id;
document.cookie = "global_gmad="+secilen_gayrimenkul_ad;
window.location='gider_ekle.php';
}
function tikla() {


    var taksit;
    var taksit_sayi=$("#taksit_sayisi").val();
    if (taksit_sayi==1) {
        $("#taksit").hide();

        $('#taksit_div').children().remove();

    }
    else if (taksit_sayi >= 2){
        $('#taksit_div').children().remove();

        for (taksit=1;taksit<=taksit_sayi;taksit++){

        $("#taksit").show();
        $('#taksit_div').append('<tr><td><div class="space" id="taksit_gir"  data-position="center" >' +
            '<span class="custom-dropdown big">'+taksit+'. Taksit <input type="month" name="taksit_ay['+taksit+']" required>&nbsp;</td>' +
            '<td><input type="text" name="taksit_tutar['+taksit+']" class="form-control" placeholder="Taksit Tutarını Giriniz" required></td></span></div></tr>');
    }
    }
}
function MEkle(gid){
  var msecimID = $('#msecim_'+gid).val(),
  msecimYaz = $('#msecim_'+gid).text();
  $('#muafsecilen').append('<option id="msecilen_'+msecimID+'" onclick="MKaldir('+msecimID+')" value="'+msecimID+'" readonly selected >'+msecimYaz+'</option>');
  $('#msecim_'+gid).remove();
  $('#paysecim option[value='+gid+']').remove();
  $('#paysecim option').remove();
  $('#muafsecim option').each(function(index){
    var alID = $('#muafsecim option').eq(index).val(),
    alYaz = $('#muafsecim option').eq(index).text();
      var alsil = $('#paysecilen option').eq(index).text();
    $('#paysecim').append('<option id="psecim_'+alID+'" onclick="PEkle('+alID+')" value="'+alID+'">'+alYaz+'</option>');
    if (alYaz==alsil) {
        $('#paysecim option').remove();
    }

  });
    $('#paysecilen option[value='+gid+']').remove();

}

function MKaldir(gid){
  var msecilenID = $('#msecilen_'+gid).val(),
  msecilenYaz = $('#msecilen_'+gid).text();
  $('#muafsecim').append('<option id="msecim_'+msecilenID+'" onclick="MEkle('+msecilenID+')" value="'+msecilenID+'">'+msecilenYaz+'</option>');
  $('#msecilen_'+gid).remove();
    $('#muafsecilen option').attr('selected',true);

  $('#paysecim option').remove();
  $('#muafsecim option').each(function(index){
    var alID = $('#muafsecim option').eq(index).val(),
    alYaz = $('#muafsecim option').eq(index).text();
    $('#paysecim').append('<option id="psecim_'+alID+'" onclick="PEkle('+alID+')" value="'+alID+'">'+alYaz+'</option>');
  }); 
}

function PEkle(gid){
  var psecimID = $('#psecim_'+gid).val(),
  psecimYaz = $('#psecim_'+gid).text();

  if ($('#psecilen_'+gid).length < 1){
  $('#paysecilen').append('<option id="psecilen_'+psecimID+'" onclick="PKaldir('+psecimID+')" value="'+psecimID+'" selected>'+psecimYaz+'</option>');
  }
  $('#psecim_'+gid).remove(); 
}

function PKaldir(gid){
  var psecilenID = $('#psecilen_'+gid).val(),
  psecilenYaz = $('#psecilen_'+gid).text();
  if ($('#psecim_'+gid).length < 1){
  $('#paysecim').append('<option id="psecim_'+psecilenID+'" onclick="PEkle('+psecilenID+')" value="'+psecilenID+'">'+psecilenYaz+'</option>');
  }
  $('#psecilen_'+gid).remove();
    $('#paysecilen option').attr('selected',true);

}


function dagitimyer() {
$("#gizle").show();
    $('#paysecilen').attr('required',true);
$("#radio6").on("click",function dagitimyer() {
    $("#gizle").hide();
    $('#paysecilen').attr('required',false);
});
$("#radio7").on("click",function dagitimyer() {
    $("#gizle").hide();
    $('#paysecilen').attr('required',false);

});
}

$('document').ready(function(){
var id=2,txt_box;
$('#button_pro').on('click','.add',function(){
   $(this).remove();
   txt_box='<tr><td><div class="space" id="input_'+id+'" data-position="center" > \n' +
       '            <span class="custom-dropdown big">\n' +
       '    <select  name="odenecekyer['+id+']" id="odenecekyer" onchange="gider_odenek_control_select()" data-placeholder="Seç...">\n' +
      ' <option value=""></option>\n' +
       '       <?php
           $sql="select 
									tb_f.id,
									tb_f.ad
									from 
									tb_firma tb_f";
           $result = $db->query($sql);
           // output data of each row
           while($row = $result->fetch_assoc()) {
               echo '<option value="'.$row["ad"].'">'.$row["ad"].'</option>';
           }
           ?> \n' +
       '    </select>\n' +
       '</span>&emsp;&nbsp;<input type="text" name="val['+id+']" class="left txt" required /><img src="remove.png" class="remove"/><img class="add right" src="add.png" /></div></td></tr>';
   $("#button_pro").append(txt_box);
   id++;
});

$('#button_pro').on('click','.remove',function(){
   var parent=$(this).parent().prev().attr("id");
   var parent_im=$(this).parent().attr("id");
   $("#"+parent_im).slideUp('medium',function(){
       $("#"+parent_im).remove();
       if($('.add').length<1){
           $("#"+parent).append('<img src="add.png" class="add right"/> ');
       }
   });
});

});
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>