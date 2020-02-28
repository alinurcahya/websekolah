<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body bgcolor="blue">
<table id="example" class="display" cellspacing="0" width="100%">
<center><h2>DAFTAR JABATAN GURU SMP NEGERI 31 PADANG</h2></center>
<hr></hr>
 <input type="button" id="button" onclick='top.location="input_jabatan.php"' value="Input">
  <input type="button" id="button" onclick='top.location="index.php"' value="Home">
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
