<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT FORM JABATAB</title>
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
if(! $_GET['Ubahid_jabatan']=="")
{
include "./Config/koneksi.php"; //koneksi ke server database
$sqlUbah   = "select * from jabatan where  id_jabatan='".$_GET['Ubahid_jabatan']."'";
$queryUbah = mysql_query($sqlUbah);
$dataid_jabatan	   = mysql_fetch_array($queryUbah);
}

$id_jabatan=$dataid_jabatan['id_jabatan'];
$nama_jabatan=$dataid_jabatan['nama_jabatan'];
$NIP=$dataid_jabatan['NIP'];
$nama_guru=$dataid_jabatan['nama_guru'];
$nama_matpel=$dataid_jabatan['nama_matpel'];
?>

<form name='frm_ubah_jabatan' action='simp_ubah_jabatan.php' method='post' onSubmit="return validasi(this)" enctype="multipart/form-data">
<h2><center>EDIT JABATAN SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<table border=0 align='center' width=700>

<tr>
<td><label>id_jabatan</label></td>
<td><label> : </label></td>
<td><label>
<input type="id_jabatan" name="id_jabatan" value='<?php echo "$id_jabatan" ?>' size=16 maxlength=16 disabled>
<input type="id_jabatan" name="id_jabatan" value='<?php echo "$id_jabatan" ?>' size=16 maxlength=16 hidden>
</label></td>
</tr>

<tr>
<td><label>nama_jabatan</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_jabatan" name="nama_jabatan" value='<?php echo "$nama_jabatan"?>' size=14 maxlength=14>
</label></td>
</tr>

<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<input type="NIP" name="NIP" value='<?php echo "$NIP"?>' size=14 maxlength=14>
</label></td>
</tr>

<tr>
<td><label>nama_guru</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_guru" name="nama_guru" value='<?php echo "$nama_guru"?>' size=14 maxlength=14>
</label></td>
</tr>

<td><label>nama_matpel</label></td>
<td><label> : </label></td>
<td><select name="nama_matpel">
<?php include "./Config/koneksi.php";
$query="select * from jabatan";
$hasil=mysql_query($query);
while($jabatan=mysql_fetch_assoc($hasil))
{
	echo "<option value=$jabatan[nama_matpel]>$jabatan[nama_matpel]</option>";
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
<h2>DAFTAR JABATAN GURU SMP NEGERI 31 PADANG</h2>
<hr>
<thead>
<tr>
<td>No.</td>
<td>id_jabatan</td>
<td>nama_jabatan</td>
<td>NIP</td>
<td>nama_guru</td>
<td>nama_matpel</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlid_jabatan   = "select * from  jabatan order by id_jabatan  ASC"; 
$queryid_jabatan = mysql_query($sqlid_jabatan);
$no = 1;
while($dataid_jabatan = mysql_fetch_array($queryid_jabatan))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$dataid_jabatan[id_jabatan]</td>";
echo "<td>$dataid_jabatan[nama_jabatan]</td>";
echo "<td>$dataid_jabatan[NIP]</td>";
echo "<td>$dataid_jabatan[nama_guru]</td>";
echo "<td>$dataid_jabatan[nama_matpel]</td>";

?>
<td><a href='jabatan_edit.php?Ubahid_jabatan=<?php echo $dataid_jabatan[id_jabatan]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan id_jabatan=<?php echo $dataid_jabatan[id_jabatan]?>')"><img src='./images/edit.png' width=25></img>| 
<a href='jabatan_hapus.php?Hapusid_jabatan=<?php echo $dataid_jabatan[id_jabatan]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan id_jabatan=<?php echo $dataid_jabatan[id_jabatan]?>')"><img src='./images/delete.png' width=25></img></td>
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
