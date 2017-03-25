<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckeditor/style.js"></script>
</head>
<body>
	<div id="kotak">
		<h1>Tambah Curhat - AbseNew V.2</h1>
		<form action="ptc.php" method="POST">
			<table>
				<tr>
					<td>Judul</td>
					<td><div class="input-control text"><input type="text" name="judul"></div></td>
				</tr>
				<tr>
					<td colspan="2"><textarea name="curhat" class="ckeditor"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" class="button warning" value="Bu Dian Curhat Dong"></td>
				</tr>

			</table>
		</form>
	</div>
</body>
</html>