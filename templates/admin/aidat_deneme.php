<?php
session_start();
include("db/connection.php");
$gm_ad=$_POST["gm_ad"];
$gm_id=$_POST["gm_id_no"];
echo $gm_ad."<br>";
echo $gm_id;





?>