 <script type="text/javascript">
   $(document).ready(function(){
         $('input[id="satir_ekle2"]').click(function () {
			
			veri2_text = $('input[name="satir_ekle2"]').val();
			
   $.post('coklu_satir_ekle2.php', {yazi2_text : veri2_text }, function (gelen_cevap2) {
     
	  $('#grup3').html(gelen_cevap2);
	 
	  
   });
    
			});
			});
			
			
				 $(document).ready(function(){
         $('input[id="satir_ekle2"]').click(function () {
			
			veri2_buton = $('input[name="satir_ekle2"]').val();
			
   $.post('coklu_satir_ekle2.php', {yazi2_buton : veri2_buton }, function (gelen_cevap2) {
     
	  $('#buton_ekle1').html("");
	  $('#buton_ekle2').html("");
	  $('#buton_ekle3').html(gelen_cevap2);
	 
	  
   });
    
			});
			});
			
					
			  $(document).ready(function(){
         $('input[id="coklu_goster"]').click(function () {
			<?php
			$veri_arama="veri_arama";
			$satir="satir"; 
			for($i=1;$i<21; $i++)
			{
			echo $veri_arama.$i; ?> = $('input[name="<?php echo $satir.$i; ?>"]').val();
			<?php
			}
			?>
			
   $.post('coklu_goster_tablo.php', {
	   <?php
	   for($i=1;$i<21; $i++)
			{
	   echo $satir.$i; ?> : <?php echo $veri_arama.$i; ?> , 
	   <?php
			}
			?>
	   }, function (gelen_cevap) {
     
	  $('#sonuc_tablo').html(gelen_cevap);
	  
   });
    
			});
			});
			</script>

<?php

if(isset($_POST['yazi_text']))
{
	session_start();
	$_SESSION['satir_sayisi']=10;
	echo '
	 <ul class="list-details">
                                       <li style="padding-top:45px;">  <input type="text" name="satir6" id="satir6" placeholder="6" ></li>
                                       <li style="padding-top:45px;">  <input type="text" name="satir7" id="satir7" placeholder="7"></li>
                                       <li style="padding-top:45px;">  <input type="text" name="satir8" id="satir8" placeholder="8"></li>
                                       <li style="padding-top:45px;">  <input type="text" name="satir9" id="satir9" placeholder="9"></li>
                                       <li style="padding-top:45px;">  <input type="text" name="satir10" id="satir10" placeholder="10"></li>
                                       
                                       
                                        </ul>';
	
}




?>
<?php


if(isset($_POST['yazi_buton']))
{
	echo '  <input type="button" name="satir_ekle2" id="satir_ekle2" class="btn btn-tiny empty main-border" value="&nbsp;&nbsp;SATIR EKLE&nbsp;&nbsp;">
                                <input type="reset" name="temizle" class="btn btn-small" value="&nbsp;&nbsp;TEMİZLE&nbsp;&nbsp;" >
                                <input type="button" name="coklu_goster" id="coklu_goster" class="btn btn-small main-bg" value="&nbsp;&nbsp;ARAMA&nbsp;&nbsp;" >
								';
}

?>
