<?php
$kode_kelas=$_POST['kode_kelas'];
$kelas=$_POST['kelas'];
$jumlah_siswa=$_POST['jumlah_siswa'];
$Tahun_Ajaran=$_POST['Tahun_Ajaran'];

include "./Config/koneksi.php";
$query="insert into kelas values('$kode_kelas','$kelas','$jumlah_siswa','$Tahun_Ajaran')";
$hasil=mysql_query($query) or die (mysql_error());
	if($hasil)
	{
	echo "<script>alert('Selamat, Data yang di Inputkan, Berhasil Disimpan');window.location='input_kelas.php';</script>";
	}
	
?>