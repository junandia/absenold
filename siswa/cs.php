<?php
session_start();
if (!isset($_SESSION['nis'])) {
	echo "<script>alert('Anda Belum Login !'); window.location='login.php';</script>";
	exit;
}
?>