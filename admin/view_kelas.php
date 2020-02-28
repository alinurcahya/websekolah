<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body bgcolor="blue">
<table id="example" class="display" cellspacing="0" width="100%">
<h2><center>DAFTAR SISWA SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<input type="button" id="button" onclick='top.location="input_kelas.php"' value="Input">
  <input type="button" id="button" onclick='top.location="index.php"' value="Home">
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
