<br>
<br>
<center><b>CETAK LAPORAN DATA JABATAN GURU<br>SMP NEGERI 31 PADANG</b></center><br>


<?php
 include "./Config/koneksi.php";
 $data = mysql_query("select * from jabatan");
?>
<html>
<head>
 <title>Print Document JABATAN</title>
 <link href="sal.css" type="text/css" rel="stylesheet"/>
</head>
<body>  
     <table border="1" width="80%" style="border-collapse:collapse;" align="center">  
         <tr class="tableheader"> 
<center>		 
             <th rowspan="1">id_jabatan</th>  
				<th>nama_jabatan</th>
				<th>NIP</th> 
				<th>nama_guru</th>
				<th>nama_matpel</th>
            </tr>  
            <?php while($hasil = mysql_fetch_assoc($data)){ 
			?>  
            <tr id="rowHover">  
             <td width="10%" align="center"><?php echo $hasil['id_jabatan']; ?></td>  
                <td width="20%" align="center"><?php echo $hasil['nama_jabatan']; ?></td>  
				<td width="20%" align="center"><?php echo $hasil['NIP']; ?></td> 
                <td width="30%" align="center"><?php echo $hasil['nama_guru']; ?></td>  
				<td width="30%" align="center"><?php echo $hasil['nama_matpel']; ?></td>  
            </tr>  
            <?php } ?>  
        </table>  
          <br>

 <table border="0"  width="160%" align="center" >
 <tr>
   <td ><th colspan="20">
     Padang,...,........20...
		  <br><br><br>
		  
		  
		 <br>    PIMPINAN </br>
		<br>  Mardawati, M.Pd </br>
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