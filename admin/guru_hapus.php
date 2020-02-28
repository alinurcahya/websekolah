<?php
if(! $_GET['Hapususername']=="")
{
//koneksi ke server database 
include "./Config/koneksi.php";
$sqlHapus = "delete from guru where username='".$_GET['Hapususername']."'";
$resultHapus = mysql_query($sqlHapus);
if($resultHapus)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; input_guru.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Data Gagal DiHapus...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; input_guru.php'>";
}
}
?>