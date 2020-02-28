<?php
session_start();
?>
<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body >
<table class="display" cellspacing="5" width="70%">
<center><h2>DAFTAR JADWAL SMP NEGERI 31 PADANG</h2></center>
<hr></hr>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$username=$_SESSION['siswa'];
$sqlUsername   = "select * from  siswa where Username = '$username' "; 
$queryUsername = mysql_query($sqlUsername);
$dataUsername = mysql_fetch_array($queryUsername);
$nis=$dataUsername[nis];
?>
<tr>
<td>Nama Siswa</td><td>:</td><td><?php echo"$dataUsername[nama_siswa]" ?></td>
</tr>

<tr>
<td>NIS</td><td>:</td><td><?php echo"$dataUsername[nis]" ?></td>
</tr>

<tr>
<td>Kelas</td><td>:</td><td><?php echo"$dataUsername[kelas]" ?></td>
</tr>


</table>
<table class="display" border="2" cellspacing="5" width="100%">
<tr align="center">
<td>No.</td>
<td>Kode Mata Pelajaran</td>
<td>Nama Mata Pelajaran</td>
<td>NIP</td>
<td>Nama Guru</td>
<td>Hari</td>
<td>Jam Awal</td>
<td>Jam Akhir</td>

</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlkode_matpel   = "select * from  t_jadwal,siswa,matpel,guru where t_jadwal.nis=siswa.nis and t_jadwal.kode_matpel=matpel.kode_matpel and t_jadwal.NIP=guru.NIP and siswa.nis='$nis' order by matpel.kode_matpel  ASC"; 
$querykode_matpel = mysql_query($sqlkode_matpel);
$no = 1;
while($datakode_matpel = mysql_fetch_array($querykode_matpel))
{
echo "<tr>";
echo "<td align=center>$no</td>";
echo "<td align=center>$datakode_matpel[kode_matpel]</td>";
echo "<td>$datakode_matpel[nama_matpel]</td>";
echo "<td align=center>$datakode_matpel[NIP]</td>";
echo "<td>$datakode_matpel[nama_guru]</td>";
echo "<td align=center>$datakode_matpel[hari]</td>";
echo "<td align=center>$datakode_matpel[jam_awal]</td>";
echo "<td align=center>$datakode_matpel[jam_akhir]</td>";

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



