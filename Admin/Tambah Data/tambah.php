<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
</head>
<body>

	<h2>Tambah Data</h2><br>
	<a href="../login/admin.php">KEMBALI</a><br><br>
	<h3>Tambah Data</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Tipe</td>
				<td><input type="text" name="tipe"></td>
			</tr>
			<tr>
				<td>Merk</td>
				<td><input type="text" name="merk"></td>
			</tr>
			<tr>
				<td>No Polisi</td>
				<td><input type="text" name="no_polisi"></td>
			</tr>
			<tr>
				<td>Ketersediaan</td>
				<td><input type="text" name="ketersediaan"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><input type="file" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>