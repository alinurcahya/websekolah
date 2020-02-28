<?php
$Username=$_POST['textUsername'];
$Password=$_POST['Password'];
$nama_siswa=$_POST['nama_siswa'];
$nis=$_POST['nis'];
$tempat_lahir=$_POST['txttempat_lahir'];
$tanggal_lahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
$jekel=$_POST['jekel'];
$status=$_POST['status'];
$kelas=$_POST['kelas'];


include "./Config/koneksi.php";
$query="insert into siswa values('$Username','$Password','$nama_siswa','$nis','$tempat_lahir','$tanggal_lahir','$jekel','$status','$kelas')";
$hasil=mysql_query($query) or die (mysql_error());
	if($hasil)
	{
	echo "<script>alert('Selamat, Data yang di Inputkan, Berhasil Disimpan');window.location='input_siswa.php';</script>";
	}
	
?>