<?php
include "./Config/koneksi.php"; //koneksi ke server database
$NIP	= $_POST['NIP'];
$username	= $_POST['username'];
$password	= $_POST['password'];
$nama_guru	= $_POST['nama_guru'];
$nama_jabatan		= $_POST['nama_jabatan'];
$tempat_lahir		= $_POST['txttempat_lahir'];
$tanggal_lahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
$jekel		= $_POST['jekel'];
$status		= $_POST['status'];
$alamat			= $_POST['alamat'];
$kota		= $_POST['kota'];
$kelas		= $_POST['kelas'];



$img		= $_FILES['Upload_Foto']['name'];
$move 		= move_uploaded_file($_FILES['Upload_Foto']['tmp_name'],'../admin/fotoguru'.$img);

if(empty($img)){
$sql = "update guru set password='$password',
			   nama_guru='$nama_guru',
			   nama_jabatan='$nama_jabatan',
			   tempat_lahir='$tempat_lahir',
			   tanggal_lahir='$tanggal_lahir',
			   jekel='$jekel',
			   status='$status',
			   alamat='$alamat',
			   kota='$kota',
			   kelas='$kelas',
			   
			   username  = '$username'		   
			   where NIP='$NIP'";
}

elseif(!empty($img)){
$sql	="update guru set username='$username', 
               password='$password',
			   nama_guru='$nama_guru',
			   nama_jabatan='$nama_jabatan',
			   tempat_lahir='$tempat_lahir',
			   tanggal_lahir='$tanggal_lahir',
			   jekel='$jekel',
			   status='$status',
			   alamat='$alamat',
			   kota='$kota',
			   kelas='$kelas',


			   Upload_Foto='$img'
			   
			   where NIP='$NIP'";

}
$querySimpan	= mysql_query($sql) or die (mysql_error());



echo "<script type='text/javascript'>
      alert('Data Berhasil Di Ubah...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; view_guru.php?'>";


?>