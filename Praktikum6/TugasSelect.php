<?php
// variabel berdasarkan masing-masing paramater
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// melampirkan file koneksi
include "TugasKoneksi.php";
echo "<br>";

// kueri menampilkan data
$sql = "SELECT ID_BT, NAMA, EMAIL, ISI FROM buku_tamu";

// Menampilkan data
$result = mysqli_query($conn, $sql);

// kondisi jika berhasil dibuat
if (mysqli_num_rows($result) > 0) {
    //output data di baris
    while ($row = mysqli_fetch_assoc($result)) {
        echo "NO : " . $row["ID_BT"] . "<br> NAMA : " . $row["NAMA"] . "<br> EMAIL : " . $row["EMAIL"] . "<br> ISI : " . $row["ISI"] . "<br> ======================================= <br>";
    }
}
// jika gagal
else {
    echo "0 result";
}
mysqli_close($conn);
