<?php
include "./Config/koneksi.php"; //koneksi ke server database
$kd_jadwal=$_POST['kd_jadwal'];
$kode_matpel=$_POST['kode_matpel'];
$nama_matpel=$_POST['nama_matpel'];
$nis=$_POST['nis'];
$NIP=$_POST['NIP'];
$nama_guru=$_POST['nama_guru'];
$nama_jabatan=$_POST['nama_jabatan'];
$hari=$_POST['hari'];
$jam_awal=$_POST['jam_awal'];
$jam_akhir=$_POST['jam_akhir'];
$kelas=$_POST['kelas'];
$tahun=$_POST['tahun'];

{
$sqlUbah = "update t_jadwal set kode_matpel='$kode_matpel', 
               hari='$hari',
			   jam_awal='$jam_awal',
			   jam_akhir='$jam_akhir',
			   kelas='$kelas',
			   NIS='$nis',
			   NIP='$NIP'			   
			   where kd_jadwal='$kd_jadwal'";
	   
$query = mysql_query($sqlUbah);
if($query)
{
echo "<script type='text/javascript'>
      alert('Data Berhasil Di Update');
      </script>";
    echo "<meta http-equiv='refresh' content='0; view_t_jadwal.php'>";
}
else
{
echo "<script type='text/javascript'>
	alert('Data Gagal Di Update');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_t_jadwal.php'>";
}
 }

?>