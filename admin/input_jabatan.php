<form name="input_jabatan.php" method="post" action="jabatan_simpan.php" enctype="multipart/form-data">
<tr>
<th><center><h2>ENTRY DATA  JABATAN GURU SMP NEGERI 31 PADANG</h2></center></th>
<hr>
</tr>

<table border=0 align="center" width="700">
<tr>
<td><label>id_jabatan</label></td>
<td><label> : </label></td>
<td><label>
<input type="id_jabatan" name="id_jabatan" size=50 maxlength=50 placeholder="Isikan id_jabatan">
</label></td>
</tr>


<tr>
<td><label>nama_jabatan</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_jabatan" name="nama_jabatan" size=50 maxlength=50 placeholder="Isikan nama_jabatan">
</label></td>
</tr>

<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<input type="NIP" name="NIP" size=50 maxlength=50 placeholder="Isikan NIP">
</label></td>
</tr>

<tr>
<td><label>nama_guru</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_guru" name="nama_guru" size=50 maxlength=50 placeholder="Isikan NAMA GURU">
</label></td>
</tr>

<td><label>nama_matpel</label></td>
<td><label> : </label></td>
<td><select name="nama_matpel">
<?php include "./Config/koneksi.php";
$query="select * from jabatan";
$hasil=mysql_query($query);
while($jabatan=mysql_fetch_assoc($hasil))
{
	echo "<option value=$jabatan[nama_matpel]>$jabatan[nama_matpel]</option>";
}
?>
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

</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="Simpan" value="Simpan">
<input type="reset" name="Batal" value="Batal">
<input type="button" id="button" onclick='top.location="view_jabatan.php"' value="Laporan">
</td>
</tr>
</table>
</form>

