<?php
if (isset($_GET['page'])) {
	$hal = $_GET['page'];

	if ($hal == "home") {
		include 'home.php';
	}
	elseif ($hal == "siswa") {
		include 'siswa.php';
	}
	elseif ($hal == "stambah") {
		include 'stambah.php';
	}
	elseif ($hal == "subah") {
		include 'subah.php';
	}
	elseif ($hal == "rekap") {
		include 'rekap.php';
	}
	elseif ($hal == "curhatan") {
		include 'curhaat.php';
	}
}
?>