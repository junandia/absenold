<?php
include 'csession.php';
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Absenew Administrator</title>
	<link rel="stylesheet" type="text/css" href="admin.css">

</head>
<body>
	<header>
	<table>
		<tr>
			<td><img src="pasim.png" width="70" height="70"></td>
			<td>AbseNew Administrator</td>
		</tr>
	</table>
	</header>
	<nav>
		<ul>
			<?php include 'header.php'; ?>
		</ul>
	</nav>
	<aside>Selamat datang !</aside> <section id="isi"><?php include 'page.php'; ?></section>

	<footer>AbseNew 2015</footer>
</body>
</html>