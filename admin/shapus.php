<?php
include '../koneksi.php';
$nis = $_GET['nis'];

$query = mysql_query("DELETE FROM `absenew`.`siswa` WHERE `siswa`.`nis` = $nis") or die(mysql_error());
if ($query) {
	# code...
	echo "<script>alert('Data Berhasil Dihapus !'); window.location='index.php?page=siswa';</script>";
}

?>