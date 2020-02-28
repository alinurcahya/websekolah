<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body bgcolor="blue">
<table id="example" class="display" cellspacing="5" width="100%">
<center><h2>DAFTAR HARI GURU SMP NEGERI 31 PADANG</h2></center>
<hr></hr>
 <input type="button" id="button" onclick='top.location="input_hari.php"' value="Input">
  <input type="button" id="button" onclick='top.location="index.php"' value="Home">
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
