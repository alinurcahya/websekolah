<br>
<br>
<center><b>LAPORAN DATA SISWA<br>SMP NEGERI 31 PADANG</b></center><br>

<?php
 include "./Config/koneksi.php";
 $data = mysql_query("select * from siswa");
?>
<html>
<head>
 <title>Print Document Siswa</title>
 <link href="sal.css" type="text/css" rel="stylesheet"/>
</head>
<body>  
     <table border="1" width="80%" style="border-collapse:collapse;" align="center">  
         <tr class="tableheader"> 
<center>		 
             <th rowspan="1">NAMA SISWA</th>  
				<th>NIS</th>
				<th>TEMPAT</th>
				<th>TANGGAL LAHIR</th> 
				<th>JENIS KELAMIN</th>
				<th>STATUS</th>
				<th>KELAS</th>
            </tr>  
            <?php while($hasil = mysql_fetch_assoc($data)){ 
			?>  
            <tr id="rowHover">  
             <td width="25%" align="center"><?php echo $hasil['nama_siswa']; ?></td>  
                <td width="25%" align="center"><?php echo $hasil['nis']; ?></td>  
				<td width="25%" align="center"><?php echo $hasil['tempat_lahir']; ?></td> 
				<td width="25%" align="center"><?php echo $hasil['tanggal_lahir']; ?></td> 
                <td width="25%" align="center"><?php echo $hasil['jekel']; ?></td> 
				<td width="25%" align="center"><?php echo $hasil['status']; ?></td>  
				<td width="25%" align="center"><?php echo $hasil['kelas']; ?></td> 

            </tr>  
            <?php } ?>  
        </table>  
          <br>

 <table border="0"  width="160%" align="center" >
 <tr>
   <td ><th colspan="20">
     Padang,...,........20...
		  <br><br><br><br><br>
		  
		  
		<br>     PIMPINAN </br>
		<br> Mardawati, M.Pd </br>
	<br>NIP. 196111151993032003 </br>
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