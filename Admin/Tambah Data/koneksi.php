<?php 
$koneksi = mysqli_connect("localhost" , "root" , "" , "rental_db");

//check koneksi
if(mysqli_connect_errno()){
		echo "koneksi Database Gagal : " . mysql_connect_error();
}


 ?>