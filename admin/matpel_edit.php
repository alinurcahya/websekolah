<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><center>EDIT FORM MATA PELAJARAN</center></title>
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
$sqlUbah   = "select * from matpel where  kode_matpel='".$_GET['UbahNIP']."'";
$queryUbah = mysql_query($sqlUbah);
$datakode_matpel	   = mysql_fetch_array($queryUbah);
}

$kode_matpel=$datakode_matpel['kode_matpel'];
$nama_matpel=$datakode_matpel['nama_matpel'];
$jam_matpel=$datakode_matpel['jam_matpel'];
$NIP=$datakode_matpel['NIP'];
$nama_guru=$datakode_matpel['nama_guru'];
?>

<form name='frm_ubah_matpel' action='simp_ubah_matpel.php' method='post' onSubmit="return validasi(this)" enctype="multipart/form-data">
<h2><center>EDIT MATA PELAJARAN SMP NEGERI 31 PADANG</center></h2>
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

<tr>
<td>kode_matpel</td>
<td> : </td>
<td>
<input type="kode_matpel" name="kode_matpel" value='<?php echo "$kode_matpel"?>' size=25 maxlength=25>
</td>
</tr>

<tr>
<td>nama_matpel</td>
<td> : </td>
<td>
<input type="nama_matpel" name="nama_matpel" value='<?php echo "$nama_matpel"?>' size=25 maxlength=25>
</td>
</tr>


<tr>
<td>jam_matpel</td>
<td> : </td>
<td> <select name="jam_matpel">
<?php include "./Config/koneksi.php";
$query="select * from matpel";
$hasil=mysql_query($query);
while($matpel=mysql_fetch_assoc($hasil))
{
	echo "<option value=$matpel[jam_matpel]>$matpel[jam_matpel]</option>";
}
?>
<option>06.45</option>
<option>07.50</option>
<option>08.40</option>
<option>10.00</option>
<option>10.30</option>
<option>11.50</option>
<option>12.30</option>
<option>09.50</option>
<option>07.50</option>
<option>08.30</option>
<option>09.10</option>
<option>09.50</option>
<option>11.10</option>
<option>06.45</option>
<option>08.10</option>
<option>09.40</option>
<option>10.20</option>
<option>10.30</option>
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
<h2>DAFTAR MATA PELAJARAN GURU SMP NEGERI 31 PADANG</h2>
<hr>
<thead>
<tr>
<td>No.</td>
<td>kode_matpel</td>
<td>nama_matpel</td>
<td>jam_matpel</td>
<td>NIP</td>
<td>nama_guru</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlkode_matpel   = "select * from  matpel order by kode_matpel  ASC"; 
$querykode_matpel = mysql_query($sqlkode_matpel);
$no = 1;
while($datakode_matpel = mysql_fetch_array($querykode_matpel))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$datakode_matpel[kode_matpel]</td>";
echo "<td>$datakode_matpel[nama_matpel]</td>";
echo "<td>$datakode_matpel[jam_matpel]</td>";
echo "<td>$datakode_matpel[NIP]</td>";
echo "<td>$datakode_matpel[nama_guru]</td>";

?>
<td><a href='matpel_edit.php?UbahNIP=<?php echo $datakode_matpel[kode_matpel]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan kode_matpel=<?php echo $datakode_matpel[kode_matpel]?>')"><img src='./images/edit.png' width=25></img>| 
<a href='matpel_hapus.php?Hapuskode_matpel=<?php echo $datakode_matpel[kode_matpel]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan kode_matpel=<?php echo $datakode_matpel[kode_matpel]?>')"><img src='./images/delete.png' width=25></img></td>
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
