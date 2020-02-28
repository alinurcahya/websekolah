<br>
<br>
<center><b>LAPORAN DATA GURU<br>SMP NEGERI 31 PADANG</b></center><br>

<?php
 include "./Config/koneksi.php";
 $data = mysql_query("select * from guru");
?>
<html>
<head>
 <title>Print Document</title>
 <link href="sal.css" type="text/css" rel="stylesheet"/>
</head>
<body>  
     <table border="1" width="80%" style="border-collapse:collapse;" align="center">  
         <tr class="tableheader"> 
<center>		 
             <th rowspan="1">NAMA GURU</th>  
				<th>NIP</th>
				<th>NAMA JABATAN</th>
				<th>TEMPAT</th>
				<th>TANGGAL LAHIR</th> 
				<th>JENIS KELAMIN</th>
				<th>STATUS</th>
				<th>ALAMAT</th>
				<th>KOTA</th> 
				<th>KELAS</th>
				<th>FOTO</th>
            </tr>  
            <?php while($hasil = mysql_fetch_assoc($data)){ 
			?>  
            <tr id="rowHover">  
             <td width="30%" align="center"><?php echo $hasil['nama_guru']; ?></td>  
                <td width="30%" align="center"><?php echo $hasil['NIP']; ?></td>  
				<td width="30%" align="center"><?php echo $hasil['nama_jabatan']; ?></td> 
				<td width="30%" align="center"><?php echo $hasil['tempat_lahir']; ?></td> 
                <td width="30%" align="center"><?php echo $hasil['tanggal_lahir']; ?></td>  
				 <td width="30%" align="center"><?php echo $hasil['jekel']; ?></td> 
				<td width="30%" align="center"><?php echo $hasil['status']; ?></td>  
				<td width="30%" align="center"><?php echo $hasil['alamat']; ?></td> 
                <td width="30%" align="center"><?php echo $hasil['kota']; ?></td>  
				<td width="30%" align="center"><?php echo $hasil['kelas']; ?></td> 
				<td width="30%" align="center"><?php echo $hasil['Upload_Foto']; ?></td> 
            </tr>  
            <?php } ?>  
        </table>  
          <br>

 <table border="0"  width="160%" align="center" >
 <tr>
   <td ><th colspan="10">
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