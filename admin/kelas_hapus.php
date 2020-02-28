<?php
if(! $_GET['Hapuskode_kelas']=="")
{
//koneksi ke server database 
include "./Config/koneksi.php";
$sqlHapus = "delete from kelas where kode_kelas='".$_GET['Hapuskode_kelas']."'";
$resultHapus = mysql_query($sqlHapus);
if($resultHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_kelas.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_kelas.php'>";
}
}
?>