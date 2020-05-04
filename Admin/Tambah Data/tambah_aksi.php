<?php 
//koneksikan database nya
include 'koneksi.php';

//menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$tipe = $_POST['tipe'];
$merk = $_POST['merk'];
$no_polisi = $_POST['no_polisi'];
$ketersediaan = $_POST['ketersediaan'];
$gambar = $_POST['gambar'];

//input data ke dalam Database
mysqli_query($koneksi,"insert into data_mobl values('','$nama','$tipe','$merk','$no_polisi','$ketersediaan','$gambar')");

//mengalihkan kembali ke halaman Index.php
header("location:../login/admin.php");


 ?>