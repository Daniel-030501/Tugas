<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>

	<h2>Edit Data</h2><br>
	<a href="../login/admin.php">KEMBALI</a><br><br>
	<h3>EDIT DATA MOBIL</h3>
	<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from data_mobl where id='$id'");
	while($d = mysqli_fetch_array($data)) {
	 ?>
	 <form method="post" action="update.php">
	 	<table>
	 		<tr>
	 			<td>Nama</td>
	 			<td>
	 				<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
	 				<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Tipe</td>
	 			<td>
	 				<input type="text" name="tipe" value="<?php echo $d['tipe']; ?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Merk</td>
	 			<td>
	 				<input type="text" name="merk" value="<?php echo $d['merk']; ?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>No Polisi</td>
	 			<td>
	 				<input type="text" name="no_polisi" value="<?php echo $d['no_polisi']; ?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Ketersediaan</td>
	 			<td>
	 				<input type="text" name="ketersediaan" value="<?php echo $d['ketersediaan']; ?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Gambar</td>
	 			<td>
	 				<input type="file" name="gambar" value="<?php echo $d['gambar']; ?>">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td></td>
	 			<td><input type="submit" value="SIMPAN"></td>
	 		</tr>
	 	</table>
	 	
	 </form>
	 <?php  
	}
	?>
</body>
</html>