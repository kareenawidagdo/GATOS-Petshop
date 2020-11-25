<?php 
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "petshop";

	$koneksi = mysqli_connect($server, $user, $password, $database) OR DIE("Koneksi Gagal.");
?>