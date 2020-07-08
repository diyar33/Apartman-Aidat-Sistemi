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
			Gider Listesi
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
						<a href="">Gider Listesi  Sayfası</a>
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
										<label class="control-label col-md-3">Gayri Menkul Adı</label>
										<input type="hidden" name="visited" value="" />
										<div class="col-md-4">
											<select name="gayrimenkulid" id="gayrimenkulid"   class="form-control input-xlarge select2me" data-placeholder="Anagayrimenkul Seçiniz...">
												<option value=""></option>
												<?php 

												$sql="select 
												tb_gm.id,
												tb_gm.ad
												from 
												tb_anagayrimenkul tb_gm";
												$result = $db->query($sql);
												    // output data of each row
												    while($row = $result->fetch_assoc()) {
												    	echo '<option value="'.$row["id"].'">'.$row["ad"].'</option>';
												    	
												    }
												 ?>
											</select>
										</div>

									</div>

											<div class="form-group">
										<label class="control-label col-md-3">Giderin Tarihi</label>
										<div class="col-md-4">
											<select id="select2_sample2" name="select2_sample2[]" class="form-control select2" >
<option></option>

												<?php 
												for ($i=2020; $i >2000; $i--) {
													echo '<optgroup label="'.$i.'">
												<option value="01-'.$i.'">Ocak('.$i.')</option>
												<option value="02-'.$i.'">Şubat('.$i.')</option>
												<option value="03-'.$i.'">Mart('.$i.')</option>
												<option value="04-'.$i.'">Nisan('.$i.')</option>
												<option value="05-'.$i.'">Mayıs('.$i.')</option>
												<option value="06-'.$i.'">Haziran('.$i.')</option>
												<option value="07-'.$i.'">Temmuz('.$i.')</option>
												<option value="08-'.$i.'">Ağustos('.$i.')</option>
												<option value="09-'.$i.'">Eylül('.$i.')</option>
												<option value="10-'.$i.'">Ekim('.$i.')</option>
												<option value="11-'.$i.'">Kasım('.$i.')</option>
												<option value="12-'.$i.'">Aralık('.$i.')</option>
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

					<?php if (!empty($_SESSION["gider_toplu_silme"]) && $_SESSION["gider_toplu_silme"]=="basarili") {
									unset($_SESSION["gider_toplu_silme"]);
									 ?>

									<div class="alert alert-success ">
										<button class="close" data-close="alert"></button>
										 Silme İşlemi Başarılı
									</div>
									<?php } ?>
									<?php if (!empty($_SESSION["gider_toplu_silme"]) && $_SESSION["gider_toplu_silme"]=="hatali") {
									unset($_SESSION["gider_toplu_silme"]);
									 ?>

									<div class="alert alert-danger ">
										<button class="close" data-close="alert"></button>
										 Silme İşlemi Hatalı
									</div>
									<?php } ?>
	
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
							<form name="f1" method="post" action="anagayrimenkul_aidat_tablosu_goruntule.php">
									<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<button type="submit" onclick="f1.action='gider_toplu_silme_control.php'; return true;"  id="sample_editable_1_new" class="btn green">
											Seçilenleri Sil <i class="glyphicon glyphicon-trash "> </i>
											</button>
										</div>
									</div>
									<div class="col-md-6">
										<div class="btn-group pull-right">
											<button id="sample_editable_1_new" onclick="window.location.href='gider_ekle.php'"  class="btn green" data-toggle="dropdown">Yeni Ekle <i class="fa fa-plus"></i>
											</button>
											
											
										</div>

										<div class="btn-group pull-right">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<button type="submit" onclick="this.form.target='_blank';return true;" id="sample_editable_1_new" class="btn green">
											Aidat Tablosu Görüntüle   <i class="fa fa-table"> </i>
											</button>
											
											
										</div>
									</div>
									
								</div>
								<br class="clear" />


								<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
								<tr>
									<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" checked/>
								</th>

										<th scope="col" style="width:250px">
										Gider Tanimi
									</th>
									<th scope="col" style="width:100px !important">
										Ödenecek Yer
									</th>
									<th scope="col" style="width:150px">
										Toplam Tutar
									</th>

									<th scope="col" style="width:250px">
										Giderin Tarihi
									</th>
                                    <th scope="col" style="width:100px">
Taksit
                                    </th>
									<th scope="col">
										Detay
									</th>
								
									<th scope="col">
										Düzenle
									</th>
									<th scope="col">
										 Sil
									</th>
								</tr>
								</thead>
								<tbody>



									<?php

									if (!empty($_COOKIE["global_tarih_id"]) || !empty($_COOKIE["global_gm_id"]) ) {


									$gayrimenkulid=$_COOKIE["global_gm_id"];
									$global_tarih_id=$_COOKIE["global_tarih_id"];

									unset($_COOKIE["global_gm_id"]);
									setcookie("global_gm_id", "", time()-3600);



									unset($_COOKIE["global_tarih_id"]);
									setcookie("global_tarih_id", "", time()-3600);

									$global_tarih_id=explode('*', $global_tarih_id);

									$temp_tarih="";


								
								


											foreach ($global_tarih_id as $key) {
										if (!empty($key)) {
											$key='08-'.$key;//varsayılan gün atama
											$temp_format_degistirme=explode('-', $key);
											$temp_tarih=$temp_format_degistirme[2].'-'.$temp_format_degistirme[1].'-'.$temp_format_degistirme[0];
										}
									}
                                        $sql="select distinct 
									tb_agm_g.id as 'No',
                                    concat(tb_agm_g.cinsi,tb_acklma.aciklama) as 'gidertanimi',
                                     tb_gm.id as 'gm_id_no',
									 tb_agm_g.toplamtutar,
									 tb_agm_g.tarih,
       tb_agm_g.taksit_sayisi,
									 tb_gm.ad
									from tb_anagayrimenkul_giderler tb_agm_g
                                    inner join tb_anagayrimenkul tb_gm
                                    on tb_agm_g.gayrimenkulid=tb_gm.id
inner join tb_taksit tb_tks
on tb_tks.gider_id=tb_agm_g.id
inner join tb_gideraciklama tb_acklma
on tb_acklma.id=tb_agm_g.aciklamasi
									where tb_agm_g.gayrimenkulid='$gayrimenkulid'  and   tb_agm_g.tarih ='$temp_tarih' or tb_tks.taksit_ay='$temp_tarih'
									order by tb_agm_g.toplamtutar ";

                                        $result = $db->query($sql);

                                        $sorgu=mysqli_fetch_array(mysqli_query($db,"select ad,id from tb_anagayrimenkul where id='$gayrimenkulid'"));
										$sayac_satir_sayisi=1;
										$sayac=0;
if ($result->num_rows>0){
						     while($row = $result->fetch_assoc()) {
                                 $gd_id=$row["No"];
                                 $sql2=mysqli_query($db,"select ad from tb_firma 
inner join tb_odemeyer on
tb_firma.id=tb_odemeyer.odeme_yer_id
where tb_odemeyer.gider_id='$gd_id'");

                                 echo '<tr class="odd gradeX">';
						    	echo '<td><input type="checkbox" name="giderler['.$sayac.']" class="checkboxes" value="'.$row["No"].'" checked/></td>';
						    	echo '<input type="hidden" name="gm_ad" value="'.$row["ad"].'"/>';
						    	echo '<input type="hidden" name="gm_id_no" value="'.$row["gm_id_no"].'"/>';
						    	echo '<input type="hidden" name="tarih" value="'.$temp_tarih.'"/>';
						    	echo '<td>'.$row["gidertanimi"].'</td>';
						    	echo '<td>';
                                 while ($par=mysqli_fetch_array($sql2)){
                                     echo $par["ad"]."<br>";
                                 }
                                 echo '</td>';
						    	echo '<td>'.$row["toplamtutar"].'</td>';
						    	echo '<td>'.$row["tarih"].'</td>';
                                 echo '<td>'.$row["taksit_sayisi"].'</td>';

                                 echo '<td><a href="gider_detay.php?gd_id='.$row["No"].'" class="btn default btn-xs blue-stripe"> Detay </a></td>';
						    	echo '<td><a class="btn default" href=bagimsizbolum_duzenle.php?gd_id='.$row["No"].'><i class="glyphicon glyphicon-cog font-blue"> </i> </a></td>';
							    echo '<td><a class="btn default" onclick="return confirm(\'Silmek İstediğinizden Eminmisiniz?\');" href=bagimsizbolum_sil.php?gd_id='.$row["No"].'><i class="glyphicon glyphicon-trash font-blue">
								 </i> </a></td>';
						        echo '</tr>';
						        $sayac_satir_sayisi++;
						        $sayac++;
						    }
                                }



else{
        echo '<input type="text" hidden name="gm_ad" value="' . $sorgu["ad"]. '" >';
        echo '<input type="text" hidden name="gm_id_no" value="' . $gayrimenkulid . '" >';
        echo '<input type="text" hidden name="tarih" value="' .$temp_tarih. '" >';

}
						}


						

					

						 ?>
								</tbody>
								</table>
							</div>
						</div>
					</div>

	</div>
</form>

				
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

<script src="../../assets/admin/pages/scripts/table-managed.js"></script>


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
var tarih_dizisi=new Array();
var tarih_id=document.getElementById("select2_sample2");
  for (var i = 0; i < tarih_id.options.length; i++) {
     if(tarih_id.options[i].selected ==true){
          tarih_dizisi[i] =tarih_id.options[i].value;
      }
  }

var temp_tarihdizisi="";
for (var i = 0; i < tarih_dizisi.length; i++) {
	if (typeof tarih_dizisi[i] != 'undefined') {
		temp_tarihdizisi=temp_tarihdizisi+tarih_dizisi[i]+"*";
	};
};


    var gm_id = document.getElementById("gayrimenkulid").value;


  
    document.cookie = "global_gm_id="+gm_id;
    document.cookie = "global_tarih_id="+temp_tarihdizisi;
    window.location='gider_listesi.php';
        }
</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

<?php 
ob_end_flush();
 ?>