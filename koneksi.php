<?php
// Konfigurasi koneksi database
$host = 'localhost'; // Host database (biasanya localhost)
$username = 'root';  // Username database
$password = '';      // Password database (kosong jika default pada XAMPP)
$database = 'hms'; // Nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika koneksi berhasil
// echo "Koneksi berhasil ke database: " . $database;
?>
