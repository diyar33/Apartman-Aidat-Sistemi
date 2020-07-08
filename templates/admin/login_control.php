<?php
session_start();
include("db/connection.php");
if(isSet($_POST['username']) && isSet($_POST['password']))
{
// username and password sent from Form
	$username=$_POST["username"];
	$password=$_POST["password"];


//$username=mysqli_real_escape_string($db,$_POST['username']); 
//$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 

$result=mysqli_query($db,"SELECT id FROM users WHERE username='$username' and password='$password'");
$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$row['id'];

echo $row['id'];
header("Location:index.html");
}
else
{
	$_SESSION["login_info"]="hatali";
	header("Location:login_soft.php");
	
}

}
?>