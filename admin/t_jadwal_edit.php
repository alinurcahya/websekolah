<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT FORM JADWAL PELAJARAN</title>
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
if(! $_GET['Ubahkd_jadwal']=="")
{
include "./Config/koneksi.php"; //koneksi ke server database
$sqlUbah   = "select * from t_jadwal where  kd_jadwal='".$_GET['Ubahkd_jadwal']."'";
$queryUbah = mysql_query($sqlUbah);
$data_jadwal	   = mysql_fetch_array($queryUbah);
}


$kd_jadwal=$data_jadwal['kd_jadwal'];
$kode_matpel=$data_jadwal['kode_matpel'];
$nama_matpel=$data_jadwal['nama_matpel'];
$NIP=$data_jadwal['NIP'];
$nis=$data_jadwal['NIS'];
$nama_guru=$data_jadwal['nama_guru'];
$nama_jabatan=$data_jadwal['nama_jabatan'];
$hari=$data_jadwal['hari'];
$jam_awal=$data_jadwal['jam_awal'];
$jam_akhir=$data_jadwal['jam_akhir'];
$kelas=$data_jadwal['kelas'];
$tahun=$data_jadwal['tahun'];
?>

<form name='frm_ubah_t_jadwal' action='simp_ubah_t_jadwal.php' method='post' onSubmit="return validasi(this)" enctype="multipart/form-data">
<h2><center>EDIT JADWAL PELAJARAN SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<table border=0 align='center' width=700>

<tr>
<td><label>NIS</label></td>
<td><label> : </label></td>
<td><label>
<input type="NIP" name="n" value='<?php echo "$nis" ?>' size=16 maxlength=16 disabled>
<input type="NIP" name="nis" value='<?php echo "$nis" ?>' size=16 maxlength=16 hidden>
<input type="NIP" name="kd_jadwal" value='<?php echo "$kd_jadwal" ?>' size=16 maxlength=16 hidden>
</label></td>
</tr>


<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<?php
echo "<select name='NIP'>";
echo "<option value=$NIP selected>$NIP</option>";
include "./Config/koneksi.php";
$sqlNIP = "select * from guru order by NIP";
$resultNIP = mysql_query($sqlNIP);
while($dataNIP = mysql_fetch_array($resultNIP))
{
echo "<option value=$dataNIP[NIP]>$dataNIP[NIP]-$dataNIP[nama_guru]</option>";
}
echo "</select>";
?>
</label></td>
</tr>

<tr>
<td><label>Kode Matapelajaran</label></td>
<td><label> : </label></td>
<td><label>
<?php
echo "<select name='kode_matpel'>";
echo "<option value=$kode_matpel selected>$kode_matpel</option>";
include "./Config/koneksi.php";
$sqlnama_matpel = "select * from matpel order by nama_matpel";
$resultnama_matpel = mysql_query($sqlnama_matpel);
while($datanama_matpel = mysql_fetch_array($resultnama_matpel))
{
echo "<option value=$datanama_matpel[kode_matpel]>$datanama_matpel[kode_matpel]-$datanama_matpel[nama_matpel]</option>";
}
echo "</select>";
?>
</td></label>
</tr>


<td><label>Hari</label></td>
<td><label> : </label></td>
<td><select name="hari">
<?php include "./Config/koneksi.php";
$query="select * from t_jadwal";
$hasil=mysql_query($query);
while($t_jadwal=mysql_fetch_assoc($hasil))
{
	echo "<option value=$t_jadwal[hari]>$t_jadwal[hari]</option>";
}
?>
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

<tr>
<td><label>jam_awal</label></td>
<td><label> : </label></td>
<td><label>
<input type="jam_awal" name="jam_awal" value='<?php echo "$jam_awal"?>' size=25 maxlength=25>
</label></td>
</tr>

<tr>
<td><label>jam_akhir</label></td>
<td><label> : </label></td>
<td><label>
<input type="jam_akhir" name="jam_akhir" value='<?php echo "$jam_akhir"?>' size=25 maxlength=25>
</label></td>
</tr>

<td><label>kelas</label></td>
<td><label> : </label></td>
<td><select name="kelas">
<?php include "./Config/koneksi.php";
$query="select * from t_jadwal";
$hasil=mysql_query($query);
while($t_jadwal=mysql_fetch_assoc($hasil))
{
	echo "<option value=$t_jadwal[kelas]>$t_jadwal[kelas]</option>";
}
?>
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
<h2>DAFTAR JADWAL PELAJARAN GURU SMP NEGERI 31 PADANG</h2>
<hr>
<thead>
<tr>
<td>No.</td>
<td>Kode Mata Pelajaran</td>
<td>Nama Mata Pelajaran</td>
<td>NIP</td>
<td>Nama Guru</td>
<td>Jabatan</td>
<td>hari</td>
<td>Jam Awal</td>
<td>Jam Akhir</td>
<td>kelas</td>
<td>tahun</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlkode_matpel   = "select * from  t_jadwal order by kode_matpel  ASC"; 
$querykode_matpel = mysql_query($sqlkode_matpel);
$no = 1;
while($data_jadwal = mysql_fetch_array($querykode_matpel))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$data_jadwal[kode_matpel]</td>";
echo "<td>$data_jadwal[nama_matpel]</td>";
echo "<td>$data_jadwal[NIP]</td>";
echo "<td>$data_jadwal[nama_guru]</td>";
echo "<td>$data_jadwal[nama_jabatan]</td>";
echo "<td>$data_jadwal[hari]</td>";
echo "<td>$data_jadwal[jam_awal]</td>";
echo "<td>$data_jadwal[jam_akhir]</td>";
echo "<td>$data_jadwal[kelas]</td>";
echo "<td>$data_jadwal[tahun]</td>";

?>
<td><a href='t_jadwal_edit.php?UbahNIP=<?php echo $data_jadwal[kode_matpel]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan kode_matpel=<?php echo $data_jadwal[kode_matpel]?>')"><img src='./images/edit.png' width=25></img>| 
<a href='t_jadwal_hapus.php?Hapuskode_matpel=<?php echo $data_jadwal[kode_matpel]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan kode_matpel=<?php echo $data_jadwal[kode_matpel]?>')"><img src='./images/delete.png' width=25></img></td>
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