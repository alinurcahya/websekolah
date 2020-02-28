<?php
$kode_matpel=$_POST['kode_matpel'];
$nis=$_POST['nis'];
$NIP=$_POST['NIP'];
$hari=$_POST['hari'];
$jam_awal=$_POST['jam_awal'];
$jam_akhir=$_POST['jam_akhir'];
$kelas=$_POST['kelas'];

include "./Config/koneksi.php";
$query="insert into t_jadwal values('','$nis','$kode_matpel','$NIP','$hari','$jam_awal','$jam_akhir','$kelas')";
$hasil=mysql_query($query) or die (mysql_error());
	if($hasil)
	{
	echo "<script>alert('Selamat, Data yang di Inputkan, Berhasil Disimpan');window.location='input_t_jadwal.php';</script>";
	}
	
?>