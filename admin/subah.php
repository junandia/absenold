<?php
$query = mysql_query("SELECT * FROM siswa WHERE nis = $_GET[nis]");
$row = mysql_fetch_array($query);
?>

<form action="suproses.php" enctype="multipart/form-data" method="POST">
	<table width="75%">
		<tr>
			<td>Nis</td>
			<td>:</td>
			<td><input type="number" name="nis" value="<?php echo $row['nis'] ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>" placeholder="Nama" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir (YYYY-MM-DD)</td>
			<td>:</td>
			<td><input type="date" name="tgllhr" value="<?php echo $row['tgllhr']; ?>" placeholder="YYYY-MM-DD" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea cols="40" rows="10" name="alamat"><?php echo $row['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><select name="kelas">
				<option value="X">X</option>
				<option value="XI">XI</option>
				<option value="XII">XII</option>
			</select></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>
			<select name="jurusan">
				<option value="APK">Administrasi Perkantoran</option>
				<option value="AKT">Akuntansi</option>
				<option value="ANM">Anisasi</option>
				<option value="BROAD">Broadcasting</option>
				<option value="RPL">Rekayasa Perangkat Lunak</option>
				<option value="TKJ">Teknik Komputer Jaringan</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<input type="hidden" name="x" value="<?php echo $row['foto'] ?>" readonly>
			<td><input type="file" name="fotob"></td>
		</tr>
		<tr>
			<td colspan="7"><input type="submit" value="Ubah"></td>
		</tr>
	</table>
</form>