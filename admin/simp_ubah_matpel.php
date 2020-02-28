<?php
include "./Config/koneksi.php"; //koneksi ke server database
$kode_matpel=$_POST['kode_matpel'];
$nama_matpel=$_POST['nama_matpel'];
$jam_matpel=$_POST['jam_matpel'];
$NIP=$_POST['NIP'];
$nama_guru=$_POST['nama_guru'];

{
$sqlUbah = "update matpel set kode_matpel='$kode_matpel', 
               nama_matpel='$nama_matpel',
			   jam_matpel='$jam_matpel',
			   nama_guru='$nama_guru'
			   where NIP='$NIP'";
	   
$query = mysql_query($sqlUbah);
if($query)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil Di Update');
      </script>";
    echo "<meta http-equiv='refresh' content='0; view_matpel.php'>";
}
else
{
echo "<script type='text/javascript'>
	alert('Data Gagal Di Update');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_matpel.php'>";
}
 }

?>