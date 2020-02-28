<?php
include "./Config/koneksi.php";


$ambil = mysql_query("SELECT current_login FROM siswa WHERE username='$_SESSION[siswa]'");


$query = mysql_query("UPDATE siswa SET last_login = '$hasil[current_login]' WHERE username='$_SESSION[siswa]'");

//$_SESSION=array();
unset($_SESSION['siswa']);
unset($_SESSION['username']);
//setcookie('PHPSESSID','',time()-3600,'/','',0);
header("location:login.php");
?>