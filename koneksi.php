<?php
$host = "localhost";
$user = "root";
$pass = ""; // Password default XAMPP biasanya kosong
$db   = "db_bukutamu";

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>