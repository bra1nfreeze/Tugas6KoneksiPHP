<html>

<body>
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

    // var syntax SQL untuk memanggil atribut dari tabel liga
    $sql = "SELECT kode, negara, champion FROM liga";

    // var result untuk mempersingkat var koneksi dan sql
    $result = mysqli_query($conn, $sql);

    // kondisi jika berhasil dibuat
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "kode:" . $row["kode"] . " - Negara : " . $row["negara"] . "
            " . $row["champion"] . "<br>";
        }
    }
    // jika gagal
    else {
        echo "0 results";
    }

    // menutup koneksi
    mysqli_close($conn);
    ?>
</body>

</html>