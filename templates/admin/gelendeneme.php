<?php
include 'db/connection.php';
$giderid=$_POST["giderler"];
$gelentarih=$_POST["tarih"];
$gayri_id=$_POST["gm_id_no"];
$gayri_ad=$_POST["gm_ad"];
$temp_gider_id="";
$son="";
echo $gayri_ad."<br>";
echo $gayri_id."<br>";
echo $gelentarih."<br>";
$sayac=0;
$songelen="";
foreach ($giderid as $g_id)
{
    $songelen=$songelen.'\''.$g_id.'\',';
    $sayac++;

}

$songelen=rtrim($songelen,',');

echo $songelen;

$sorgu=mysqli_query($db,"select * from tb_bagimsizbolum where gayrimenkulid='$gayri_id'");
while ($par=mysqli_fetch_array($sorgu)){

$sorgu2=mysqli_query($db,"select * from tb_gideraciklama where id in ($songelen)");
while ($par2=mysqli_fetch_array($sorgu2)) {
    echo '
    <table border="1">
    <tr><td>
'.$par2["aciklama"].'  
</td>    
</tr>
    
    
    
    
</table>
    
    
    ';
}


}





?>