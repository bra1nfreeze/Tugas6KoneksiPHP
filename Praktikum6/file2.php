<?php
// variabel berdasarkan masing-masing paramater
$servername = "localhost";
$username = "root";
$password = "";
// variabel koneksi untuk mempersingkat
$conn = mysqli_connect($servername, $username, $password);
// kondisi koneksi jika tidak sesuai dengan var conn
if (!$conn) {
	die("Connection Failed : " . mysqli_connect_error());
}
// var syntax untuk membuat database
$sql = "CREATE DATABASE  mydb";
// kondisi untuk membuat query dari var sql
if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
	// jika gagal akan terdapat perintah
} else {
	echo "Error creating database : " . mysqli_error($conn);
}
// menutup koneksi
mysqli_close($conn);
