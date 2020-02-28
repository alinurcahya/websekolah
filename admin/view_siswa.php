<link rel="stylesheet" media="screen" href="../admin/css/jquery.dataTables.css"/>
<script type="text/javascript" src="../admin/js/jquery.js"></script>
<script type="text/javascript" src="../admin/js/jquery.dataTables.js"></script>
<body bgcolor="blue">
<table id="example" class="display" cellspacing="0" width="80%">
<center><h2>DAFTAR DATA SISWA SMP NEGERI 31 PADANG</h2></center>
 <input type="button" id="button" onclick='top.location="input_siswa.php"' value="Input">
  <input type="button" id="button" onclick='top.location="index.php"' value="Home">
<hr>
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
</tr></hr>
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
<td><a href='siswa_edit.php?Ubahnis=<?php echo $dataUsername[nis]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan nis=<?php echo $dataUsername[nis]?>')"><img src='./images/edit.png' width=25></img>| 
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
