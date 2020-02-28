<link rel="stylesheet" media="screen" href="../admin/css/jquery.dataTables.css"/>
<script type="text/javascript" src="../admin/js/jquery.js"></script>
<script type="text/javascript" src="../admin/js/jquery.dataTables.js"></script>
<body >
<table id="example" class="display" cellspacing="0" width="150%">
<center><h2>DAFTAR DATA GURU SMP NEGERI 31 PADANG</h2></center>

<hr></hr>
<thead>
<tr>
<td>No.</td>
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
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlnama_guru   = "select * from   guru order by nama_guru  ASC"; 
$querynama_guru = mysql_query($sqlnama_guru);
$no = 1;
while($datanama_guru = mysql_fetch_array($querynama_guru))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$datanama_guru[nama_guru]</td>";
echo "<td>$datanama_guru[NIP]</td>";
echo "<td>$datanama_guru[nama_jabatan]</td>";
echo "<td>$datanama_guru[tempat_lahir]</td>";
echo "<td>$datanama_guru[tanggal_lahir]</td>";
echo "<td>$datanama_guru[jekel]</td>";
echo "<td>$datanama_guru[status]</td>";
echo "<td>$datanama_guru[alamat]</td>";
echo "<td>$datanama_guru[kota]</td>";
echo "<td>$datanama_guru[kelas]</td>";
echo "<td><img src='../admin/fotoguru/$datanama_guru[Upload_Foto]' width=65</td>";

?>
<td><a href='guru_edit.php?Ubahnama_guru=<?php echo $datanama_guru[nama_guru]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan nama_guru=<?php echo $datanama_guru[nama_guru]?>')">
<a href='guru_hapus.php?Hapusnama_guru=<?php echo $datanama_guru[nama_guru]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan nama_guru=<?php echo $datanama_guru[nama_guru]?>')">
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


