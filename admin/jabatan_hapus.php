<?php
if(! $_GET['Hapusid_jabatan']=="")
{
//koneksi ke server database 
include "./Config/koneksi.php";
$sqlHapus = "delete from jabatan where id_jabatan='".$_GET['Hapusid_jabatan']."'";
$resultHapus = mysql_query($sqlHapus);
if($resultHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; input_jabatan.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; input_jabatan.php'>";
}
}
?>