<?php
	$servername = "localhost"; // nama server yaitu "localhost"
	$server_username =  "root"; // nama server pengguna yaitu "root"
	$server_password = ""; // sandi server yaitu kosong
	$dbName = "webappdb"; // nama database yaitu "sistem_pakar"

	$nama = $_POST['user'];// Variable penghubung dengan nama ($nama) antara database dengan unity (dari php) yang didefinisikan dengan nama (nama_pengguna)
	$lengkap = $_POST['user_name'];// Variable penghubung dengan nama ($lengkap) antara database dengan unity (dari php) yang didefinisikan dengan nama (nama_lengkap)
	$alamat = $_POST['user_pass'];// Variable penghubung dengan nama ($alamat) antara database dengan unity (dari php) yang didefinisikan dengan nama (alamat)
	
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);// membuat koneksi baru dengan variable yang bernama $conn
	
	$sql = "INSERT INTO user_info (name,user_name,user_pass) VALUES ('".$nama."', '".$lengkap."','".$alamat."')";// Query insert untuk memasukkan nama_pengguna,nama_lengkap, alamat, nomor, sandi dari tabel daftar dengan diambil data dari variable $nama,$lengkap,$alamat,$nomor dan $sandi
	$result = mysqli_query($conn ,$sql);// penghubung antara koneksi dengan query yang akan dieksekusi dengan variable yang bernama $result
	

?>

