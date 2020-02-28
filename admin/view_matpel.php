<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body bgcolor="blue">
<table id="example" class="display" cellspacing="0" width="100%">
<h2><center>DAFTAR MATA PELAJARAN SMP NEGERI 31 PADANG</center></h2>
<hr></hr>
<thead>
<tr>
<td>No.</td>
<td>kode_matpel</td>
<td>nama_matpel</td>
<td>jam_matpel</td>
<td>NIP</td>
<td>nama_guru</td>
<td>Aksi</td>
</tr>
</thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$sqlkode_matpel   = "select * from  matpel order by kode_matpel  ASC"; 
$querykode_matpel = mysql_query($sqlkode_matpel);
$no = 1;
while($datakode_matpel = mysql_fetch_array($querykode_matpel))
{
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$datakode_matpel[kode_matpel]</td>";
echo "<td>$datakode_matpel[nama_matpel]</td>";
echo "<td>$datakode_matpel[jam_matpel]</td>";
echo "<td>$datakode_matpel[NIP]</td>";
echo "<td>$datakode_matpel[nama_guru]</td>";

?>
<td><a href='matpel_edit.php?UbahNIP=<?php echo $datakode_matpel[kode_matpel]?>' title="Klik Disini Untuk Ubah" Onclick="return confirm('Apakah Anda Yakin Ubah Record dengan kode_matpel=<?php echo $datakode_matpel[kode_matpel]?>')"><img src='./images/edit.png' width=25></img>| 
<a href='matpel_hapus.php?Hapuskode_matpel=<?php echo $datakode_matpel[kode_matpel]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan kode_matpel=<?php echo $datakode_matpel[kode_matpel]?>')"><img src='./images/delete.png' width=25></img></td>
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


