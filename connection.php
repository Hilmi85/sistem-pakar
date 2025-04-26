<?php
// File: connection.php

// Konfigurasi database
$host = 'localhost'; // Host database
$username = 'root'; // Username database
$password = ''; // Password database
$database = 'db_pakar'; // Nama database

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Jika koneksi berhasil, tampilkan pesan (opsional)
// echo "Koneksi ke database berhasil!";
?>