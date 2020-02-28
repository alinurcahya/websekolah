<?php
session_start();
?>
<br>
<br>
<center><b>LAPORAN DATA SISWA<br>SMP NEGERI 31 PADANG</b></center><br>

<?php
 include "./Config/koneksi.php";
$username=$_SESSION['siswa'];
$sqlUsername   = "select * from  siswa where Username = '$username' "; 
$queryUsername = mysql_query($sqlUsername);
$dataUsername = mysql_fetch_array($queryUsername);
?>
<html>
<head>
 <title>Print Document Siswa</title>
 <link href="sal.css" type="text/css" rel="stylesheet"/>
</head>
<body>  
     <table border="1" width="80%" style="border-collapse:collapse;" align="center">  
         <tr class="tableheader"> 
<center>	<tr>
<td>Nama Siswa</td><td>:</td><td><?php echo"$dataUsername[nama_siswa]" ?></td>
</tr>

<tr>
<td>NIS</td><td>:</td><td><?php echo"$dataUsername[nis]" ?></td>
</tr>


<tr>
<td>Tempat Lahir</td><td>:</td><td><?php echo"$dataUsername[tempat_lahir]" ?></td>
</tr>


<tr>
<td>Tanggal Lahir</td><td>:</td><td><?php echo"$dataUsername[tanggal_lahir]" ?></td>
</tr>

<tr>
<td>Jenis Kelamin</td><td>:</td><td><?php echo"$dataUsername[jekel]" ?></td>
</tr>

<tr>
<td>Status</td><td>:</td><td><?php echo"$dataUsername[status]" ?></td>
</tr>

<tr>
<td>Kelas</td><td>:</td><td><?php echo"$dataUsername[kelas]" ?></td>
</tr>

       
 <table border="0"  width="130%" align="center" >
 <tr>
   <td ><th colspan="10">
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