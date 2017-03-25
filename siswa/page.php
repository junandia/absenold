<?php
if (isset($_GET['page'])) {
	$hal = $_GET['page'];

	if ($hal == "absen") {
		include 'absen.php';
	}
	elseif ($hal == "curhat") {
		include 'curhat.php';
	}
	elseif ($hal == "tcurhat") {
		include 'tambahc.php';
	}

}
?>