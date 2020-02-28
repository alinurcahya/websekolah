<?php
include "./Config/koneksi.php";


$ambil = mysql_query("SELECT current_login FROM guru WHERE username='$_SESSION[guru]'");


$query = mysql_query("UPDATE guru SET last_login = '$hasil[current_login]' WHERE username='$_SESSION[guru]'");

//$_SESSION=array();
unset($_SESSION['guru']);
unset($_SESSION['username']);
//setcookie('PHPSESSID','',time()-3600,'/','',0);
header("location:login.php");
?>