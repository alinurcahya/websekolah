<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT FORM HARI</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- VEGAS STYLE CSS -->
    <link href="assets/scripts/vegas/jquery.vegas.min.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- GOOGLE FONT -->
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>
<?php
if(! $_GET['UbahNIP']=="")
{
include "./Config/koneksi.php"; //koneksi ke server database
$sqlUbah   = "select * from hari where  Hari='".$_GET['UbahNIP']."'";
$queryUbah = mysql_query($sqlUbah);
$dataHari	   = mysql_fetch_array($queryUbah);
}

$Hari=$dataHari['txthari'];
$kelas=$dataHari['kelas'];
$nama_matpel=$dataHari['nama_matpel'];
$NIP=$dataHari['NIP'];
$nama_guru=$dataHari['nama_guru'];
?>

<form name='frm_ubah_hari' action='simp_ubah_hari.php' method='post' onSubmit="return validasi(this)" enctype="multipart/form-data">
<h2><center>EDIT HARI SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<table border=0 align='center' width=700>

<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<input type="NIP" name="NIP" value='<?php echo "$NIP" ?>' size=16 maxlength=16 disabled>
<input type="NIP" name="NIP" value='<?php echo "$NIP" ?>' size=16 maxlength=16 hidden>
</label></td>
</tr>

<td><label>Hari</label></td>
<td> : </td>
<td><select name="Hari">
<?php include "./Config/koneksi.php";
$query="select * from hari";
$hasil=mysql_query($query);
while($hari=mysql_fetch_assoc($hasil))
{
	echo "<option value=$hari[Hari]>$hari[Hari]</option>";
}
?>
<op
<option>=PILIHAN=</option>
<option>SENIN</option>
<option>SELASA</option>
<option>RABU</option>
<option>KAMIS</option>
<option>JUMAT</option>
<option>SABTU</option>
<option>MINGGGU</option>
</select>
</td>
</tr>

<td><label>kelas</label></td>
<td> : </td>
<td><select name="kelas">
<?php include "./Config/koneksi.php";
$query="select * from hari";
$hasil=mysql_query($query);
while($hari=mysql_fetch_assoc($hasil))
{
	echo "<option value=$hari[kelas]>$hari[kelas]</option>";
}
?>
<option>=PILIHAN=</option>
<option>VII.1</option>
<option>VII.2</option>
<option>VII.3</option>
<option>VII.4</option>
<option>VII.5</option>
<option>VII.6</option>
<option>VII.7</option>
<option>VII.8</option>
<option>VIII.1</option>
<option>VIII.2</option>
<option>VIII.3</option>
<option>VIII.4</option>
<option>VIII.5</option>
<option>VIII.6</option>
<option>VIII.7</option>
<option>VIII.8</option>
<option>IX.1</option>
<option>IX.2</option>
<option>IX.3</option>
<option>IX.4</option>
<option>IX.5</option>
<option>IX.6</option>
<option>IX.7</option>
<option>IX.8</option>
<option>IX.9</option>
</select>
</td>
</tr>

<td><label>nama_matpel</label></td>
<td><label> : </label></td>
<td><select name="nama_matpel">
<?php include "./Config/koneksi.php";
$query="select * from hari";
$hasil=mysql_query($query);
while($hari=mysql_fetch_assoc($hasil))
{
	echo "<option value=$hari[nama_matpel]>$hari[nama_matpel]</option>";
}
?>
<option>=PILIHAN=</option>
<option>BAHASA INDONESIA</option>
<option>BAHASA INGGRIS</option>
<option>IPA</option>
<option>IPS</option>
<option>MATEMATIKA</option>
<option>IPA</option>
<option>PAI</option>
<option>PPKN</option>
<option>SENI BUDAYA</option>
<option>PJOK</option>
<option>BIMBINGAN KONSELING</option>
<option>AGAMA</option>
<option>Budaya Alam Minangkabau</option>
<option>PRAKARYA</option>
<option>TIK</option>
<option>PJOK</option>
</select>
</td>
</tr>


<tr>
<td><label>nama_guru</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_guru" name="nama_guru" value='<?php echo "$nama_guru"?>' size=25 maxlength=25>
</label></td>
</tr>

<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="update" value="UPDATE">
<input type="reset" name="cancel" value="CANCEL">
</td>
</tr>
</table>

<html>
<head>
<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body>
<table id="example" class="display" cellspacing="0" width="100%">
<h2>DAFTAR HARI GURU SMP NEGERI 31 PADANG</h2>
<hr>
<thead>
<tr>
<td>No.</td>
<td>Hari</td>
<td>Kelas</td>
<td>Nama Mata Pelajaran</td>
<td>NIP</td>
<td>nama_guru</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlHari   = "select * from  hari order by Hari  ASC"; 
$queryHari = mysql_query($sqlHari);
$no = 1;
while($dataHari = mysql_fetch_array($queryHari))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$dataHari[Hari]</td>";
echo "<td>$dataHari[kelas]</td>";
echo "<td>$dataHari[nama_matpel]</td>";
echo "<td>$dataHari[NIP]</td>";
echo "<td>$dataHari[nama_guru]</td>";
?>
<td><a href='hari_edit.php?UbahNIP=<?php echo $dataHari[Hari]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan Hari=<?php echo $dataHari[Hari]?>')"><img src='./images/edit.png' width=25></img>| 
<a href='hari_hapus.php?HapusHari=<?php echo $dataHari[Hari]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan Hari=<?php echo $dataHari[Hari]?>')"><img src='./images/delete.png' width=25></img></td>
</tr>
<?php
$no++;
}	
?>
</body>
</table>
<script>
$(document).ready(function(){
$('#example').dataTable();
});
</script>
