<?php

session_start();

if (!isset($_SESSION['uadmin'])) {
	# code...
	echo "<script>alert('Anda Belum Login !'); window.location='login.php';</script>";
}

?>