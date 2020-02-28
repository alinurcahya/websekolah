<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT FORM SISWA</title>
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
if(! $_GET['Ubahnis']=="")
{
include "./Config/koneksi.php"; //koneksi ke server database
$sqlUbah   = "select * from siswa where nis='".$_GET['Ubahnis']."'";
$queryUbah = mysql_query($sqlUbah);
$dataUsername	   = mysql_fetch_array($queryUbah);
}
$Username=$dataUsername['Username'];
$Password=$dataUsername['Password'];
$nama_siswa=$dataUsername['nama_siswa'];
$nis=$dataUsername['nis'];
$tempat_lahir=$dataUsername['tempat_lahir'];
$tahun		= substr($dataUsername['tanggal_lahir'],0,4);
$bulan		= substr($dataUsername['tanggal_lahir'],5,2);
$tanggal	= substr($dataUsername['tanggal_lahir'],8,2);
$jekel=$dataUsername['jekel'];
$status=$dataUsername['status'];
$kelas=$dataUsername['kelas'];
?>

<form name='frm_ubah_siswa' action='simp_ubah_siswa.php' method='post' onSubmit="return validasi(this)" enctype="multipart/form-data">
<h2><center>EDIT DATA SISWA SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<table border=0 align='center' width=700>

<tr>
<td><label>nis</label></td>
<td><label> : </label></td>
<td><label>
<input type="text" name="nis" value='<?php echo "$nis" ?>' size=16 maxlength=16 disabled>
<input type="hidden" name="nis" value='<?php echo "$nis" ?>' size=16 maxlength=16 >
</label></td>
</tr>

<tr>
<td><label>Username</label></td>
<td><label> : </label></td>
<td><label>
<input type="textUsername" name="textUsername" value='<?php echo "$Username"?>' size=14 maxlength=14>
</label></td>
</tr>

<tr>
<td><label>Password</label></td>
<td><label> : </label></td>
<td><label>
<input type="Password" name="Password" value='<?php echo "$Password"?>' size=25 maxlength=25>
</label></td>
</tr>

<tr>
<td><label>nama_siswa</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_siswa" name="nama_siswa" value='<?php echo "$nama_siswa"?>' size=25 maxlength=25>

</label></td>
</tr>


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
<td>Kelas</td>
<td> : </td>
<td> <select name="kelas">
<?php include "./Config/koneksi.php";
$query="select * from siswa";
$hasil=mysql_query($query);
while($siswa=mysql_fetch_assoc($hasil))
{
	echo "<option value=$siswa[kelas]>$siswa[kelas]</option>";
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
<td>Username</td>
<td>Password</td>
<td>nama_siswa</td>
<td>nis</td>
<td>tempat_lahir</td>
<td>tanggal_lahir</td>
<td>jekel</td>
<td>status</td>
<td>kelas</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlUsername   = "select * from  siswa order by Username  ASC"; 
$queryUsername = mysql_query($sqlUsername);
$no = 1;
while($dataUsername = mysql_fetch_array($queryUsername))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$dataUsername[Username]</td>";
echo "<td>$dataUsername[Password]</td>";
echo "<td>$dataUsername[nama_siswa]</td>";
echo "<td>$dataUsername[nis]</td>";
echo "<td>$dataUsername[tempat_lahir]</td>";
echo "<td>$dataUsername[tanggal_lahir]</td>";
echo "<td>$dataUsername[jekel]</td>";
echo "<td>$dataUsername[status]</td>";
echo "<td>$dataUsername[kelas]</td>";

?>
<td><a href='siswa_edit.php?Ubahnis=<?php echo $dataUsername[Username]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan Username=<?php echo $dataUsername[Username]?>')"><img src='./images/edit.png' width=25></img>| 
<a href='siswa_hapus.php?HapusUsername=<?php echo $dataUsername[Username]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan Username=<?php echo $dataUsername[Username]?>')"><img src='./images/delete.png' width=25></img></td>
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