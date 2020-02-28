<?php
include "./Config/koneksi.php"; //koneksi ke server database
$nis=$_POST['nis'];
$Username=$_POST['textUsername'];
$Password=$_POST['Password'];
$nama_siswa=$_POST['nama_siswa'];
$tempat_lahir=$_POST['txttempat_lahir'];
$tanggal_lahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
$jekel=$_POST['jekel'];
$status=$_POST['status'];
$kelas=$_POST['kelas'];

{
$sqlUbah ="update siswa set Username='$Username', 
               Password='$Password',
			   nama_siswa='$nama_siswa',
			   tempat_lahir='$tempat_lahir',
			   tanggal_lahir='$tanggal_lahir',
			   jekel='$jekel',
			   status='$status',
			   kelas='$kelas'	
			   
			   where nis='$nis'";
	   
$query = mysql_query($sqlUbah) ;
if($query)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil Di Update');
      </script>";
    echo "<meta http-equiv='refresh' content='0; view_siswa.php'>";
}
else
{
echo "<script type='text/javascript'>
	alert('Data Gagal Di Update');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_siswa.php'>";
}
 }


?>