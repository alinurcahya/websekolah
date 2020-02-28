<?php
session_start();
?>
<link rel="stylesheet" media="screen" href="../admin/css/jquery.dataTables.css"/>
<script type="text/javascript" src="../admin/js/jquery.js"></script>
<script type="text/javascript" src="../admin/js/jquery.dataTables.js"></script>
<body >
<table width="70%">
<center><h2>DAFTAR JADWAL GURU SMP NEGERI 31 PADANG</h2></center>
<hr></hr>
<?php
 include "./Config/koneksi.php";
$username=$_SESSION['guru'];
$sqlUsername   = "select * from  guru where username = '$username' "; 
$queryUsername = mysql_query($sqlUsername);
$dataUsername = mysql_fetch_array($queryUsername);
$nip=$dataUsername[NIP];
?>
<tr>
<td>NIP</td><td>:</td><td><?php echo"$dataUsername[NIP]" ?></td>
</tr>

<tr>
<td>Nama Guru</td><td>:</td><td><?php echo"$dataUsername[nama_guru]" ?></td>
</tr>


<tr>
<td>Jabatan</td><td>:</td><td><?php echo"$dataUsername[nama_jabatan]" ?></td>
</tr>


</table>
<table class="display" border="2" border="2" cellspacing="5" width="100%">
<thead>
<tr align="center">
<td>No.</td>
<td>Kelas</td>
<td>NIS</td>
<td>Nama Siswa</td>
<td>Kode Mata Pelajaran</td>
<td>Nama Mata Pelajaran</td>
<td>Hari</td>
<td>Jam Awal</td>
<td>Jam Akhir</td>

</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlkode_matpel   = "select * from  t_jadwal,siswa,matpel,guru where t_jadwal.nis=siswa.nis and t_jadwal.kode_matpel=matpel.kode_matpel and t_jadwal.NIP=guru.NIP and  t_jadwal.NIP='$nip' order by t_jadwal.kelas  ASC"; 
$querykode_matpel = mysql_query($sqlkode_matpel);
$no = 1;
while($data_jadwal = mysql_fetch_array($querykode_matpel))
{
echo "<tr>";
echo "<td align=center>$no</td>";
echo "<td align=center>$data_jadwal[kelas]</td>";
echo "<td align=center>$data_jadwal[nis]</td>";
echo "<td>$data_jadwal[nama_siswa]</td>";
echo "<td align=center>$data_jadwal[kode_matpel]</td>";
echo "<td>$data_jadwal[nama_matpel]</td>";
echo "<td align=center>$data_jadwal[hari]</td>";
echo "<td align=center>$data_jadwal[jam_awal]</td>";
echo "<td align=center>$data_jadwal[jam_akhir]</td>";


?>

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



