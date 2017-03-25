<?php
include '../koneksi.php';
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$tgllhr = $_POST['tgllhr'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$foto = $_FILES['foto']['name'];

$query = mysql_query("INSERT INTO siswa VALUE('$nis','$nama','$tgllhr','$alamat','$kelas','$jurusan','$foto')") or die(mysql_error());
if ($query) {
	move_uploaded_file($_FILES['foto']['tmp_name'], "../foto/siswa/".$_FILES['foto']['name']);
	echo "<script>alert('Data Siswa Berhasil Ditambahkan !'); window.location='index.php?page=siswa';</script>";
}
?>