<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT FORM GURU</title>
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
$sqlUbah   = "select * from guru where NIP='".$_GET['UbahNIP']."'";
$queryUbah = mysql_query($sqlUbah);
$datausername	   = mysql_fetch_array($queryUbah);
}
$username=$datausername['username'];
$password=$datausername['password'];
$nama_guru=$datausername['nama_guru'];
$NIP=$datausername['NIP'];
$nama_jabatan=$datausername['nama_jabatan'];
$tempat_lahir=$datausername['tempat_lahir'];
$tahun		= substr($datausername['tanggal_lahir'],0,4);
$bulan		= substr($datausername['tanggal_lahir'],5,2);
$tanggal	= substr($datausername['tanggal_lahir'],8,2);
$jekel=$datausername['jekel'];
$status=$datausername['status'];
$alamat=$datausername['alamat'];
$kota=$datausername['kota'];
$kelas=$datausername['kelas'];
$foto=$datausername['Upload_Foto'];
?>

<form name='frm_ubah_guru' action="simp_ubah_guru.php" method='post' onSubmit="return validasi(this)" enctype="multipart/form-data">
<h2><center>EDIT GURU SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<table border=0 align='center' width=700>

<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<input type="text" name="NIP" value='<?php echo $NIP; ?>' size=16 maxlength=16 disabled>
<input type="hidden" name="NIP" value='<?php echo $NIP; ?>' size=16 maxlength=16 >
</label></td>
</tr>

<td><label>username</label></td>
<td><label> : </label></td>
<td><label>
<input type="sername" name="username" value='<?php echo $username ?>' size=25 maxlength=25>
</label></td>
</tr>

<tr>
<td><label>password</label></td>
<td><label> : </label></td>
<td><label>
<input type="password" name="password" value='<?php echo $password ?>' size=25 maxlength=25>
</label></td>
</tr>

<tr>
<td><label>nama_guru</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_guru" name="nama_guru" value='<?php echo $nama_guru; ?>' size=25 maxlength=25>
</label></td>
</tr>

<tr>
<td>Nama Jabatan </td>
<td> : </td>
<td> <select name="nama_jabatan">
<?php include "./Config/koneksi.php";
$query="select * from guru";
$hasil=mysql_query($query);
while($guru=mysql_fetch_assoc($hasil))
{
	echo "<option value=$guru[nama_jabatan]>$guru[nama_jabatan]</option>";
}
?>
</select></td></tr>

<tr>
<td>Tempat/ Tgl. Lahir</td>
<td> : </td>
<td>
<input type="txttempat_lahir" name="txttempat_lahir" value='<?php echo "$tempat_lahir"?>' size=20 maxlength=25> /
<?php
echo "<select name='tanggal'>";
for($tgl=1; $tgl<=31; $tgl++)
{
if($tanggal=="")
{
echo "<option value=0 selected>-Pilih Tanggal-</option>";
}
elseif($tgl==$tanggal)
{
echo "<option value=$tgl selected>$tgl</option>";
}
else
{
echo "<option value=$tgl>$tgl</option>";
}
}
echo "</select>";

$nm_bulan=array(1 =>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
echo "<select name='bulan'>";
for($bln=1; $bln<=12; $bln++)
{
if($bulan=="")
{
echo "<option value=0>-Pilih Bulan-</option>";
}
elseif($bln==$bulan)
{
echo "<option value=$bln selected>$nm_bulan[$bln]</option>";
}
else
{
echo "<option value=$bln>$nm_bulan[$bln]</option>";
}
}
echo "</select>";

$thn_skrg = date('Y');
echo "<select name='tahun'>";
for ($thn=1980; $thn<=$thn_skrg; $thn++)
{
if($tahun=="")
{
echo "<option value=0>-Pilih Tahun-</option>";
}
elseif($thn==$tahun)
{
echo "<option value=$thn selected>$thn</option>";
}
else
{
echo "<option value=$thn>$thn</option>";
}
}
echo "</select>";
?>
</td>


<tr>
<td>Jenis Kelamin</td>
<td> : </td>
<td>
<?php
if($jekel=='LAKI-LAKI')
{
echo "<input type='radio' name='jekel' value=LAKI-LAKI' checked>LAKI-LAKI";
echo "<input type='radio' name='jekel' value='PEREMPUAN'>PEREMPUAN";
}
else
{
echo "<input type='radio' name='jekel' value='LAKI-LAKI'>LAKI-LAKI";
echo "<input type='radio' name='jekel' value='PEREMPUAN' checked>PEREMPUAN";
}
?>
</td>
</tr>


<tr>
<td>Status</td>
<td> : </td>
<td>
<?php
if($status=='Aktif')
{
echo "<input type='radio' name='status' value=Aktif' checked>Aktif";
echo "<input type='radio' name='status' value='Tidak Aktif'>Tidak Aktif";
}
else
{
echo "<input type='radio' name='status' value='Aktif'>Aktif";
echo "<input type='radio' name='status' value='Tidak Aktif' checked>Tidak Aktif";
}
?>
</td>
</tr>

<tr>
<td><label>alamat</label></td>
<td><label> : </label></td>
<td><label>
<input type="alamat" name="alamat" value='<?php echo "$alamat"?>' size=25 maxlength=25>
</label></td>
</tr>


<tr>
<td>Kota</td>
<td> : </td>
<td> <select name="kota">
<?php include "./Config/koneksi.php";
$query="select * from guru";
$hasil=mysql_query($query);
while($guru=mysql_fetch_assoc($hasil))
{
	echo "<option value=$guru[kota]>$guru[kota]</option>";
}
?>
<option>BANDA ACEH</option>
<option>Sabang</option>
<option>Denpasar</option>
<option>Cilegon</option>
<option>Tangerang</option>
<option>Bengkulu</option>
<option>Gorontalo</option>
<option>Bandung</option>
<option>Jambi</option>
<option>Bandung</option>
<option>Tasikmalaya</option>
<option>Dumai</option>
<option>Pekanbaru</option>
<option>Makassar</option>
<option>Bukittinggi</option>
<option>Padang</option>
<option>Padangpanjang</option>
<option>Pariaman</option>
<option>Payakumbuh</option>
<option>Sawahlunto</option>
<option>Solok</option>
<option>Binjai</option>
<option>Medan</option>
<option>Padang Sidempuan</option>
<option>Pematangsiantar</option>
<option>Sibolga</option>
<option>Tanjungbalai</option>
<option>Tebingtinggi</option>
<option>Dan Lain Lain</option>
</select>
</td>
</tr>


<tr>
<td>Kelas </td>
<td> : </td>
<td> <select name="kelas">
<?php include "./Config/koneksi.php";
$query="select * from guru";
$hasil=mysql_query($query);
while($guru=mysql_fetch_assoc($hasil))
{
	echo "<option value=$guru[kelas]>$guru[kelas]</option>";
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
<td>Upload_Foto</td>
<td> : </td>
<?php
echo "<td><img src='../admin/fotoguru/$datausername[Upload_Foto]' width=70>";
// ?>

<input type="file" name="Upload_Foto" id="foto" >
</td>
</tr>

<tr>
<td></td>
<td></td>
<td></br>
<input type="submit" name="update" value="Update">
<input type="reset" name="cancel" value="Cancel">
<input type="button" id="button" onclick='top.location="input_guru.php"' value="Kembali"
</td>
</tr>
</table>

<html>
<head>
<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body>
<body></br>
<table id="example" class="display" cellspacing="0" width="100%">
<h2><center>DAFTAR GURU SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<thead>
<tr>
<td>No.</td>
<td>NIP</td>
<td>USERNAME</td>
<td>PASSWORD</td>
<td>NAMA GURU</td>
<td>NAMA JABATAN</td>
<td>tempat_lahir</td>
<td>tanggal_lahir</td>
<td>JENIS KELAMIN</td>
<td>status</td>
<td>alamat</td>
<td>kota</td>
<td>kelas</td>
<td>Upload_Foto</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlusername   = "select * from   guru order by username  ASC"; 
$queryusername = mysql_query($sqlusername);
$no = 1;
while($datausername = mysql_fetch_array($queryusername))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$datausername[NIP]</td>";
echo "<td>$datausername[username]</td>";
echo "<td>$datausername[password]</td>";
echo "<td>$datausername[nama_guru]</td>";
echo "<td>$datausername[nama_jabatan]</td>";
echo "<td>$datausername[tempat_lahir]</td>";
echo "<td>$datausername[tanggal_lahir]</td>";
echo "<td>$datausername[jekel]</td>";
echo "<td>$datausername[status]</td>";
echo "<td>$datausername[alamat]</td>";
echo "<td>$datausername[kota]</td>";
echo "<td>$datausername[kelas]</td>";
echo "<td><img src='../admin/fotoguru/$datausername[Upload_Foto]' width=65</td>";

?>
<td><a href='guru_edit.php?UbahNIP=<?php echo $datausername[username]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan username=<?php echo $datausername[username]?>')"><img src='./images/edit.png' width=30></img>| 
<a href='guru_hapus.php?Hapususername=<?php echo $datausername[username]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan Username=<?php echo $datausername[username]?>')"><img src='./images/delete.png' width=25></img></td>
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