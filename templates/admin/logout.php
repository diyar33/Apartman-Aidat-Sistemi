<?php
session_start();
if(!empty($_SESSION['login_user']))
{
$_SESSION['login_user']='';
unset($_SESSION["login_info"]);
}
header("Location:login_soft.php");

?>
