<?php
// variabel berdasarkan masing-masing paramater
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// melampirkan file koneksi
include "TugasKoneksi.php";
echo "<br>";

// kueri sql menambahkan data
$sql = "INSERT INTO 
        buku_tamu (ID_BT, NAMA, EMAIL, ISI)
        VALUES 
        ('4','Jakasa','Jakasa@gaga.com','Selamat aja dah')";

// kondisi jika var sql berhasil
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan";
}
// jika gagal
else {
    echo "Galat saat proses simpan data " . $sql . "<br>"
        . mysqli_error($conn);
}
mysqli_close($conn);
