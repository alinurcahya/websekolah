<?php
session_start();
?>
<link rel="stylesheet" media="screen" href="css/jquery.dataTables.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>
<body>
<table  class="display" align="center" border="2" cellspacing="0" width="70%">
<center><h2>DATA SISWA SMP NEGERI 31 PADANG</h2></center>
<hr></hr>
<thead>
<?php
//Koneksi Ke server Database
include "./Config/koneksi.php";
$username=$_SESSION['siswa'];
$sqlUsername   = "select * from  siswa where Username = '$username' "; 
$queryUsername = mysql_query($sqlUsername);
$dataUsername = mysql_fetch_array($queryUsername);
?>
<tr>
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


</thead>

