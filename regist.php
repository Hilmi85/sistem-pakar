<?php
include 'connection.php';

//CEK FUNGSI REGIST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Password disimpan dalam bentuk plain text

    // Query untuk menyimpan data
    $query = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        // Registrasi berhasil, arahkan ke halaman login.php
        header("Location: login.php");
        exit(); // Pastikan tidak ada kode yang dieksekusi setelah redirect
    } else {
        echo "<div class='text-center text-red-500 mb-4'>Registrasi gagal: " . mysqli_error($conn) . "</div>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tes Kesehatan Mental Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gradient-to-r from-blue-50 to-purple-50">
    <!-- Navbar Kecil -->
    <nav class="bg-white shadow-md py-2">
        <div class="container mx-auto flex justify-between items-center py-2 px-4">
            <a href="index.php" class="text-gray-700 hover:text-pink-500 transition duration-300">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    </nav>

    <main class="py-8">
        <div class="container mx-auto px-4">
            <!-- Form Registrasi -->
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto mb-5">
                <h1 class="text-3xl font-bold text-gray-900 mb-3 text-center">Registrasi Akun</h1>
                <hr class="mb-6">
                
                <!-- Form Registrasi -->
                <form action="regist.php" method="POST" class="mb-5 mt-5">
                    <!-- Nama Lengkap -->
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent text-black" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent text-black" placeholder="Masukkan email" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent text-black" placeholder="Masukkan password" required>
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="mb-6">
                        <label for="confirm_password" class="block text-gray-700 font-semibold mb-2">Konfirmasi Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent text-black" placeholder="Konfirmasi password" required>
                    </div>

                    <!-- Tombol Registrasi -->
                    <button type="submit" class="w-full bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600 transition duration-300 font-semibold">Daftar</button>
                </form>

                <!-- Link ke Halaman Login -->
                <p class="text-center text-gray-700 mt-4">Sudah punya akun? <a href="login.php" class="text-pink-500 hover:underline font-semibold">Login di sini</a></p>
            </div>
        </div>
    </main>
</body>
</html>