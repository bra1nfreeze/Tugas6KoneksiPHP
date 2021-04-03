<?php
// variabel berdasarkan masing-masing paramater
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// variabel koneksi untuk mempersingkat
$conn = mysqli_connect($servername, $username, $password, $dbname);

// kondisi koneksi jika tidak sesuai dengan var conn
if (!$conn) {
	die("Connection failed : " . mysqli_connect_error());
}

// var syntax SQL untuk membuat tabel liga dengan atribut dan isi
$sql = "INSERT INTO 
liga (kode, negara, champion) VALUES 
('Jer','Jerman','4'),
('Spa','Spanyol','3'),
('Eng','English','3')";

// kondisi jika berhasil dibuat
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
}
// jika gagal
else {
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}
// menutup koneksi
mysqli_close($conn);
