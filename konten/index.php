<?php
include '../connection.php';
include '../function.php'; // File yang berisi fungsi-fungsi session

// Cek apakah pengguna sudah login
startSession();
if (!getSession('user_id')) {
    header("Location: ../login.php");
    exit();
}

// Tombol logout
if (isset($_GET['logout'])) {
    logout(); // Fungsi ini akan mengarahkan ke index.php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sistem Informasi</title>
    <style>
        body {
            background-color: #f7f7f7; /* Warna body yang lebih cerah */
            font-family: 'Poppins', sans-serif;
        }
        .bg-navy {
            background-color: #3498db; /* Warna navbar yang ceria */
        }
        .bg-footer {
            background-color: #2c3e50; /* Warna footer yang lebih gelap untuk kontras */
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            height: 100%;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }
        .btn-primary {
            background-color: #3498db;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }
        .btn-danger {
            background-color: #e74c3c;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 500;
        }
        .btn-danger:hover {
            background-color: #c0392b;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .footer {
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-navy mb-5 shadow-sm">
        <div class="container-fluid">
            <h4 class="text-white mb-0">Selamat datang, hilmi!</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- Kosongkan jika tidak ada item tambahan -->
                    </li>
                </ul>
            </div>
            <!-- Tombol Logout dengan warna danger -->
            <button class="btn btn-danger" onclick="window.location.href='?logout=true'">Logout</button>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container text-center mt-5 mb-5 flex-grow-1">
        <div class="card-container">
            <div class="card h-100 shadow-sm" ```html
            <div class="card h-100 shadow-sm" onclick="window.location.href='kepribadian.php'">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-primary">Tes Kepribadian</h5>
                    <p class="card-text text-secondary">Lihat dan lakukan tes kepribadian Anda.</p>
                </div>
            </div>
            <div class="card h-100 shadow-sm" onclick="window.location.href='iq.php'">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-success">Tes IQ</h5>
                    <p class="card-text text-secondary">Lihat dan lakukan tes IQ Anda.</p>
                </div>
            </div>
            <div class="card h-100 shadow-sm" onclick="window.location.href='minatbakat.php'">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-warning">Tes Minat dan Bakat</h5>
                    <p class="card-text text-secondary">Lihat dan lakukan tes minat dan bakat Anda.</p>
                </div>
            </div>
            <div class="card h-100 shadow-sm" onclick="window.location.href='kesehatanmental.php'">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-info">Tes Kesehatan Mental</h5>
                    <p class="card-text text-secondary">Lihat dan lakukan tes kesehatan mental Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include '../layouts/footer.php'; ?>
</body>
</html>