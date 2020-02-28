<link rel="stylesheet" media="screen" href="../admin/css/jquery.dataTables.css"/>
<script type="text/javascript" src="../admin/js/jquery.js"></script>
<script type="text/javascript" src="../admin/js/jquery.dataTables.js"></script>
<body bgcolor="pink">
<table id="example" class="display" cellspacing="0" width="100%">
<center><h2>DAFTAR SISWA SMP NEGERI 31 PADANG</h2></center>
<hr></hr>
<thead>
<tr>
<td>No.</td>
<td>nama_siswa</td>
<td>nis</td>
<td>tempat_lahir</td>
<td>tanggal_lahir</td>
<td>jekel</td>
<td>status</td>
<td>kelas</td>

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
echo "<td>$dataUsername[nama_siswa]</td>";
echo "<td>$dataUsername[nis]</td>";
echo "<td>$dataUsername[tempat_lahir]</td>";
echo "<td>$dataUsername[tanggal_lahir]</td>";
echo "<td>$dataUsername[jekel]</td>";
echo "<td>$dataUsername[status]</td>";
echo "<td>$dataUsername[kelas]</td>";
echo "<td>$dataUsername[email]</td>";



?>
<td><a href='siswa_edit.php?UbahUsername=<?php echo $dataUsername[Username]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan Username=<?php echo $dataUsername[Username]?>')"> 
<a href='siswa_hapus.php?HapusUsername=<?php echo $dataUsername[Username]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan Username=<?php echo $dataUsername[Username]?>')">
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
