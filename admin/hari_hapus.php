<?php
if(! $_GET['HapusHari']=="")
{
//koneksi ke server database 
include "./Config/koneksi.php";
$sqlHapus = "delete from hari where Hari='".$_GET['HapusHari']."'";
$resultHapus = mysql_query($sqlHapus);
if($resultHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_hari.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_hari.php'>";
}
}
?>