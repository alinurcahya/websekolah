<form name="input_kelas.php" method="post" action="kelas_simpan.php" enctype="multipart/form-data">
<tr>
<th><center><h2>ENTRY DATA  KELAS SMP NEGERI 31 PADANG</h2></center></th>
<hr>
</tr>

<table border=0 align="center" width="700">
<tr>
<td><label>kode_kelas</label></td>
<td><label> : </label></td>
<td><label>
<input type="kode_kelas" name="kode_kelas" size=25 maxlength=25 placeholder="Isikan kode_kelas">
</label></td>
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

<tr>
<td><label>jumlah_siswa</label></td>
<td><label> : </label></td>
<td><label>
<input type="jumlah_siswa" name="jumlah_siswa" size=25 maxlength=25 placeholder="Isikan jumlah_siswa">
</label></td>
</tr>



<tr>
<td><label>Tahun_Ajaran</label></td>
<td><label> : </label></td>
<td><label>
<input type="Tahun_Ajaran" name="Tahun_Ajaran" size=25 maxlength=25 placeholder="Isikan Tahun_Ajaran">
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
<input type="button" id="button" onclick='top.location="view_kelas.php"' value="Laporan">
</td>
</tr>
</table>
</form>

