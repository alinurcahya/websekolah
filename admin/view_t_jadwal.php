<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body bgcolor="blue">
<table id="example" class="display" cellspacing="5" width="100%">
<center><h2>DAFTAR JADWAL GURU SMP NEGERI 31 PADANG</h2></center>
<hr></hr>
<thead>
 <input type="button" id="button" onclick='top.location="input_t_jadwal.php"' value="Input">
  <input type="button" id="button" onclick='top.location="index.php"' value="Home">
<tr>
<td>No.</td>
<td>Kelas</td>
<td>NIS</td>
<td>Nama Siswa</td>
<td>Kode Mata Pelajaran</td>
<td>Nama Mata Pelajaran</td>
<td>NIP</td>
<td>Nama Guru</td>
<td>Jabatan</td>
<td>Hari</td>
<td>Jam Awal</td>
<td>Jam Akhir</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlkd_jadwal   = "select * from  t_jadwal,siswa,matpel,guru where t_jadwal.nis=siswa.nis and t_jadwal.kode_matpel=matpel.kode_matpel and t_jadwal.NIP=guru.NIP order by t_jadwal.kelas  ASC"; 
$querykd_jadwal = mysql_query($sqlkd_jadwal);
$no = 1;
while($data_jadwal = mysql_fetch_array($querykd_jadwal))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$data_jadwal[kelas]</td>";
echo "<td>$data_jadwal[nis]</td>";
echo "<td>$data_jadwal[nama_siswa]</td>";
echo "<td>$data_jadwal[kode_matpel]</td>";
echo "<td>$data_jadwal[nama_matpel]</td>";
echo "<td>$data_jadwal[NIP]</td>";
echo "<td>$data_jadwal[nama_guru]</td>";
echo "<td>$data_jadwal[nama_jabatan]</td>";
echo "<td>$data_jadwal[hari]</td>";
echo "<td>$data_jadwal[jam_awal]</td>";
echo "<td>$data_jadwal[jam_akhir]</td>";

?>
<td><a href='t_jadwal_edit.php?Ubahkd_jadwal=<?php echo $data_jadwal[kd_jadwal]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan kd_jadwal=<?php echo $data_jadwal[kd_jadwal]?>')"><img src='./images/edit.png' width=25></img>|
<a href='t_jadwal_hapus.php?Hapuskd_jadwal=<?php echo $data_jadwal[kd_jadwal]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan kd_jadwal=<?php echo $data_jadwal[kd_jadwal]?>')"><img src='./images/delete.png' width=25></img></td>
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



