<?php 
session_start();
include("db/connection.php");
$bb_id=$_GET["bb_id"];
if (empty($bb_id)) {
	header("Location:bagimsizbolum_listesi.php");
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
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../assets/admin/layout/css/themes/blue.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
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
			Bağımsız Bölüm Düzenle
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
						<a href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Bağımsız Bölüm Düzenleme Sayfası</a>
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
								<i class="fa fa-gift"></i>Bağımsız Bölüm Düzenle
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
							<form action="bagimsizbolum_duzenle_control.php" method="post"  class="form-horizontal form-row-seperated">
								<div class="form-body">

									<?php if (!empty($_SESSION["bagimsizbolum_duzenleme"]) && $_SESSION["bagimsizbolum_duzenleme"]=="degerlerbos") {
									unset($_SESSION["bagimsizbolum_duzenleme"]);
									 ?>
									<div class="alert alert-warning ">
										<button class="close" data-close="alert"></button>
										Boş Değerler Girilemez.
									</div>
									<?php } ?>

									

								
									<?php if (!empty($_SESSION["bagimsizbolum_duzenleme"]) && $_SESSION["bagimsizbolum_duzenleme"]=="hatali") {
									unset($_SESSION["bagimsizbolum_duzenleme"]);
									 ?>
									<div class="alert alert-danger ">
										<button class="close" data-close="alert"></button>
										Hatalı Düzenleme İşlemi
									</div>
									<?php } ?>

										<?php if (!empty($_SESSION["bagimsizbolum_duzenleme"]) && $_SESSION["bagimsizbolum_duzenleme"]=="basarili") {
									unset($_SESSION["bagimsizbolum_duzenleme"]);
									 ?>

									<div class="alert alert-success ">
										<button class="close" data-close="alert"></button>
										Bağımsız Bölüm Düzenleme İşlemi Başarılı
									</div>
									<?php } ?>
										
							<?php 


								$sql="select 
									tb_bb.id,
									tb_bb.kapino,
									tb_bb.cinsi,
									tb_bb.pay,
									tb_bb.tapusahibiad,
									tb_bb.tapusahibisoyad,
									tb_bb.tapusahibitelno,
									tb_bb.tapusahibitcno,
									tb_bb.kiraciad,
									tb_bb.kiracisoyad,
									tb_bb.kiracitelno,
									tb_bb.kiracitcno,
									tb_bb.tapusahibivekiliad,
									tb_bb.tapusahibivekilisoyad,
									tb_bb.tapusahibiemail,
									tb_bb.kiraciemail
									from tb_bagimsizbolum tb_bb
									 where id='$bb_id'";

								$result= $db->query($sql);
       					 		$row = $result->fetch_array(MYSQLI_BOTH);
								$result->free();



							 ?>



					<div class="form-group ">
									
									<label class="control-label col-md-3">Bağımsız Bölüm Cinsi</label>
									<div class="col-md-4">
										<div class="md-radio">
											<input type="radio" id="radio6" value="mesken" name="bagimsizbolumcinsi" class="md-radiobtn" <?php echo ($row["cinsi"]=="mesken") ? "checked" : ""; ?> >


											<label for="radio6">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Mesken </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio7" value="isyeri" name="bagimsizbolumcinsi" class="md-radiobtn" <?php echo ($row["cinsi"]=="isyeri") ? "checked" : ""; ?>>
											<label for="radio7">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											İş Yeri </label>
										</div>
										<div class="md-radio">
											<input type="radio" id="radio8" value="depo" name="bagimsizbolumcinsi" class="md-radiobtn" <?php echo ($row["cinsi"]=="depo") ? "checked" : ""; ?>>
											<label for="radio8">
											<span></span>
											<span class="check"></span>
											<span class="box"></span>
											Depo </label>
										</div>
									</div>
								</div>

								<input type="hidden" id="gizliDeger" name="bb_id" value="<?php echo $row["id"]; ?>"/>
										<div class="form-group">
										<label class="control-label col-md-3"><strong>Arsa Payı Oranı</strong> Pay:<span class="required">
										</span>
										</label>
										<div class="col-md-2">
											<input name="arsapayi" id="arsapayi" onfocusout="pay_kontrol()" type="text"  value="<?php echo $row["pay"]; ?>"  class="form-control" />
											<span style="color:red" id="pay_control" class="help-block">
											 </span>
											 <span style="color:green" id="pay_control_dogru" class="help-block">
											 </span>
										</div>

									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Tapu Sahibi TC No<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="tapusahibitcno" id="tapusahibitcno" onfocusout="tapusahibi_tcno_kontrol()" type="text" value="<?php echo $row["tapusahibitcno"]; ?>" class="form-control"/>
											<span style="color:red" id="tapusahibi_tcno" class="help-block">
											 </span>
											 <span style="color:green" id="tapusahibi_tcno_dogru" class="help-block">
											 </span>
										</div>
									</div>
										<div class="form-group">
										<label class="control-label col-md-3">Tapu Sahibi Adı<span class="required">
										</span>
										</label>
										<div class="col-md-2">
											<input name="tapusahibiad" type="text" value="<?php echo $row["tapusahibiad"]; ?>" class="form-control" />
										</div>
										<div class="col-md-2" style="text-align:right; vertical-align:text-bottom;">
											<label>Tapu Sahibi Soyadı<span class="required"></span></label>
										</div>
										<div class="col-md-2">
                                             <input name="tapusahibisoyad" type="text" value="<?php echo $row["tapusahibisoyad"]; ?>" class="form-control" />
										</div>
									</div>

										<div class="form-group">
										<label class="control-label col-md-3">Tapu Sahibi Telefon No<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="tapusahibitelno" id="tapusahibitelno"  onfocusout="tapusahibi_telno_kontrol()"  type="text" value="<?php echo $row["tapusahibitelno"]; ?>" class="form-control"/>
										<span style="color:red" id="tapusahibi_telno" class="help-block">
											 </span>
											 <span style="color:green" id="tapusahibi_telno_dogru" class="help-block">
											 </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Tapu Sahibi Email<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="tapusahibiemail" id="tapusahibiemail" onfocusout="tapusahibi_email_kontrol()"  type="text" value="<?php echo $row["tapusahibiemail"]; ?>" class="form-control"/>
											<span style="color:red" id="tapusahibi_email" class="help-block">
											 </span>
											 <span style="color:green" id="tapusahibi_email_dogru" class="help-block">
											 </span>
										</div>
									</div>

										<div class="form-group">
										<label class="control-label col-md-3">Tapu Sahibi Vekili Adı<span class="required">
										</span>
										</label>
										<div class="col-md-2">
											<input name="tapusahibivekiliad" type="text" value="<?php echo $row["tapusahibivekiliad"]; ?>" class="form-control" />
										</div>
										<div class="col-md-2" style="text-align:right; vertical-align:text-bottom;">
											<label>Tapu Sahibi Vekili Soyadı<span class="required"></span></label>
										</div>
										<div class="col-md-2">
                                             <input name="tapusahibivekilisoyad" type="text" value="<?php echo $row["tapusahibivekilisoyad"]; ?>" class="form-control" />
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3">Kiracı Adı<span class="required">
										</span>
										</label>
										<div class="col-md-2">
											<input name="kiraciad" type="text" value="<?php echo $row["kiraciad"]; ?>" class="form-control" />
										</div>
										<div class="col-md-2" style="text-align:right; vertical-align:text-bottom;">
											<label>Kiracı Soyadı<span class="required"></span></label>
										</div>
										<div class="col-md-2">
                                             <input name="kiracisoyad" type="text" value="<?php echo $row["kiracisoyad"]; ?>" class="form-control" />
										</div>
									</div>
							
									<div class="form-group">
										<label class="control-label col-md-3">Kiracı TC  No<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="kiracitcno" type="text" value="<?php echo $row["kiracitcno"]; ?>" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Kiracı Telefon No<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="kiracitelno" type="text" value="<?php echo $row["kiracitelno"]; ?>" class="form-control"/>
										</div>
									</div>
										<div class="form-group">
										<label class="control-label col-md-3">Kiracı Email<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="kiraciemail" type="text" value="<?php echo $row["kiraciemail"]; ?>" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Bağımsız Bölüm Kapı No<span class="required">
										</span>
										</label>
										<div class="col-md-4">
											<input name="kapino" type="text" value="<?php echo $row["kapino"]; ?>" class="form-control"/>
										</div>
									</div>
									

									
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Düzenle</button>
                                            <button type="button" onclick="window.location='bagimsizbolum_listesi.php';"  class="btn default">Vazgeç</button>
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
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/admin/pages/scripts/components-dropdowns.js"></script>
<script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  ComponentsDropdowns.init();
      });



function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

      function pay_kontrol() {
    var var_arsapayi = document.getElementById("arsapayi").value;
    if (isNumeric(var_arsapayi))
     {
     	 var_arsapayi=parseInt(var_arsapayi);
         document.getElementById("pay_control_dogru").innerHTML="Değerler Uygun";
         document.getElementById("pay_control").innerHTML="";


     }
     else if(!isNumeric(var_arsapayi) && var_arsapayi=='')
     {
     	 document.getElementById("arsapayi").value='';
     	 	document.getElementById("pay_control_dogru").innerHTML="";
     	 document.getElementById("pay_control").innerHTML="Lütfen Sayı Giriniz";

     	   
     }

}

function tapusahibi_email_kontrol () {

	var tapusahibi_email=document.getElementById('tapusahibiemail').value;
	if(!validEmail(tapusahibi_email))
	{
		document.getElementById("tapusahibi_email_dogru").innerHTML="";
		document.getElementById("tapusahibi_email").innerHTML="Lütfen Email Formatına Uygun Değer Girin";
	}
	else
	{
		document.getElementById("tapusahibi_email").innerHTML="";
		document.getElementById("tapusahibi_email_dogru").innerHTML="Email Formatı Uygun";
	}
	
}
function kiraci_email_kontrol () {

	var kiraci_email=document.getElementById('kiraciemail').value;
	if(!validEmail(kiraci_email))
	{
		document.getElementById("kiraci_email_dogru").innerHTML="";
		document.getElementById("kiraci_email").innerHTML="Lütfen Email Formatına Uygun Değer Girin";
	}
	else
	{
		document.getElementById("kiraci_email").innerHTML="";
		document.getElementById("kiraci_email_dogru").innerHTML="Email Formatı Uygun";
	}
	
}
function tapusahibi_telno_kontrol() {

	var tapusahibi_telno=document.getElementById('tapusahibitelno').value;
	
	if(!validPhone(tapusahibi_telno))
	{
		document.getElementById("tapusahibi_telno_dogru").innerHTML="";
		document.getElementById("tapusahibi_telno").innerHTML="Lütfen Geçerli Bir Telefon Numarası Girin";
	}
	else
	{
		document.getElementById("tapusahibi_telno").innerHTML="";
		document.getElementById("tapusahibi_telno_dogru").innerHTML="Telefon Numarası Formatı Uygun";
	}
	
}
function kiraci_telno_kontrol() {

	var kiraci_telno=document.getElementById('kiracitelno').value;
	
	if(!validPhone(kiraci_telno))
	{
		document.getElementById("kiraci_telno_dogru").innerHTML="";
		document.getElementById("kiraci_telno").innerHTML="Lütfen Geçerli Bir Telefon Numarası Girin";
	}
	else
	{
		document.getElementById("kiraci_telno").innerHTML="";
		document.getElementById("kiraci_telno_dogru").innerHTML="Telefon Numarası Formatı Uygun";
	}
	
}

function tapusahibi_tcno_kontrol() 
{
		var tapusahibi_tcno=document.getElementById('tapusahibitcno').value;

		if(!validTcno(tapusahibi_tcno))
	{
		document.getElementById("tapusahibi_tcno_dogru").innerHTML="";
		document.getElementById("tapusahibi_tcno").innerHTML="Lütfen Geçerli Bir TC Numarası Girin";
	}
	else
	{
		document.getElementById("tapusahibi_tcno").innerHTML="";
		document.getElementById("tapusahibi_tcno_dogru").innerHTML="TC Numarası Formatı Uygun";
	}

}
function kiraci_tcno_kontrol() 
{
		var kiraci_tcno=document.getElementById('kiracitcno').value;

		if(!validTcno(kiraci_tcno))
	{
		document.getElementById("kiraci_tcno_dogru").innerHTML="";
		document.getElementById("kiraci_tcno").innerHTML="Lütfen Geçerli Bir TC Numarası Girin";
	}
	else
	{
		document.getElementById("kiraci_tcno").innerHTML="";
		document.getElementById("kiraci_tcno_dogru").innerHTML="TC Numarası Formatı Uygun";
	}

}



function validEmail(value)
{
	
	var re = /^[^@ ]+@[^@ ]+\.[^@ ]+$/;

	return re.test(value)
}

function validPhone(tel) {
    var parcalanmisTel = tel.split("");
    if (!/[^+].[^0-9]/.test(tel)) {
        if (parcalanmisTel[0] == "+" && tel.length == 13)
            return true;
        else if (parcalanmisTel[0] != "+" && (tel.length == 10 || tel.length == 11))
            return true;
        else
            return false;
    } else
        return false;
}

function validTcno(a){
  if(a.substr(0,1)==0&&a.lenght!=11){
    return false;
  }
  var i = 9, md='', mc='', digit, mr='';
  while(digit = a.charAt(--i)){
    i%2==0 ? md += digit : mc += digit;
  }
  if(((eval(md.split('').join('+'))*7)-eval(mc.split('').join('+')))%10!=parseInt(a.substr(9,1),10)){
    return false;
  }
  for (c=0;c<=9;c++){
    mr += a.charAt(c);
  }
  if(eval(mr.split('').join('+'))%10!=parseInt(a.substr(10,1),10)){
    return false;
  }
  return true;
}








   </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>