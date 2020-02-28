<?php
include "./Config/koneksi.php"; //koneksi ke server database
$kode_kelas=$_POST['kode_kelas'];
$kelas=$_POST['kelas'];
$jumlah_siswa=$_POST['jumlah_siswa'];
$Tahun_Ajaran=$_POST['Tahun_Ajaran'];

{
$sqlUbah = "update kelas set kelas='$kelas', 
               jumlah_siswa='$jumlah_siswa',
			   Tahun_Ajaran='$Tahun_Ajaran'

			   where kode_kelas='$kode_kelas'";
	   
$query = mysql_query($sqlUbah);
if($query)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil Di Update');
      </script>";
    echo "<meta http-equiv='refresh' content='0; view_kelas.php'>";
}
else
{
echo "<script type='text/javascript'>
	alert('Data Gagal Di Update');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_kelas.php'>";
}
 }

?>