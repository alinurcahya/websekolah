<?php
$Hari=$_POST['Hari'];
$kelas=$_POST['kelas'];
$nama_matpel=$_POST['nama_matpel'];
$NIP=$_POST['NIP'];
$nama_guru=$_POST['nama_guru'];


include "./Config/koneksi.php";
$query="insert into hari values('$Hari','$kelas','$nama_matpel','$NIP','$nama_guru')";
$hasil=mysql_query($query) or die (mysql_error());
	if($hasil)
	{
	echo "<script>alert('Selamat, Data yang di Inputkan, Berhasil Disimpan');window.location='input_hari.php';</script>";
	}
	
?>