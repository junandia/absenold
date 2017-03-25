<?php
date_default_timezone_set('Asia/Jakarta');
$nis = $_SESSION['nis'];
$tanggal = date('d M Y');
$query = mysql_query("SELECT * FROM curhat WHERE nis_siswa = '$nis'");
$query2 = mysql_fetch_array($query);
?>
<table class="table striped hovered cell-hovered border bordered" width="50%">
	<tr>
		<td colspan="2"><button class="button primary" onclick="window.location = 'index.php?page=tcurhat'">Tambah</button> Curhat Bersama Wali Kelas</td>
	</tr>
	<tr>
		<th>Judul Curhatan</th>
		<th>Aksi</th>
	</tr>
	
</table>