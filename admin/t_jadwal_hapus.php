<?php
if(! $_GET['Hapuskd_jadwal']=="")
{
//koneksi ke server database 
include "./Config/koneksi.php";
$sqlHapus = "delete from t_jadwal where kd_jadwal='".$_GET['Hapuskd_jadwal']."'";
$resultHapus = mysql_query($sqlHapus);
if($resultHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_t_jadwal.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_t_jadwal.php'>";
}
}
?>