<?php
// variabel berdasarkan masing-masing paramater
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
// melampirkan file koneksi
include "TugasKoneksi.php";
echo "<br>";
// kueri sql update data
$sql = "UPDATE buku_tamu SET NAMA='Anjay GAMINX' WHERE ID_BT=1";
// kondisi jika var sql berhasil
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diperbarui";
}
// jika gagal
else {
    echo "Galat saat proses perbaruan data " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
