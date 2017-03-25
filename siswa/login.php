<?php
include '../koneksi.php';

if (isset($_POST['login'])) {
    # code...

$nis = $_POST['nis'];
$tgllhr = $_POST['tgllhr'];
$nis = mysql_real_escape_string($nis);
$tgllhr = mysql_real_escape_string($tgllhr);
$pilih = mysql_query("SELECT * FROM siswa WHERE nis = '$nis' AND tgllhr = '$tgllhr'");
$cek = mysql_num_rows($pilih);
if ($cek==1) {

    session_start();
    $_SESSION['nis'] = $nis;
    $_SESSION['tgllhr'] = $tgllhr;


    echo "<script>alert('Anda Berhasil Login'); window.location='index.php?page=absen';</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AbsensiNew - Login</title>
</head>
<body>
    <br /><br /><br /><br /><br />
    <form action="login.php" method="POST">
    <table align="center">
            <tr>
            <td rowspan="5"><img src="../admin/pasim.png" width="150" height="150"></td>
        </tr>
        <tr bgcolor="black">
            <td colspan="4" align="center"><font color="white">AbseNew V.2 Login</font></td>
        </tr>
        <tr>
            <td>Nis</td>
            <td>:</td>
            <td><input type="text" name="nis" required></td>
        </tr>
        <tr>
            <td>Tanggal Lahir (YYYY-MM-DD)</td>
            <td>:</td>
            <td><input type="password" name="tgllhr" required></td>
        </tr>
        <tr bgcolor="black">
            <td colspan="4" align="center"><input type="submit" value="Login" name="login"></td>
        </tr>
    </table>
    </form>
</body>
</html>