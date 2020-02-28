<?php
//Koneksi ke server Database
$hostname    = "localhost";
$username    = "root";
$password    = "";
$nmdatabase  = "db_jadwal";
$connect =mysql_connect("$hostname", "$username", "$password");
if(! $connect)
{
die ("Database Not Connected");
}
//memilih database pada server
$database = mysql_select_db($nmdatabase, $connect);
if(! $database)
{
die("Database Not Selected");
}
?>