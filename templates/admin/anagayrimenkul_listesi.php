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

  <script language="JavaScript" type="text/javascript">
function gayrimenkulSil(gmID)
{
var cevap=prompt("Şifrenizi Giriniz","?");
cevap=calcMD5(cevap);

if (cevap=='528cd347af8a6c13fa99fa92fb4bc8e3')
{
window.location.href = 'anagayrimenkul_sil.php?gm_id=' + gmID;
}
else
{
  alert("Silme İşlemi Başarısız");
}
}






/*
 * A JavaScript implementation of the RSA Data Security, Inc. MD5 Message
 * Digest Algorithm, as defined in RFC 1321.
 * Copyright (C) Paul Johnston 1999 - 2000.
 * Updated by Greg Holt 2000 - 2001.
 * See http://pajhome.org.uk/site/legal.html for details.
 */

/*
 * Convert a 32-bit number to a hex string with ls-byte first
 */
var hex_chr = "0123456789abcdef";
function rhex(num)
{
  str = "";
  for(j = 0; j <= 3; j++)
    str += hex_chr.charAt((num >> (j * 8 + 4)) & 0x0F) +
           hex_chr.charAt((num >> (j * 8)) & 0x0F);
  return str;
}

/*
 * Convert a string to a sequence of 16-word blocks, stored as an array.
 * Append padding bits and the length, as described in the MD5 standard.
 */
function str2blks_MD5(str)
{
  nblk = ((str.length + 8) >> 6) + 1;
  blks = new Array(nblk * 16);
  for(i = 0; i < nblk * 16; i++) blks[i] = 0;
  for(i = 0; i < str.length; i++)
    blks[i >> 2] |= str.charCodeAt(i) << ((i % 4) * 8);
  blks[i >> 2] |= 0x80 << ((i % 4) * 8);
  blks[nblk * 16 - 2] = str.length * 8;
  return blks;
}

/*
 * Add integers, wrapping at 2^32. This uses 16-bit operations internally 
 * to work around bugs in some JS interpreters.
 */
function add(x, y)
{
  var lsw = (x & 0xFFFF) + (y & 0xFFFF);
  var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
  return (msw << 16) | (lsw & 0xFFFF);
}

/*
 * Bitwise rotate a 32-bit number to the left
 */
function rol(num, cnt)
{
  return (num << cnt) | (num >>> (32 - cnt));
}

/*
 * These functions implement the basic operation for each round of the
 * algorithm.
 */
function cmn(q, a, b, x, s, t)
{
  return add(rol(add(add(a, q), add(x, t)), s), b);
}
function ff(a, b, c, d, x, s, t)
{
  return cmn((b & c) | ((~b) & d), a, b, x, s, t);
}
function gg(a, b, c, d, x, s, t)
{
  return cmn((b & d) | (c & (~d)), a, b, x, s, t);
}
function hh(a, b, c, d, x, s, t)
{
  return cmn(b ^ c ^ d, a, b, x, s, t);
}
function ii(a, b, c, d, x, s, t)
{
  return cmn(c ^ (b | (~d)), a, b, x, s, t);
}

/*
 * Take a string and return the hex representation of its MD5.
 */
function calcMD5(str)
{
  x = str2blks_MD5(str);
  a =  1732584193;
  b = -271733879;
  c = -1732584194;
  d =  271733878;

  for(i = 0; i < x.length; i += 16)
  {
    olda = a;
    oldb = b;
    oldc = c;
    oldd = d;

    a = ff(a, b, c, d, x[i+ 0], 7 , -680876936);
    d = ff(d, a, b, c, x[i+ 1], 12, -389564586);
    c = ff(c, d, a, b, x[i+ 2], 17,  606105819);
    b = ff(b, c, d, a, x[i+ 3], 22, -1044525330);
    a = ff(a, b, c, d, x[i+ 4], 7 , -176418897);
    d = ff(d, a, b, c, x[i+ 5], 12,  1200080426);
    c = ff(c, d, a, b, x[i+ 6], 17, -1473231341);
    b = ff(b, c, d, a, x[i+ 7], 22, -45705983);
    a = ff(a, b, c, d, x[i+ 8], 7 ,  1770035416);
    d = ff(d, a, b, c, x[i+ 9], 12, -1958414417);
    c = ff(c, d, a, b, x[i+10], 17, -42063);
    b = ff(b, c, d, a, x[i+11], 22, -1990404162);
    a = ff(a, b, c, d, x[i+12], 7 ,  1804603682);
    d = ff(d, a, b, c, x[i+13], 12, -40341101);
    c = ff(c, d, a, b, x[i+14], 17, -1502002290);
    b = ff(b, c, d, a, x[i+15], 22,  1236535329);    

    a = gg(a, b, c, d, x[i+ 1], 5 , -165796510);
    d = gg(d, a, b, c, x[i+ 6], 9 , -1069501632);
    c = gg(c, d, a, b, x[i+11], 14,  643717713);
    b = gg(b, c, d, a, x[i+ 0], 20, -373897302);
    a = gg(a, b, c, d, x[i+ 5], 5 , -701558691);
    d = gg(d, a, b, c, x[i+10], 9 ,  38016083);
    c = gg(c, d, a, b, x[i+15], 14, -660478335);
    b = gg(b, c, d, a, x[i+ 4], 20, -405537848);
    a = gg(a, b, c, d, x[i+ 9], 5 ,  568446438);
    d = gg(d, a, b, c, x[i+14], 9 , -1019803690);
    c = gg(c, d, a, b, x[i+ 3], 14, -187363961);
    b = gg(b, c, d, a, x[i+ 8], 20,  1163531501);
    a = gg(a, b, c, d, x[i+13], 5 , -1444681467);
    d = gg(d, a, b, c, x[i+ 2], 9 , -51403784);
    c = gg(c, d, a, b, x[i+ 7], 14,  1735328473);
    b = gg(b, c, d, a, x[i+12], 20, -1926607734);
    
    a = hh(a, b, c, d, x[i+ 5], 4 , -378558);
    d = hh(d, a, b, c, x[i+ 8], 11, -2022574463);
    c = hh(c, d, a, b, x[i+11], 16,  1839030562);
    b = hh(b, c, d, a, x[i+14], 23, -35309556);
    a = hh(a, b, c, d, x[i+ 1], 4 , -1530992060);
    d = hh(d, a, b, c, x[i+ 4], 11,  1272893353);
    c = hh(c, d, a, b, x[i+ 7], 16, -155497632);
    b = hh(b, c, d, a, x[i+10], 23, -1094730640);
    a = hh(a, b, c, d, x[i+13], 4 ,  681279174);
    d = hh(d, a, b, c, x[i+ 0], 11, -358537222);
    c = hh(c, d, a, b, x[i+ 3], 16, -722521979);
    b = hh(b, c, d, a, x[i+ 6], 23,  76029189);
    a = hh(a, b, c, d, x[i+ 9], 4 , -640364487);
    d = hh(d, a, b, c, x[i+12], 11, -421815835);
    c = hh(c, d, a, b, x[i+15], 16,  530742520);
    b = hh(b, c, d, a, x[i+ 2], 23, -995338651);

    a = ii(a, b, c, d, x[i+ 0], 6 , -198630844);
    d = ii(d, a, b, c, x[i+ 7], 10,  1126891415);
    c = ii(c, d, a, b, x[i+14], 15, -1416354905);
    b = ii(b, c, d, a, x[i+ 5], 21, -57434055);
    a = ii(a, b, c, d, x[i+12], 6 ,  1700485571);
    d = ii(d, a, b, c, x[i+ 3], 10, -1894986606);
    c = ii(c, d, a, b, x[i+10], 15, -1051523);
    b = ii(b, c, d, a, x[i+ 1], 21, -2054922799);
    a = ii(a, b, c, d, x[i+ 8], 6 ,  1873313359);
    d = ii(d, a, b, c, x[i+15], 10, -30611744);
    c = ii(c, d, a, b, x[i+ 6], 15, -1560198380);
    b = ii(b, c, d, a, x[i+13], 21,  1309151649);
    a = ii(a, b, c, d, x[i+ 4], 6 , -145523070);
    d = ii(d, a, b, c, x[i+11], 10, -1120210379);
    c = ii(c, d, a, b, x[i+ 2], 15,  718787259);
    b = ii(b, c, d, a, x[i+ 9], 21, -343485551);

    a = add(a, olda);
    b = add(b, oldb);
    c = add(c, oldc);
    d = add(d, oldd);
  }
  return rhex(a) + rhex(b) + rhex(c) + rhex(d);
}
 






</script>


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
        Anagayrimenkul Listesi
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
<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
">
  Anagayrimenkul Listesi Sayfası
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
                  
                  
                  <?php if (!empty($_SESSION["gideraciklama_duzenleme"]) && $_SESSION["gideraciklama_duzenleme"]=="degerlerbos") {
unset($_SESSION["gideraciklama_duzenleme"]);
?>
                  <div class="alert alert-warning ">
                    <button class="close" data-close="alert">
                    </button>
                    Boş Değerler Girilemez.
                  </div>
                  <?php } ?>
                  
                  
                  <?php if (!empty($_SESSION["gideraciklama_duzenleme"]) && $_SESSION["gideraciklama_duzenleme"]=="hatali") {
unset($_SESSION["gideraciklama_duzenleme"]);
?>
                  <div class="alert alert-danger ">
                    <button class="close" data-close="alert">
                    </button>
                    Hatalı Düzenleme İşlemi. Lütfen Kontrol Edin.
                  </div>
                  <?php } ?>
                  
                  <?php if (!empty($_SESSION["gideraciklama_duzenleme"]) && $_SESSION["gideraciklama_duzenleme"]=="basarili") {
unset($_SESSION["gideraciklama_duzenleme"]);
?>
                  
                  <div class="alert alert-success ">
                    <button class="close" data-close="alert">
                    </button>
                    Düzenleme İşlemi Başarılı
                  </div>
                  <?php } ?>
                  
                  <?php if (!empty($_SESSION["anagayrimenkul_silme"]) && $_SESSION["anagayrimenkul_silme"]=="basarili") {
unset($_SESSION["anagayrimenkul_silme"]);
?>
                  
                  <div class="alert alert-success ">
                    <button class="close" data-close="alert">
                    </button>
                    Silme İşlemi Başarılı
                  </div>
                  <?php } ?>
                  
                  
                  
                  
                  
                  
                  
                  <div class="portlet-body">
                    
                    <table  class="table table-striped table-bordered table-hover" id="sample_6">
                      <thead>
                        <tr>
                          <th scope="col" style="width=150px">
                            No
                          </th>
                          <th scope="col" style="width=350px">
                            Ad
                          </th>
                          <th scope="col" style="width=150px ">
                            Genel Bilgiler
                          </th>
                          <th scope="col" style="width=150px ">
                            Temsilci-Denetci Bilgileri
                          </th>
                          
                          <th scope="col" style="width=50px ">
                            Hesap Bilgileri
                          </th>
                          <th scope="col" style="width=50px ">
                            Toplam Bağ. Böl. Sayısı
                          </th>
                          <th scope="col" style="width=50px ">
                            Dolu Bağ. Böl. Sayısı
                          </th>
                            <th scope="col" style="width=50px ">
                           Detay
                          </th>
                          
                          <th scope="col" style="width=50px ">
                            Düzenle
                          </th>
                          <th scope="col" style="width=50px ">
                            Sil
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php 

$sql = "select 
tb_gx.id as 'No',
tb_gx.ad as 'isim',
tb_gx.bagimsizbolumsayisi,

(select if (exists( select * from tb_anagayrimenkul tb_g where tb_g.id=tb_gx.id and  ad!='' and  aciklama!='' and adres!='' and bagimsizbolumsayisi!=''   and karardefteri!='' and isletmedefteri!=''),'true','false')) as 'genelbilgiler',

(select if (exists( select * from tb_anagayrimenkul tb_g where tb_g.id=tb_gx.id  and temsilci!=''  and denetci!=''),'true','false')) as 'temsilci_denetci_bilgileri',

(select if (exists( select * from tb_anagayrimenkul tb_g where tb_g.id=tb_gx.id and  banka_adi!='' and  hesapadi!='' and subekodu!='' and hesapno!='' and iban_no!='' and vergino!=''),'true','false')) as 'hesapbilgileri',

(select if (exists(select * from tb_anagayrimenkul tb_a where tb_a.id=tb_gx.id and tb_a.id in (select tb_b.gayrimenkulid from tb_bagimsizbolum tb_b)),(select count(*) from tb_bagimsizbolum tb_b where tb_b.gayrimenkulid  in (select tb_a.id from tb_anagayrimenkul tb_a where tb_a.id=tb_gx.id)),0)) as 'bagimsizbolumbilgisi'

from tb_anagayrimenkul as tb_gx";
$result = $db->
query($sql);







while($row = $result->
fetch_assoc()) {
echo '
<tr>
';
echo '
<td>
'.$row["No"].'
</td>
';
echo '
<td>
'.$row["isim"].'
</td>
';

if ($row["genelbilgiler"]=="true") {
echo '
<td>
<i class="fa fa-check">
</i>
</td>
';
}
else 
{
echo '
<td>
<i class="fa fa-times">
</i>
</td>
';
}

if ($row["temsilci_denetci_bilgileri"]=="true") {
echo '
<td>
<i class="fa fa-check">
</i>
</td>
';
}
else 
{

echo '
<td>
<i class="fa fa-times">
</i>
</td>
';
}

if ($row["hesapbilgileri"]=="true") {
echo '
<td>
<i class="fa fa-check">
</i>
</td>
';
}
else 
{

echo '
<td>
<i class="fa fa-times">
</i>
</td>
';
}

echo '
<td>
<span class="badge bg-blue">
'.$row["bagimsizbolumsayisi"].'
</span>
</td>
';
echo '
<td>
<span class="badge bg-blue">
'.$row["bagimsizbolumbilgisi"].'
</span>
</td>
';

echo '<td><a href="anagayrimenkul_detay.php?gm_id='.$row["No"].'" class="btn default btn-xs blue-stripe">
                    Detay </a></td>';




echo '
<td>
<a class="btn default" href=anagayrimenkul_duzenle.php?gm_id='.$row["No"].'>
<i class="glyphicon glyphicon-cog font-blue">
</i>

</a>
</td>
';
echo '<td><a class="btn default" href="javascript:gayrimenkulSil('.$row["No"].')"  > <i class="glyphicon glyphicon-trash font-blue"> </i> </a> </td> ';
echo '</tr> ';
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