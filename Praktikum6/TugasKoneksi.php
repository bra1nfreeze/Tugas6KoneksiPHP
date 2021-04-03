<?php
// variabel berdasarkan masing-masing paramater
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// variabel koneksi untuk mempersingkat
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo "Koneksi ke Database berhasil";

// kondisi koneksi jika tidak sesuai dengan var conn
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
