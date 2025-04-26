<?php 
include 'connection.php';

// File: function.php

// Fungsi untuk memulai session
function startSession() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}

// Fungsi untuk menyimpan data ke session
function setSession($key, $value) {
    startSession(); // Pastikan session sudah dimulai
    $_SESSION[$key] = $value;
}

// Fungsi untuk mengambil data dari session
function getSession($key) {
    startSession(); // Pastikan session sudah dimulai
    return $_SESSION[$key] ?? null; // Kembalikan null jika key tidak ditemukan
}

function logout() {
    startSession(); // Pastikan session sudah dimulai

    // Hapus semua data session
    session_unset();

    // Hancurkan session
    session_destroy();

    // Redirect ke halaman index.php setelah logout
    header("Location: index.php");
    exit();
}



?>