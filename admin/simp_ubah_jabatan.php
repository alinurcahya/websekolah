<?php
include "./Config/koneksi.php"; //koneksi ke server database
$id_jabatan=$_POST['id_jabatan'];
$nama_jabatan=$_POST['nama_jabatan'];
$NIP=$_POST['NIP'];
$nama_guru=$_POST['nama_guru'];
$nama_matpel=$_POST['nama_matpel'];

{
$sqlUbah = "update jabatan set nama_jabatan='$nama_jabatan', 
               NIP='$NIP',
			   nama_guru='$nama_guru',
			   nama_matpel='$nama_matpel'

			   
			   where id_jabatan='$id_jabatan'";
	   
$query = mysql_query($sqlUbah);
if($query)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil Di Update');
      </script>";
    echo "<meta http-equiv='refresh' content='0; view_jabatan.php'>";
}
else
{
echo "<script type='text/javascript'>
	alert('Data Gagal Di Update');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_jabatan.php'>";
}
 }

?>