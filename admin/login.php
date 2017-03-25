<?php
include '../koneksi.php';

if (isset($_POST['login'])) {
	# code...

$uadmin = $_POST['uadmin'];
$padmin = md5($_POST['padmin']);
$uadmin = mysql_real_escape_string($uadmin);
$padmin = mysql_real_escape_string($padmin);
$pilih = mysql_query("SELECT * FROM admin WHERE username = '$uadmin' AND password = '$padmin'");
$row = mysql_fetch_array($pilih);
$level = $row['level'];
$cek = mysql_num_rows($pilih);
if ($cek==1) {

	session_start();
	$_SESSION['uadmin'] = $uadmin;
	$_SESSION['padmin'] = $padmin;
	$_SESSION['level'] = $level;

	echo "<script>alert('Anda Berhasil Login'); window.location='index.php?page=home';</script>";
}
else {
	echo "<script>alert('Username / Password Salah !'); window.location='login.php';</script>";
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
			<td rowspan="5"><img src="pasim.png" width="150" height="150"></td>
		</tr>
		<tr bgcolor="black">
			<td colspan="4" align="center"><font color="white">AbseNew V.2 Administrator Login</font></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="uadmin" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="padmin" required></td>
		</tr>
		<tr bgcolor="black">
			<td colspan="4" align="center"><input type="submit" value="Login" name="login"></td>
		</tr>
	</table>
	</form>
</body>
</html>