<?php
include '../koneksi.php';
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgllhr = $_POST['tgllhr'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

if (isset($_FILES['fotob'])) {
	$foto = $_FILES['fotob']['name'];
	move_uploaded_file($_FILES['fotob']['tmp_name'], "../foto/siswa/".$_FILES['fotob']['name']);

}
else {
		$foto = $_POST['x'];

}

$query = mysql_query("UPDATE `absenew`.`siswa` SET `nis` = '$nis', `nama` = '$nama', `tgllhr` = '$tgllhr', `alamat` = '$alamat', `kelas` = '$kelas', `jurusan` = '$jurusan', `foto` = '$foto' WHERE `siswa`.`nis` = $nis") or die(mysql_error());
if ($query) {
	echo "<script>alert('Data Siswa Berhasil Di Ubah !'); window.location='index.php?page=siswa';</script>";
}
?>