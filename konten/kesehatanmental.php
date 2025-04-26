<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Tes Kesehatan Mental</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .result {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>
<body style="background-color: rgba(0, 238, 255, 0.2);">
    <div class="container m-5">
        <h2 class="text-center display-6 fw-bold text-dark mb-5">Tes Kesehatan Mental: Temukan Kesehatan Mental Anda!</h2>
        <form id="kesehatanMentalForm">
            <div class="mb-3">
                <label class="form-label">1. Bagaimana Anda menangani situasi stres yang berkepanjangan?</label>
                <select class="form-select" name="q1" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Berbicara dengan teman atau keluarga</option>
                    <option value="2">Melakukan meditasi atau yoga</option>
                    <option value="3">Menyibukkan diri dengan pekerjaan atau aktivitas</option>
                    <option value="4">Menghindari dan tidak memikirkan masalah</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">2. Seberapa sering Anda merasa cemas tanpa alasan yang jelas?</label>
                <select class="form-select" name="q2" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Tidak pernah</option>
                    <option value="2">Kadang-kadang</option>
                    <option value="3">Sering</option>
                    <option value="4">Hampir selalu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">3. Bagaimana Anda menggambarkan kualitas tidur Anda?</label>
                <select class="form-select" name="q3" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Sangat baik</option>
                    <option value="2">Baik</option>
                    <option value="3">Cukup</option>
                    <option value="4">Buruk</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">4. Apa yang biasanya Anda lakukan ketika merasa sangat sedih atau tertekan?</label>
                <select class="form-select" name="q4" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Berbicara dengan seseorang yang dapat dipercaya</option>
                    <option value="2">Berolahraga atau melakukan aktivitas fisik</option>
                    <option value="3">Menyendiri dan menarik diri dari orang lain</option>
                    <option value="4">Mengalihkan perhatian dengan menonton TV atau bermain game</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">5. Seberapa sering Anda merasa sulit untuk berkonsentrasi pada tugas-tugas sehari-hari?</label>
                <select class="form-select" name="q5" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Tidak pernah</option>
                    <option value="2">Kad ang-kadang</option>
                    <option value="3">Sering</option>
                    < ```html
                    <option value="4">Hampir selalu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">6. Bagaimana Anda menggambarkan suasana hati Anda dalam satu minggu terakhir?</label>
                <select class="form-select" name="q6" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Stabil dan positif</option>
                    <option value="2">Berubah-ubah tetapi umumnya baik</option>
                    <option value="3">Berubah-ubah dengan banyak momen negatif</option>
                    <option value="4">Lebih banyak negatif daripada positif</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">7. Seberapa sering Anda merasa lelah atau kelelahan meskipun sudah beristirahat cukup?</label>
                <select class="form-select" name="q7" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Tidak pernah</option>
                    <option value="2">Kadang-kadang</option>
                    <option value="3">Sering</option>
                    <option value="4">Hampir selalu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">8. Apakah Anda merasa terisolasi atau kesepian meskipun ada di antara orang-orang?</label>
                <select class="form-select" name="q8" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Tidak pernah</option>
                    <option value="2">Kadang-kadang</option>
                    <option value="3">Sering</option>
                    <option value="4">Hampir selalu</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">9. Bagaimana Anda menangani tekanan dari pekerjaan atau sekolah?</label>
                <select class="form-select" name="q9" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Mengatur waktu dengan baik dan istirahat cukup</option>
                    <option value="2">Mencari bantuan atau nasihat dari rekan kerja atau teman sekelas</option>
                    <option value="3">Mengabaikan dan berharap bisa menyelesaikannya nanti</option>
                    <option value="4">Menunda dan merasa cemas</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">10. Apakah Anda pernah merasa tidak berharga atau kehilangan semangat hidup dalam beberapa bulan terakhir?</label>
                <select class="form-select" name="q10" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Tidak pernah</option>
                    <option value="2">Kadang-kadang</option>
                    <option value="3">Sering</option>
                    <option value="4">Hampir selalu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
            <a href="index.php" class="btn btn-danger">Keluar</a>
        </form>
        <div class="result" id="result">
            <h3>Hasil Tes Kesehatan Mental Anda:</h3>
            <div class="card mt-3 p-3 bg-light">
                <p id="resultText"></p>
            </div>
        </div>
        <footer class="text-center mt-5">
            <p>&copy; 2025 Tes Minat Bakat. All rights reserved.</p>
        </footer>
    </div>

    <script>
        document.getElementById('kesehatanMentalForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let score = 0;
            const formData = new FormData(this);
            for (let value of formData.values()) {
                score += parseInt(value);
            }
            let recommendation = '';
            if (score <= 20) {
                recommendation = 'Anda memiliki kesehatan mental yang baik. Teruslah menjaga keseimbangan dan lakukan aktivitas positif.';
            } else if (score <= 30) {
                recommendation = 'Anda mungkin mengalami beberapa tantangan. Pertimbangkan untuk berbicara dengan seseorang yang dapat membantu.';
            } else if (score <= 40) {
                recommendation = 'Anda mungkin perlu mencari dukungan lebih lanjut. Jangan ragu untuk menghubungi profesional kesehatan mental.';
            } else {
                recommendation = 'Anda mungkin memerlukan bantuan darurat. Hubungi profesional kesehatan mental secepatnya.';
            }
            document.getElementById('resultText').innerText = `Skor Anda adalah: ${score}. ${recommendation}`;
            document.getElementById('result').style.display = 'block';
        });
    </script>
</body>
</html>