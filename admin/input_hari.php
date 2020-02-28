<form name="input_hari.php" method="post" action="hari_simpan.php" enctype="multipart/form-data">
<tr>
<th><center><h2>ENTRY DATA  HARI GURU SMP NEGERI 31 PADANG</h2></center></th>
<hr>
</tr>

<table border=0 align="center" width="800">
<td><label>Hari</label></td>
<td><label> : </label></td>
<td><select name="Hari">
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

<td><label>kelas</label></td>
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

<td><label>nama_matpel</label></td>
<td><label> : </label></td>
<td><select name="nama_matpel">
<option>=PILIHAN=</option>
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

<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<input type="NIP" name="NIP" size=25 maxlength=25 placeholder="Isikan NIP">
</label></td>
</tr>

<tr>
<td><label>nama_guru</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_guru" name="nama_guru" size=25 maxlength=25 placeholder="Isikan nama_guru">
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
<input type="button" id="button" onclick='top.location="view_hari.php"' value="Laporan">
</td>
</tr>
</table>
</form>

