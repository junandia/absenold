<?php
include '../koneksi.php';
include 'cs.php';
$nis = $_GET['nis'];
$tanggal = date('Y-m-d');
date_default_timezone_set('Asia/Jakarta');
$jam = date('H:i:s');

if ($jam < "07:15:00") {
	$status = "LOLOS";
}
else {
	$status = "TERLAMBAT";
}

$a = mysql_query("SELECT * FROM absen WHERE nis_siswa = '$nis' AND tanggal = '$tanggal'") or die(mysql_error());
$b = mysql_num_rows($a);

if ($b > 1) {
	echo "<script>alert('Anda Sudah Absen !'); window.location = 'logout.php';</script>";
}
else {

	$c = mysql_query("INSERT INTO absen (nis_siswa,tanggal,jam,status) VALUES ('$nis','$tanggal','$jam','$status')") or die(mysql_error());
	if ($c) {
	echo "<script>alert('Selamat Belajar !'); window.location = 'logout.php';</script>";
	}

}

?>