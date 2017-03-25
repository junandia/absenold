<?php
date_default_timezone_set('Asia/Jakarta');
$nis = $_SESSION['nis'];
$tanggal = date('d M Y');
$query = mysql_query("SELECT * FROM curhat ORDER BY tanggal ASC");
$query2 = mysql_fetch_array($query);
?>
<table border="1" width="80%">
	<tr>
		<td colspan="3"><button class="button primary" onclick="window.location = 'index.php?page=tcurhat'">Tambah</button> Curhat Bersama Wali Kelas</td>
	</tr>
	<tr bgcolor="black">
		<th>Judul Curhatan</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	<tr>
		<td><?php echo $query2['judul']; ?></td>
		<td><?php echo $query2['tanggal']; ?></td>
		<td><button class="button danger" onclick="window.location='lihatc.php?nis=<?php echo $query2['nis_siswa']; ?>'">Lihat</button></td>
	</tr>
</table>