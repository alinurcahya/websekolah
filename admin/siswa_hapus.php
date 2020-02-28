<?php
if(! $_GET['HapusUsername']=="")
{
//koneksi ke server database 
include "./Config/koneksi.php";
$sqlHapus = "delete from siswa where Username='".$_GET['HapusUsername']."'";
$resultHapus = mysql_query($sqlHapus);
if($resultHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_siswa.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_siswa.php'>";
}
}
?>