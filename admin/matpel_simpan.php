<?php
$kode_matpel=$_POST['kode_matpel'];
$nama_matpel=$_POST['nama_matpel'];
$jam_matpel=$_POST['jam_matpel'];
$NIP=$_POST['NIP'];
$nama_guru=$_POST['nama_guru'];


include "./Config/koneksi.php";
$query="insert into matpel values('$kode_matpel','$nama_matpel','$jam_matpel','$NIP','$nama_guru')";
$hasil=mysql_query($query) or die (mysql_error());
	if($hasil)
	{
	echo "<script>alert('Selamat, Data yang di Inputkan, Berhasil Disimpan');window.location='view_matpel.php';</script>";
	}
	
?>