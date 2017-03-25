<form action="gtproses.php" enctype="multipart/form-data" method="POST">
	<table width="100%">
		<tr>
			<td>Nis</td>
			<td>:</td>
			<td><input type="number" name="nis" placeholder="nis" required></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="nama" name="nama" placeholder="Nama" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir (YYYY-MM-DD)</td>
			<td>:</td>
			<td><input type="date" name="tgllhr" placeholder="YYYY-MM-DD" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea cols="40" rows="10" name="alamat"></textarea></td>
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
			<td><input type="file" name="foto" value="foto" required></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" value="Tambah"></td>
		</tr>
	</table>
</form>