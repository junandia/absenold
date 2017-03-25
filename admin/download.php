
<title>Rekap</title>
<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=absenkelas.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");

//disini script laporan anda
include '../koneksi.php';
$tawal = $_GET['tawal'];
$takhir = $_GET['takhir']
?>
<table width="80%">
    <thead>
        <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $query = mysql_query("SELECT absen.*, siswa.* FROM absen, siswa WHERE absen.nis_siswa=siswa.nis AND tanggal >= '$tawal' AND tanggal <= '$takhir' ORDER BY nis ASC") or die(mysql_error());
    $cek = mysql_num_rows($query);
    if ($cek == 0) {
        echo "<td colspan='5'>Belum ada / Tidakk ditemukan</td>";
    }
    else {
        while($data = mysql_fetch_array($query)){
    ?>
    <tr align="center">
        <td><?php echo $data['nis']; ?></td>
        <td><?php echo $data['nama'];?></td>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['jam']; ?></td>
        <td>
            <?php
                if ($data['status'] == "TERLAMBAT") {
                    echo "<font color='RED'>TERLAMBAT</font>";
                }
                else {
                    echo "<font color='green'>LOLOS</font>";
                }
            ?>
        </td>
    </tr>
    <?php
    }
    }
    ?>
    
    </tbody>
</table>