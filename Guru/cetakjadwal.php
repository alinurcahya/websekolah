<?php
session_start();
?>

<br>
<br>
<center><b>LAPORAN DATA JADWAL PELAJARAN<br>SMP NEGERI 31 PADANG</b></center><br>

<?php
 include "./Config/koneksi.php";
 $data = mysql_query("select * from t_jadwal");
?>
<html>
<head>
 <title>Print Document Jadwal</title>
 <link href="sal.css" type="text/css" rel="stylesheet"/>
</head>
<body>  
<?php
 include "./Config/koneksi.php";
$username=$_SESSION['guru'];
$sqlUsername   = "select * from  guru where username = '$username' "; 
$queryUsername = mysql_query($sqlUsername);
$dataUsername = mysql_fetch_array($queryUsername);
$nip=$dataUsername[NIP];
?>
<table width="80%"  align="center">
<tr>
<td>NIP</td><td>:</td><td><?php echo"$dataUsername[NIP]" ?></td>
</tr>

<tr>
<td>Nama Guru</td><td>:</td><td><?php echo"$dataUsername[nama_guru]" ?></td>
</tr>


<tr>
<td>Jabatan</td><td>:</td><td><?php echo"$dataUsername[nama_jabatan]" ?></td>
</tr>

     <table border="1" width="80%"  align="center">  
         <tr class="tableheader"> 
<center>		 
				<th>KELAS</th>
				<th rowspan="1">NIS</th>
				<th>NAMA SISWA</th> 
				<th>KODE MATA PELAJARAN</th>			 
				<th>NAMA MATA PELAJARAN</th>
				<th>HARI</th>
				<th>JAM AWAL</th>
				<th>JAM AKHIR</th>

            </tr>  
            <?php 
			include "./Config/koneksi.php";
$sql   = "select * from  t_jadwal,siswa,matpel,guru where t_jadwal.nis=siswa.nis and t_jadwal.kode_matpel=matpel.kode_matpel and t_jadwal.NIP=guru.NIP and  t_jadwal.NIP='$nip' order by t_jadwal.kelas  ASC"; 
$data = mysql_query($sql);
$no = 1;

	while($hasil = mysql_fetch_assoc($data)){ 
			?>  
            <tr id="rowHover">  
			<td width="20%" align="center"><?php echo $hasil['kelas']; ?></td>			
			<td width="30%" align="center"><?php echo $hasil['nis']; ?></td> 
            <td width="30%" align="center"><?php echo $hasil['nama_siswa']; ?></td> 
            <td width="30%" align="center"><?php echo $hasil['kode_matpel']; ?></td>  
            <td width="20%" align="center"><?php echo $hasil['nama_matpel']; ?></td>  
     		<td width="30%" align="center"><?php echo $hasil['hari']; ?></td> 
            <td width="30%" align="center"><?php echo $hasil['jam_awal']; ?></td> 
	    	<td width="30%" align="center"><?php echo $hasil['jam_akhir']; ?></td>

		
            </tr>  
            <?php } ?>  
        </table>  
          <br>

 <table border="0"  width="160%" align="center" >
 <tr>
   <td ><th colspan="20">
    Padang,...,........20...
		  <br>KEPALA SEKOLAH<br><br><br>
		  
		  
		  
		Mardawati, M.Pd<br>
	NIP. 196111151993032003
</p></th></td>
</tr>
</table>
 <script>
 window.load = print_d();
 function print_d(){
 window.print();
 }
 </script>
</body>
</html>