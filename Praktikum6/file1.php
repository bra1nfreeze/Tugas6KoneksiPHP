<html>

<head>
    <title>Koneksi Database MySQL</title>
</head>

<body>
    <!--Paragraf Header1-->
    <h1>Demo Koneksi database MySQL</h1>
    <!--Membuat koneksi ke mySQL-->
    <?php
    // var con =  mysql konek (nama host, usernama mysql, password mysql dan database)
    $con = mysqli_connect("localhost", "root", "", "mydb");

    // Kondisi jika terjadi error
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL" . mysqli_connect_error();
        exit();
    }
    ?>
</body>

</html>