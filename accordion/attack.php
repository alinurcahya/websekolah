<?php 
include "../include/sambung.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$r=mysql_query("select * from admin where username = '$username'AND password = '$password'");
echo "<br>mysql_query(\"select * from admin where username = '$username' AND password = '$password'\");";
echo "<br> hasil :".mysql_num_rows($r).mysql_error();
/*
injection: asa' OR '1'='1' limit 1-- dumping data --
*/
?>
