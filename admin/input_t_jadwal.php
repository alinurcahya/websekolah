<form name="input_t_jadwal.php" method="post" action="t_jadwal_simpan.php" enctype="multipart/form-data">
<tr>
<th><center><h2>ENTRY DATA  JADWAL GURU SMP NEGERI 31 PADANG</h2></center></th>
<hr>
</tr>

<table border=0 align="center" width="800">


<tr>
<td><label>NIS</label></td>
<td><label> : </label></td>
<td><label>
<?php
echo "<select name='nis'>";
echo "<option value=0 selected>-Pilih NIS-</option>";
include "./Config/koneksi.php";
$sqlnis = "select * from siswa order by nis";
$resultnis = mysql_query($sqlnis);
while($datanis = mysql_fetch_array($resultnis))
{
echo "<option value=$datanis[nis]>$datanis[nis]-$datanis[nama_siswa]</option>";
}
echo "</select>";
?>
</label></td>
</tr>

<tr>
<td><label>Nama Matapelajaran</label></td>
<td><label> : </label></td>
<td><label>
<?php
echo "<select name='kode_matpel'>";
echo "<option value=0 selected>-Pilih Matapelajaran-</option>";
include "./Config/koneksi.php";
$sqlnama_matpel = "select * from matpel order by nama_matpel";
$resultnama_matpel = mysql_query($sqlnama_matpel);
while($datanama_matpel = mysql_fetch_array($resultnama_matpel))
{
echo "<option value=$datanama_matpel[kode_matpel]>$datanama_matpel[nama_matpel]</option>";
}
echo "</select>";
?>
</td></label>
</tr>

<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<?php
echo "<select name='NIP'>";
echo "<option value=0 selected>-Pilih NIP-</option>";
include "./Config/koneksi.php";
$sqlNIP = "select * from guru order by NIP";
$resultNIP = mysql_query($sqlNIP);
while($dataNIP = mysql_fetch_array($resultNIP))
{
echo "<option value=$dataNIP[NIP]>$dataNIP[NIP]-$dataNIP[nama_guru]</option>";
}
echo "</select>";
?>
</label></td>
</tr>


<td><label>Hari</label></td>
<td><label> : </label></td>
<td><select name="hari">
<option>=PILIHAN=</option>
<option>SENIN</option>
<option>SELASA</option>
<option>RABU</option>
<option>KAMIS</option>
<option>JUMAT</option>
<option>SABTU</option>
<option>MINGGGU</option>
</select>
</td>
</tr>




<tr>
<td><label>Jam Awal</label></td>
<td><label> : </label></td>
<td><label>
<input type="jam_awal" name="jam_awal" size=14 maxlength=14 placeholder="Isikan jam_awal">
</label></td>
</tr>

<tr>
<td><label>Jam Akhir</label></td>
<td><label> : </label></td>
<td><label>
<input type="jam_akhir" name="jam_akhir" size=14 maxlength=14 placeholder="Isikan jam_akhir">
</label></td>
</tr>

<td><label>Kelas</label></td>
<td><label> : </label></td>
<td><select name="kelas">
<option>=PILIHAN=</option>
<option>VII.1</option>
<option>VII.2</option>
<option>VII.3</option>
<option>VII.4</option>
<option>VII.5</option>
<option>VII.6</option>
<option>VII.7</option>
<option>VII.8</option>
<option>VIII.1</option>
<option>VIII.2</option>
<option>VIII.3</option>
<option>VIII.4</option>
<option>VIII.5</option>
<option>VIII.6</option>
<option>VIII.7</option>
<option>VIII.8</option>
<option>IX.1</option>
<option>IX.2</option>
<option>IX.3</option>
<option>IX.4</option>
<option>IX.5</option>
<option>IX.6</option>
<option>IX.7</option>
<option>IX.8</option>
<option>IX.9</option>
</select>
</td>
</tr>


</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="Simpan" value="Simpan">
<input type="reset" name="Batal" value="Batal">
<input type="button" id="button" onclick='top.location="view_t_jadwal.php"' value="Laporan">
</td>
</tr>
</table>
</form>

