<?php
include 'connection.php';
include 'function.php'; // File yang berisi fungsi-fungsi session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password']; // Password dalam bentuk plain text

    // Query untuk mencari pengguna berdasarkan email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password (jika menggunakan password_hash, gunakan password_verify)
        if ($user['password'] === $password) { // Jika password plain text
            // Simpan data pengguna ke session
            setSession('user_id', $user['id']);
            setSession('user_nama', $user['nama']);
            setSession('user_email', $user['email']);

            // Redirect ke halaman index.php
            header("Location: konten/index.php");
            exit();
        } else {
            echo "<div class='text-center text-red-500 mb-4'>Password salah!</div>";
        }
    } else {
        echo "<div class='text-center text-red-500 mb-4'>Email tidak ditemukan!</div>";
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

    <main class="py-8 mt-5">
        <div class="container mx-auto px-4">
            <!-- Form Login -->
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto mb-5">
                <h1 class="text-3xl font-bold text-gray-900 mb-3 text-center">Login</h1>
                <hr class="mb-6">
                
                <!-- Form Login -->
                <form action="login.php" method="POST" class="mb-5 mt-5">
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent text-black" placeholder="Masukkan email" required>
                    </div>
                    
                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent text-black" placeholder="Masukkan password" required>
                    </div>
                    
                    <!-- Tombol Login -->
                    <button type="submit" class="w-full bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600 transition duration-300 font-semibold">Masuk</button>
                </form>
                
                <!-- Link ke Halaman Registrasi -->
                <p class="text-center text-gray-700 mt-4">Belum punya akun? <a href="regist.php" class="text-pink-500 hover:underline font-semibold">Daftar di sini</a></p>
            </div>
        </div>
    </main>
</body>
</html>