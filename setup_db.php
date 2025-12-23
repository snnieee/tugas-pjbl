<?php
$host = "localhost";
$user = "root";
$pass = "";

// Koneksi ke MySQL tanpa database dulu
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Koneksi MySQL gagal: " . $conn->connect_error . "\nPastikan XAMPP (Apache & MySQL) sudah berjalan.");
}

// 1. Buat Database
$sql = "CREATE DATABASE IF NOT EXISTS db_bukutamu";
if ($conn->query($sql) === TRUE) {
    echo "Database 'db_bukutamu' berhasil dibuat/ditemukan.\n";
} else {
    echo "Error membuat database: " . $conn->error . "\n";
}

// Pilih database
$conn->select_db("db_bukutamu");

// 2. Buat Tabel
$sql = "CREATE TABLE IF NOT EXISTS tamu (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    pesan TEXT NOT NULL,
    waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel 'tamu' berhasil dibuat/ditemukan.\n";
} else {
    echo "Error membuat tabel: " . $conn->error . "\n";
}

$conn->close();
?>