<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><center>EDIT FORM KELAS</center></title>
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
if(! $_GET['Ubahkode_kelas']=="")
{
include "./Config/koneksi.php"; //koneksi ke server database
$sqlUbah   = "select * from kelas where  kode_kelas='".$_GET['Ubahkode_kelas']."'";
$queryUbah = mysql_query($sqlUbah);
$datakode_kelas	   = mysql_fetch_array($queryUbah);
}

$kode_kelas=$datakode_kelas['kode_kelas'];
$kelas=$datakode_kelas['kelas'];
$jumlah_siswa=$datakode_kelas['jumlah_siswa'];
$Tahun_Ajaran=$datakode_kelas['Tahun_Ajaran'];
?>

<form name='frm_ubah_kelas' action='simp_ubah_kelas.php' method='post' onSubmit="return validasi(this)" enctype="multipart/form-data">
<h2><center>EDIT KELAS SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<table border=0 align='center' width=700>

<tr>
<td><label>kode_kelas</label></td>
<td><label> : </label></td>
<td><label>
<input type="kode_kelas" name="kode_kelas" value='<?php echo "$kode_kelas" ?>' size=16 maxlength=16 disabled>
<input type="kode_kelas" name="kode_kelas" value='<?php echo "$kode_kelas" ?>' size=16 maxlength=16 hidden>
</label></td>
</tr>

<tr>
<td><label>kelas</label></td>
<td><label> : </label></td>
<td><label>
<input type="kelas" name="kelas" value='<?php echo "$kelas"?>' size=14 maxlength=14>
</label></td>
</tr>

<tr>
<td><label>jumlah_siswa</label></td>
<td><label> : </label></td>
<td><label>
<input type="jumlah_siswa" name="jumlah_siswa" value='<?php echo "$jumlah_siswa"?>' size=14 maxlength=14>
</label></td>
</tr>

<tr>
<td><label>Tahun_Ajaran</label></td>
<td><label> : </label></td>
<td><label>
<input type="Tahun_Ajaran" name="Tahun_Ajaran" value='<?php echo "$Tahun_Ajaran"?>' size=14 maxlength=14>
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
<h2>DAFTAR KELAS GURU SMP NEGERI 31 PADANG</h2>
<hr>
<thead>
<tr>
<td>No.</td>
<td>KODE KELAS</td>
<td>KELAS</td>
<td>JUMLAH SISWA</td>
<td>Tahun Ajaran</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlkode_kelas   = "select * from  kelas order by kode_kelas  ASC"; 
$querykode_kelas = mysql_query($sqlkode_kelas);
$no = 1;
while($datakode_kelas = mysql_fetch_array($querykode_kelas))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$datakode_kelas[kode_kelas]</td>";
echo "<td>$datakode_kelas[jumlah_siswa]</td>";
echo "<td>$datakode_kelas[kelas]</td>";
echo "<td>$datakode_kelas[Tahun_Ajaran]</td>";


?>
<td><a href='kelas_edit.php?Ubahkode_kelas=<?php echo $datakode_kelas[kode_kelas]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan kode_kelas=<?php echo $datakode_kelas[kode_kelas]?>')"><img src='./images/edit.png' width=25></img>| 
<a href='kelas_hapus.php?Hapuskode_kelas=<?php echo $datakode_kelas[kode_kelas]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan kode_kelas=<?php echo $datakode_kelas[kode_kelas]?>')"><img src='./images/delete.png' width=25></img></td>
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
