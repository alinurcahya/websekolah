<link rel="stylesheet" media="screen" href="../admin/css/jquery.dataTables.css"/>
<script type="text/javascript" src="../admin/js/jquery.js"></script>
<script type="text/javascript" src="../admin/js/jquery.dataTables.js"></script>
<body bgcolor="pink">
<table id="example" class="display" cellspacing="0" width="80%">
<center><h2>DAFTAR DATA GURU SMP NEGERI 31 PADANG</h2></center>

<hr>
<thead>
 <input type="button" id="button" onclick='top.location="input_guru.php"' value="Input">
  <input type="button" id="button" onclick='top.location="index.php"' value="Home">
<tr>
<td>No.</td>
<td>USERNAME</td>
<td>PASSWORD</td>
<td>NAMA GURU</td>
<td>NIP</td>
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
</tr></hr>
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
echo "<td>$datausername[username]</td>";
echo "<td>$datausername[password]</td>";
echo "<td>$datausername[nama_guru]</td>";
echo "<td>$datausername[NIP]</td>";
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
<td><a href='guru_edit.php?UbahNIP=<?php echo $datausername[NIP]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan nip=<?php echo $datausername[NIP]?>')"><img src='./images/edit.png' width=30></img>| 
<a href='guru_hapus.php?Hapususername=<?php echo $datausername[username]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan nip=<?php echo $datausername[username]?>')"><img src='./images/delete.png' width=25></img></td>
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


