<?php
$query = mysql_query("SELECT * FROM siswa ORDER BY nis ASC");
$cek = mysql_num_rows($query);
?>
<table width="80%" align="center" border="1">
	<tr>
		<td colspan="8"><input type="button" onclick="window.location='index.php?page=stambah';" value="Tambah Siswa"></td>
	</tr>
	<tr>
		<th>NIS</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Foto</th>
		<th>Aksi</th>
	</tr>
	<?php
		if ($cek == 0) {
			?>
			<tr>
				<td colspan="8">Belum ada data ...</td>
			</tr>
		<?php
		}
		else {
		while ($row = mysql_fetch_array($query)) {
			# code...
	?>
	<tr>
		<td><?php echo $row['nis']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['tgllhr']; ?></td>
		<td><?php echo $row['alamat']; ?></td>
		<td><?php echo $row['kelas']; ?></td>
		<td><?php echo $row['jurusan']; ?></td>
		<td><img src="../foto/siswa/<?php echo $row['foto']; ?>" width="100" height="100"></td>
		<td><input type="button" value="Ubah" onclick="window.location='index.php?page=subah&nis=<?php echo $row['nis']; ?>'"><input type="button" value="hapus" onclick="window.location='shapus.php?nis=<?php echo $row['nis']; ?>'"></td>
	</tr>
	<?php 
	} 
	}
	?>	
</table>