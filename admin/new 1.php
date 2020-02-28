<?php
if(isset($_POST['simpan'])){
include"koneksi.php";
$id_brg		= $_POST['id_brg'];
$id_kat		= $_POST['id_kat'];
$nm_brg		= $_POST['nm_brg'];
$harga_beli	= $_POST['harga_beli'];
$harga_brg	= $_POST['harga_brg'];
$stock_brg	= $_POST['stock_brg'];
$satuan_brg	= $_POST['satuan_brg'];
$ket		= $_POST['ket'];

$img		= $_FILES['image']['name'];
$move 		= move_uploaded_file($_FILES['image']['tmp_name'],'images/barang/'.$img);

//Query Untuk Insert Data
if(empty($img)){
	
$sqlSimpan	="update barang set id_kat='$id_kat', nm_brg='$nm_brg', harga_beli='$harga_beli' , harga_brg='$harga_brg' , stock_brg='$stock_brg', satuan_brg= '$satuan_brg', ket='$ket' where id_brg='$id_brg'";
}

elseif(!empty($img)){
$sqlSimpan	="update barang set id_kat='$id_kat', nm_brg='$nm_brg', harga_beli='$harga_beli' , harga_brg='$harga_brg' , stock_brg='$stock_brg', satuan_brg= '$satuan_brg',img='$img', ket='$ket' where id_brg='$id_brg'";	
}
$querySimpan	= mysql_query($sqlSimpan) or die (mysql_error());



echo "<script type='text/javascript'>
      alert('Data Berhasil Di Ubah...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; daftarbrg_adm.php?'>";

}
?>