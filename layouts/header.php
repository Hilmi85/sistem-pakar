<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tes Kesehatan Mental Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        /* Efek saat tombol navbar diklik */
        .nav-link:active {
            transform: scale(0.95); /* Efek mengecil saat diklik */
        }

        /* Efek untuk tautan aktif */
        .nav-link.active {
            color: #ec4899; /* Warna pink */
            border-bottom: 2px solid #ec4899; /* Garis bawah pink */
        }
    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div class="flex items-center space-x-4">
                <img alt="NS Development logo" class="h-10" height="50" src="https://storage.googleapis.com/a1aa/image/YZtJhlN16GJYC5kE94dLsw3JoR9SU1enHaYKBfI6B041klAUA.jpg" width="50"/>
                <span class="text-blue-500 font-bold text-xl">NS Development</span>
            </div>
            <div class="flex space-x-8">
                <a class="text-gray-700 hover:text-pink-500 transition duration-300 nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php">Beranda</a>
                <a class="text-gray-700 hover:text-pink-500 transition duration-300 nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'layanan.php') ? 'active' : ''; ?>" href="layanan.php">Layanan</a>
                <a class="text-gray-700 hover:text-pink-500 transition duration-300 nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'tatacara.php') ? 'active' : ''; ?>" href="tatacara.php">Tata Cara</a>
                <a class="text-gray-700 hover:text-pink-500 transition duration-300 nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Hubungi Kami</a>
            </div>
            <a href="login.php" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600 transition duration-300">TES SEKARANG! <i class="fas fa-sign-in-alt"></i></a>
        </div>
    </nav>