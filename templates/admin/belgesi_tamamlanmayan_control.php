<?php
if ($_POST){
    include 'db/connection.php';
$belgenin_cinsi=$_POST["belgenin_cinsi"];
$belgenin_serino=$_POST["belgenin_serino"];
$belgenin_tarihi=$_POST["belgenin_tarihi"];
$gelen_id=$_GET["id"];
mysqli_query($db,"update  tb_anagayrimenkul_giderler set belgenin_tarihi='$belgenin_tarihi',belgenin_serino='$belgenin_serino',belgenin_cinsi='$belgenin_cinsi' where id='$gelen_id' ");

}


?>