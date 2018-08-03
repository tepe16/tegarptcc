<?php
$host = "192.168.100.48:7306"; // server
$user = "221196"; // username
$pass = ""; // password
$database = "datamahasiswa"; // nama database
 
$koneksi = mysqli_connect($host, $user, $pass, $database); // menggunakan mysqli_connect
 
if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
}
?>
