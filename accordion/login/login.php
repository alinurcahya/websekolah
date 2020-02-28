<?php

require_once '../../include/sambung.php';

// username and password sent from form
$username=$_POST['username'];
$password=md5($_POST['password']);

$admin = mysql_num_rows(mysql_query("SELECT * FROM admin WHERE username='$username' and password='$password'"));

$guru = mysql_num_rows(mysql_query("SELECT * FROM guru WHERE username='$username' and password='$password'"));

$siswa = mysql_num_rows(mysql_query("SELECT * FROM siswa WHERE username='$username' and password='$password'"));

if($admin==1){
session_start();
		$_SESSION['admin']=$username;
		$_SESSION['level']="admin";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}
else if($guru==1){
session_start();
		$_SESSION['guru']=$username;
		$_SESSION['level']="guru";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}else if($siswa==1){
session_start();
		$_SESSION['siswa']=$username;
		$_SESSION['level']="siswa";
		$_SESSION['agent']=md5($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}else{
echo "<script>alert('Login gagal!'); document.location.href=\"index.php\"</script>";
}
?>
