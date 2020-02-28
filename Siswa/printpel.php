<br>
<br>
<center><b>LAPORAN DATA JADWAL PELAJARAN<br>SMP NEGERI 31 PADANG</b></center><br>

<?php
include "./Config/koneksi.php";
 $data = mysql_query("select * from matpel");
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
             <th rowspan="1">kode_matpel</th>  
				<th>nama_matpel</th>
				<th>jam_matpel</th>
				<th>NIP</th> 
				<th>nama_guru</th>
            </tr>  
            <?php while($hasil = mysql_fetch_assoc($datakode_matpel)){ 
			?>  
            <tr id="rowHover">  
             <td width="3%" align="center"><?php echo $hasil['kode_matpel']; ?></td>  
                <td width="20%" align="center"><?php echo $hasil['nama_matpel']; ?></td>  
				<td width="19%" align="center"><?php echo $hasil['jam_matpel']; ?></td> 
                <td width="8%" align="center"><?php echo $hasil['NIP']; ?></td>  
				<td width="20%" align="center"><?php echo $hasil['nama_guru']; ?></td>  
            </tr>  
            <?php } ?>  
        </table>  
          <br>

 <table border="0"  width="160%" align="center" >
 <tr>
   <td ><th colspan="20">
     Padang,...,........20...
		  <br><br><br><br><br>
		  
		  
		  PIMPINAN
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