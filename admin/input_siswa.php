<form name="input_siswa.php" method="post" action="siswa_simpan.php" enctype="multipart/form-data">
<tr>
<th><h2><center>ENTRY DATA SISWA SMP NEGERI 31 PADANG</center></h2></th>
<hr>
</tr>

<table border=0 align="center" width="700">
<tr>
<td><label>Username</label></td>
<td><label> : </label></td>
<td><label>
<input type="textUsername" name="textUsername" size=14 maxlength=14 placeholder="Isikan Username">
</label></td>
</tr>

<tr>
<td><label>Password</label></td>
<td><label> : </label></td>
<td><label>
<input type="Password" name="Password" size=25 maxlength=25 placeholder="Isikan Password">
</label></td>
</tr>

<tr>
<td><label>nama_siswa</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_siswa" name="nama_siswa" size=25 maxlength=25 placeholder="Isikan nama_siswa">
</label></td>
</tr>

<tr>
<td><label>nis</label></td>
<td><label> : </label></td>
<td><label>
<input type="nis" name="nis" size=25 maxlength=25 placeholder="Isikan NIS">
</label></td>
</tr>

<tr>
<td><label>tempat_lahir/tanggal_lahir</label></td>
<td><label> : </label></td>
<td><label>
<input type="txttempat_lahir" name="txttempat_lahir" size=16 maxlength=16 placeholder="Isikan Tempat Lahir"> /
<?php
echo "<select name='tanggal'>";
echo "<option value=0 selected>-Pilih Tanggal-</option>";
for($tgl=1;$tgl<=31;$tgl++)
{
echo "<option value=$tgl>$tgl</option>";
}
echo "</select>";

$nama_bulan= array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo "<select name='bulan'>";
echo "<option value=0 selected>-Pilih Bulan-</option>";
for($bln=1;$bln<=12;$bln++)
{
echo "<option value=$bln>$nama_bulan[$bln]</option>";
}

echo "</select>";

$thn_ini = date('Y');
echo "<select name='tahun'>";
echo "<option value=0 selected>-Pilih Tahun-</option>";
for($thn=1990;$thn<=$thn_ini;$thn++)
{
echo "<option value=$thn>$thn</option>";
}
echo "</select>";
?>
</label></td>
</tr>

<tr>
<td><label>JENIS KELAMIN</label></td>
<td><label> : </label></td>
<td><label>
<input type="radio" name="jekel" value="Laki-LAKI">LAKI-LAKI
<input type="radio" name="jekel" value="PEREMPUAN">PEREMPUAN
</label></td>
</tr>

<tr>
<td><label>status</label></td>
<td><label> : </label></td>
<td><label>
<input type="radio" name="status" value="AKTIF">AKTIF
<input type="radio" name="status" value="TIDAK AKTIF">TIDAK AKTIF
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


</td>
</tr>
<tr>
<td></td>
<td></td>
<td>
<input type="submit" name="Simpan" value="Simpan">
<input type="reset" name="Batal" value="Batal">
<input type="button" id="button" onclick='top.location="view_siswa.php"' value="Laporan">
</td>
</tr>
</table>
</form>

