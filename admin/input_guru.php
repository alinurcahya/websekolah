<form name="input_guru.php" method="post" action="guru_simpan.php" enctype="multipart/form-data">
<tr>
<h2><center>ENTRY DATA GURU SMP NEGERI 31 PADANG</center></h2>
<hr>
</tr>

<table border=1 align="center" width="800" cellpadding="0" background color ="blue" >
<tr>
<td><label>username</label></td>
<td><label> : </label></td>
<td><label>
<input type="username" name="username" size=25 maxlength=25 placeholder="Isikan Username">
</label></td>
</tr>

<tr>
<td><label>password</label></td>
<td><label> : </label></td>
<td><label>
<input type="password" name="password" size=25 maxlength=25 placeholder="Isikan Password">
</label></td>
</tr>

<tr>
<td><label>nama_guru</label></td>
<td><label> : </label></td>
<td><label>
<input type="nama_guru" name="nama_guru" size=25 maxlength=25 placeholder="Isikan nama_guru">
</label></td>
</tr>

<tr>
<td><label>NIP</label></td>
<td><label> : </label></td>
<td><label>
<input type="NIP" name="NIP" size=25 maxlength=25 placeholder="Isikan NIP">
</label></td>
</tr>

<tr>
<td><label>nama_jabatan</label></td>
<td><label> : </label></td>
<td><label>
<?php
echo "<select name='nama_jabatan'>";
echo "<option value=0 selected>-Pilih nama_jabatan-</option>";
include "./Config/koneksi.php";
$sqlnama_jabatan = "select * from jabatan order by nama_jabatan";
$resultnama_jabatan = mysql_query($sqlnama_jabatan);
while($datanama_jabatan = mysql_fetch_array($resultnama_jabatan))
{
echo "<option value=$datanama_jabatan[nama_jabatan]>$datanama_jabatan[nama_jabatan]</option>";
}
echo "</select>";
?>
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
<td>JENIS KELAMIN</td>
<td> : </td>
<td>
<input type="radio" name='jekel' id="jekel" value="LAKI-LAKI">LAKI-LAKI
<input type="radio" name='jekel' id="jekel" value="PEREMPUAN">PEREMPUAN
</td>
</tr>

<tr>
<td>status</td>
<td> : </td>
<td>
<input type="radio" name='status' id="status" value="Aktif">AKTIF
<input type="radio" name='status' id="status" value="Tidak Aktif">TIDAK AKTIF
</td>
</tr>

<tr>
<td><label>alamat</label></td>
<td><label> : </label></td>
<td><label>
<input type="alamat" name="alamat" size=25 maxlength=25 placeholder="Isikan alamat">
</label></td>
</tr>


<td><label>kota</label></td>
<td><label> : </label></td>
<td><select name="kota">
<option>=PILIHAN=</option>
<option>BANDA ACEH</option>
<option>Sabang</option>
<option>Denpasar</option>
<option>Cilegon</option>
<option>Tangerang</option>
<option>Bengkulu</option>
<option>Gorontalo</option>
<option>Bandung</option>
<option>Jambi</option>
<option>Bandung</option>
<option>Tasikmalaya</option>
<option>Dumai</option>
<option>Pekanbaru</option>
<option>Makassar</option>
<option>Bukittinggi</option>
<option>Padang</option>
<option>Padangpanjang</option>
<option>Pariaman</option>
<option>Payakumbuh</option>
<option>Sawahlunto</option>
<option>Solok</option>
<option>Binjai</option>
<option>Medan</option>
<option>Padang Sidempuan</option>
<option>Pematangsiantar</option>
<option>Sibolga</option>
<option>Tanjungbalai</option>
<option>Tebingtinggi</option>
<option>Dan Lain Lain</option>
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



<tr>
<td>Upload_Foto</td>
<td> : </td>
<td>
<input type="file" name="Upload_Foto" id="foto">
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
<input type="button" id="button" onclick='top.location="view_guru.php"' value="Laporan">
</td>
</tr>
</table>
</form>

