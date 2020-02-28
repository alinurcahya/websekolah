<br>
<br>
<center><b>LAPORAN DATA JADWAL PELAJARAN<br>SMP NEGERI 31 PADANG</b></center><br>

<?php
 include "./Config/koneksi.php";
 $data = mysql_query("select * from  t_jadwal,siswa,matpel,guru where t_jadwal.nis=siswa.nis and t_jadwal.kode_matpel=matpel.kode_matpel and t_jadwal.NIP=guru.NIP order by t_jadwal.kelas  ASC");
?>
<html>
<head>
 <title>Print Document Jadwal</title>
 <link href="sal.css" type="text/css" rel="stylesheet"/>
</head>
<body>  
     <table border="1" width="80%" style="border-collapse:collapse;" align="center">  
         <tr class="tableheader"> 
<center>	
            <th>KELAS</th>	 
             <th rowspan="1">NIS</th>  
             <th rowspan="1">NAMA SISWA</th>  
             <th rowspan="1">KODE MATA PELAJARAN</th>  
				<th>NAMA MATA PELAJARAN</th>
				<th>NIP</th>
				<th>NAMA GURU</th> 
				<th>NAMA JABATAN</th>
				<th>HARI</th>
				<th>JAM AWAL</th>
				<th>JAM AKHIR</th>
            </tr>  
            <?php while($hasil = mysql_fetch_assoc($data)){ 
			?>  
            <tr id="rowHover">  
			<td width="20%" align="center"><?php echo $hasil['kelas']; ?></td>
			 <td width="15%" align="center"><?php echo $hasil['nis']; ?></td>  
                <td width="20%" align="center"><?php echo $hasil['nama_siswa']; ?></td>  
             <td width="15%" align="center"><?php echo $hasil['kode_matpel']; ?></td>  
                <td width="20%" align="center"><?php echo $hasil['nama_matpel']; ?></td>  
				<td width="19%" align="center"><?php echo $hasil['NIP']; ?></td> 
                <td width="30%" align="center"><?php echo $hasil['nama_guru']; ?></td>  
				<td width="30%" align="center"><?php echo $hasil['nama_jabatan']; ?></td> 		
				<td width="19%" align="center"><?php echo $hasil['hari']; ?></td> 
                <td width="20%" align="center"><?php echo $hasil['jam_awal']; ?></td> 
				<td width="20%" align="center"><?php echo $hasil['jam_akhir']; ?></td>	
            </tr>  
            <?php } ?>  
        </table>  
          <br>

 <table border="0"  width="160%" align="center" >
 <tr>
   <td ><th colspan="20">
     Padang,...,........20...
		  <br><br><br><br><br>
		  
		  
		<br>   PIMPINAN </br>
		<br> Mardawati, M.Pd </br>
	<br> NIP. 196111151993032003 </br>
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