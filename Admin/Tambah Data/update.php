<?php 
include 'koneksi.php';


$id = $_POST['id'];
$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$merk = $_POST['merk'];
$no_polisi = $_POST['no_polisi'];
$ketersediaan = $_POST['ketersediaan'];
$gambar = $_POST['gambar'];

mysqli_query($koneksi,"update data_mobl set nama='$nama', tipe='$tipe', merk='$merk', no_polisi='$no_polisi', ketersediaan='$ketersediaan', gambar='$gambar' where id=$id");

header("location:../login/admin.php");

 ?>