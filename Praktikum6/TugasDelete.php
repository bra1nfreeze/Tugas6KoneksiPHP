<?php
// variabel berdasarkan masing-masing paramater
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// melampirkan file koneksi
include "TugasKoneksi.php";
echo "<br>";
// kueri sql hapus data
$sql = "DELETE FROM buku_tamu WHERE ID_BT=3";
// kondisi jika var sql berhasil
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
}
// jika gagal
else {
    echo "Galat saat proses hapus data " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
