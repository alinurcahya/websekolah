<form name="input_matpel.php" method="post" action="matpel_simpan.php" enctype="multipart/form-data">
<tr>
<th><center><h2>ENTRY DATA  MATA PELAJARAN GURU SMP NEGERI 31 PADANG</h2></center></th>
<hr>
</tr>

<table border=0 align="center" width="500">
<td><label>kode_matpel</label></td>
<td><label> : </label></td>
<td><select name="kode_matpel">
<option>=PILIHAN=</option>
<option>PSD1</option>
<option>PSD2</option>
<option>PSD3</option>
<option>PSD4</option>
<option>PSD5</option>
<option>PSD6</option>
<option>PSD7</option>
<option>PSD8</option>
<option>PSD9</option>
<option>PSD10</option>
<option>PSD11</option>
<option>PSD12</option>
<option>PSD13</option>
<option>PSD14</option>
<option>PSD15</option>
<option>PSD16</option>
<option>PSD17</option>
</select>
</td>
</tr>

<td><label>nama_matpel</label></td>
<td><label> : </label></td>
<td><select name="nama_matpel">
<option>=PILIHAN=</option>
<option>UPACARA</option>
<option>BAHASA INDONESIA</option>
<option>BAHASA INGGRIS</option>
<option>IPA</option>
<option>IPS</option>
<option>MATEMATIKA</option>
<option>IPA</option>
<option>PAI</option>
<option>PPKN</option>
<option>SENI BUDAYA</option>
<option>PJOK</option>
<option>BIMBINGAN KONSELING</option>
<option>AGAMA</option>
<option>Budaya Alam Minangkabau</option>
<option>PRAKARYA</option>
<option>TIK</option>
<option>PJOK</option>
</select>
</td>
</tr>

<td><label>jam_matpel</label></td>
<td><label> : </label></td>
<td><select name="jam_matpel">
<option>=PILIHAN=</option>
<option>06.45 - 07.50</option>
<option>07.50 - 08.40</option>
<option>08.40 - 09.20</option>
<option>10.00 - 10.30</option>
<option>10.30 - 11.10</option>
<option>11.50 - 12.30</option>
<option>12.30 - 13.10</option>
<option>09.50 - 10.30</option>
<option>07.50 - 08.30</option>
<option>08.30 - 09.10</option>
<option>09.10 - 09.50</option>
<option>09.50 - 10.30</option>
<option>11.10 - 11.50</option>
<option>06.45 - 08.10</option>
<option>08.10 - 09.00</option>
<option>09.40 - 10.20</option>
<option>10.20 - 11.00</option>
<option>10.30 - 11.45</option>
</select>
</td>
</tr>

<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<?php
echo "<select name='NIP'>";
echo "<option value=0 selected>-Pilih NIP-</option>";
include "./Config/koneksi.php";
$sqlNIP = "select * from jabatan order by NIP";
$resultNIP = mysql_query($sqlNIP);
while($dataNIP = mysql_fetch_array($resultNIP))
{
echo "<option value=$dataNIP[NIP]>$dataNIP[NIP]-$dataNIP[NIP]</option>";
}
echo "</select>";
?>
</label></td>
</tr>

<tr>
<td><label>nama_guru</label></td>
<td><label> : </label></td>
<td><label>
<?php
echo "<select name='nama_guru'>";
echo "<option value=0 selected>-Pilih nama_guru-</option>";
include "./Config/koneksi.php";
$sqlnama_guru = "select * from guru order by nama_guru";
$resultnama_guru = mysql_query($sqlnama_guru);
while($datanama_guru = mysql_fetch_array($resultnama_guru))
{
echo "<option value=$datanama_guru[nama_guru]>$datanama_guru[nama_guru]-$datanama_guru[nama_guru]</option>";
}
echo "</select>";
?>
</label></td>
</tr>

</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="Simpan" value="Simpan">
<input type="reset" name="Batal" value="Batal">
<input type="button" id="button" onclick='top.location="view_matpel.php"' value="Laporan">
</td>
</tr>
</table>
</form>




