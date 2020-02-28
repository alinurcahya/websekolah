<?php
//Koneksi ke server Database
$hostname    = "localhost";
$username    = "root";
$password    = "";
$nmdatabase  = "db_jadwal";
$connect =mysqli_connect("$hostname", "$username", "$password");
if(! $connect)
{
die ("Database Not Connected");
}
//memilih database pada server
$database = mysqli_select_db($connect, $nmdatabase);
if(! $database)
{
die("Database Not Selected");
}
?>