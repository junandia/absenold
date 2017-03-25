<?php
date_default_timezone_set('Asia/Jakarta');
$nis = $_SESSION['nis'];
$tanggal = date('Y-m-d');
$date = date('Y-m-d');
$query = mysql_query("SELECT * FROM siswa WHERE nis = '$nis'");
$query2 = mysql_fetch_array($query);
$qcek = mysql_query("SELECT * FROM absen WHERE nis_siswa='$nis' AND tanggal='$date'");
$cek = mysql_num_rows($qcek);

?>
<table class="table striped hovered cell-hovered border bordered" width="50%">
	<tr>
		<td colspan="2">Absensi <?php echo $tanggal; ?></td>
	</tr>
	<tr>
		<td>NIS</td>
		<td><?php echo $query2['nis']; ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo $query2['nama']; ?></td>
	</tr>
	<tr>
		<td>JAM</td>
		<td><?php echo date("H:i:s"); ?></td>
	</tr>
	<tr>
		<td colspan="2"><img src="../foto/siswa/<?php echo $query2['foto']; ?>" width="100" height="100"></td>
	</tr>
	<tr>
		<td colspan="2">
		<?php
			if ($cek > 1) {
				echo "Sudah Absen";
			}else{
			?>
<button onclick="window.location = 'pabsen.php?nis=<?php echo $nis; ?>'" class="button primary bg-black" >Absen</button
			<?php
			}
		?></td>
	</tr>
</table>