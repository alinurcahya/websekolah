<?php
$id_jabatan=$_POST['id_jabatan'];
$nama_jabatan=$_POST['nama_jabatan'];
$NIP=$_POST['NIP'];
$nama_guru=$_POST['nama_guru'];
$nama_matpel=$_POST['nama_matpel'];

include "./Config/koneksi.php";
$query="insert into jabatan values('$id_jabatan','$nama_jabatan','$NIP','$nama_guru','$nama_matpel')";
$hasil=mysql_query($query) or die (mysql_error());
	if($hasil)
	{
	echo "<script>alert('Selamat, Data yang di Inputkan, Berhasil Disimpan');window.location='input_jabatan.php';</script>";
	}
	
?>