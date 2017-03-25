<?php
include '../koneksi.php';
include 'cs.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AbseNew V.2</title>
	<link href="../style/css/metro.css" rel="stylesheet">
    <script src="../style/js/jquery.js"></script>
    <script src="../style/js/metro.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/style.js"></script>
</head>
<body>
	<table>
		<tr>
			<td><img src="../admin/pasim.png" width="100" height="100"></td>
			<td><font size="8"><b>AbseNew V.2</b></font></td>
		</tr>
	</table>
    <ul class="h-menu bg-black">
        <li><a href="index.php?page=absen">Absen</a></li>
        <li><a href="index.php?page=curhat">Curhat</a></li>        
        <li><a href="logout.php">Keluar</a></li>
    </ul>

<?php include 'page.php'; ?>
</body>
</html>