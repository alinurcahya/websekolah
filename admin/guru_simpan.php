<?php
include "./Config/koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$nama_guru=$_POST['nama_guru'];
$NIP=$_POST['NIP'];
$nama_jabatan=$_POST['nama_jabatan'];
$tempat_lahir=$_POST['txttempat_lahir'];
$tanggal_lahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
$jekel=$_POST['jekel'];
$status=$_POST['status'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$kelas=$_POST['kelas'];
$nama_file=$_FILES['Upload_Foto']['name'];
$lokasi_file=$_FILES['Upload_Foto']['tmp_name'];



$query="insert into guru values('$username','$password','$nama_guru','$NIP','$nama_jabatan','$tempat_lahir','$tanggal_lahir','$jekel','$status','$alamat','$kota','$kelas','$nama_file')";
$hasil=mysql_query($query) or die (mysql_error());
	if($hasil)
	{
	echo "<script>alert('Selamat, Data yang di Inputkan, Berhasil Disimpan');window.location='input_guru.php';</script>";
	}
	
?>