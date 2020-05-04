<?php 

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from data_mobl where id='$id'");

header("location:../login/admin.php");

 ?>