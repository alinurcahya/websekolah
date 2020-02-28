<?php
include "./Config/koneksi.php";

$lama = ($_POST['p_lama']);
$baru = ($_POST['p_baru']);
if($_SESSION['username']=="admin"){
$query = mysql_fetch_array(mysql_query("SELECT password FROM admin WHERE username = '$_SESSION[admin]'"));
if($query['password']==$lama){
$sql = mysql_query("UPDATE admin SET password='$baru' WHERE username = '$_SESSION[admin]'");
echo "<script>alert('Password sudah diganti ^_^ ')</script>";
}else{
echo "<script>alert('Password lama tidak sesuai!')</script>";
}

}else if($_SESSION['username']=="admin"){

$query = mysql_fetch_array(mysql_query("SELECT password FROM admin WHERE username = '$_SESSION[admin]'"));

if($query['password']==$lama){
$sql = mysql_query("UPDATE admin SET password='$baru' WHERE username = '$_SESSION[admin]'");
echo "<script>alert('Password sudah diganti ^_^ ')</script>";
}else{
echo "<script>alert('Password lama tidak sesuai!')</script>";
}
}
?>
<script>document.location.href="ganti_password.php"</script>