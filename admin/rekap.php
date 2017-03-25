<table width="80%">
    <thead>
        <form method="GET" action="proses.php">
        <tr>
            <td>Tanggal Awal (YYYY-mm-dd) <input type="date" name="tawal"> sd <input type="date" name="takhir"> <input type="submit" value="Download"></td>
        </tr>
        </form>
        <tr bgcolor="black">
            <th>Nis</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $query = mysql_query("SELECT absen.*, siswa.* FROM absen, siswa WHERE absen.nis_siswa=siswa.nis ORDER BY tanggal ASC") or die(mysql_error());
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
    ?>
    </tbody>
</table>