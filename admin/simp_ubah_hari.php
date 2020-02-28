<?php
include "./Config/koneksi.php"; //koneksi ke server database
$Hari=$_POST['Hari'];
$kelas=$_POST['kelas'];
$nama_matpel=$_POST['nama_matpel'];
$NIP=$_POST['NIP'];
$nama_guru=$_POST['nama_guru'];

{
$sqlUbah = "update hari set Hari='$Hari', 
               kelas='$kelas',
			   nama_matpel='$nama_matpel',
			   nama_guru='$nama_guru'

			   
			   where NIP='$NIP'";
	   
$query = mysql_query($sqlUbah);
if($query)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil Di Update');
      </script>";
    echo "<meta http-equiv='refresh' content='0; view_hari.php'>";
}
else
{
echo "<script type='text/javascript'>
	alert('Data Gagal Di Update');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_hari.php'>";
}
 }

?>