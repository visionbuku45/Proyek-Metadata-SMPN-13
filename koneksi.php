<?php
$host = "localhost";
$user = "root";     -- Default user XAMPP
$pass = "";         -- Default password XAMPP kosong
$db   = "db_perpus_smpn13"; -- Nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);


if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>