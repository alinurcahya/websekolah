<?php
if(! $_GET['Hapuskode_matpel']=="")
{
//koneksi ke server database 
include "./Config/koneksi.php";
$sqlHapus = "delete from matpel where kode_matpel='".$_GET['Hapuskode_matpel']."'";
$resultHapus = mysql_query($sqlHapus);
if($resultHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_matpel.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_matpel.php'>";
}
}
?>