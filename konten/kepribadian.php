<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>Tes Kepribadian</title>
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
<body style="background-color: rgba(0, 149, 255, 0.2);">
    <div class="container m-5">
    <h2 class="text-center display-6 fw-bold text-dark mb-5">Tes Kepribadian: Temukan Sifat dan Kepribadian Anda!</h2>
        <form id="personalityTestForm">
            <div class="mb-3">
                <label class="form-label">1. Bagaimana Anda biasanya mengatasi situasi stres? (Referensi: Psikologi Stres)</label>
                <select class="form-select" name="q1" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Berbicara dengan teman atau keluarga</option>
                    <option value="2">Meditasi atau yoga</option>
                    <option value="3">Menyibukkan diri dengan pekerjaan atau aktivitas</option>
                    <option value="4">Menghindari dan tidak memikirkan masalah</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">2. Apa yang paling Anda nikmati saat waktu luang? (Referensi: Psikologi Waktu Luang)</label>
                <select class="form-select" name="q2" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Membaca buku atau menonton film</option>
                    <option value="2">Berolahraga atau melakukan aktivitas fisik</option>
                    <option value="3">Berinteraksi sosial dengan teman</option>
                    <option value="4">Menghabiskan waktu sendirian</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">3. Bagaimana Anda menggambarkan diri Anda? (Referensi: Psikologi Self-Perception)</label>
                <select class="form-select" name="q3" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Ramah dan mudah bergaul</option>
                    <option value="2">Pemikir dan analitis</option>
                    <option value="3">Kreatif dan artistik</option>
                    <option value="4">Tenang dan introspektif</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">4. Apa yang membuat Anda paling bahagia? (Referensi: Psikologi Kebahagiaan)</label>
                <select class="form-select" name="q4" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Mencapai tujuan dan pencapaian</option>
                    <option value="2">Menghabiskan waktu dengan orang yang dicintai</option>
                    <option value="3">Menjelajahi dan belajar hal baru</option>
                    <option value="4">Menikmati momen tenang dan relaksasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">5. Bagaimana Anda biasanya membuat keputusan penting? (Referensi: Psikologi Pengambilan Keputusan)</label>
                <select class="form-select" name="q5" required>
                    <option ```html
                    <option value="">Pilih jawaban</option>
                    <option value="1">Berdiskusi dengan orang lain dan mencari nasihat</option>
                    <option value="2">Mengandalkan insting atau firasat</option>
                    <option value="3">Menganalisis pro dan kontra secara mendalam</option>
                    <option value="4">Mengikuti rencana yang sudah ditetapkan sebelumnya</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">6. Siapa yang Anda pandang sebagai panutan dalam hidup Anda? (Referensi: Psikologi Panutan)</label>
                <select class="form-select" name="q6" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Anggota keluarga</option>
                    <option value="2">Seorang teman dekat</option>
                    <option value="3">Tokoh masyarakat atau publik figur</option>
                    <option value="4">Tidak memiliki panutan spesifik</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">7. Bagaimana Anda merespon konflik dengan orang lain? (Referensi: Psikologi Konflik)</label>
                <select class="form-select" name="q7" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Mencari solusi damai dan kompromi</option>
                    <option value="2">Menghindari konflik sebisa mungkin</option>
                    <option value="3">Mengungkapkan perasaan secara langsung</option>
                    <option value="4">Menganalisis situasi secara rasional dan logis</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">8. Apa yang biasanya Anda lakukan ketika menghadapi kegagalan? (Referensi: Psikologi Resiliensi)</label>
                <select class="form-select" name="q8" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Belajar dari kesalahan dan mencoba lagi</option>
                    <option value="2">Merasa terpuruk dan membutuhkan waktu untuk pulih</option>
                    <option value="3">Meminta dukungan dari orang terdekat</option>
                    <option value="4">Mencari solusi alternatif atau jalan lain</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">9. Bagaimana Anda biasanya menyelesaikan tugas atau proyek? (Referensi: Psikologi Produktivitas)</label>
                <select class="form-select" name="q9" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Membagi tugas menjadi bagian kecil dan menyelesaikannya satu per satu</option>
                    <option value="2">Menyelesaikan semuanya sekaligus dalam satu waktu</option>
                    <option value="3">Mencari bantuan atau kolaborasi dengan orang lain</option>
                    <option value="4">Menyusun jadwal dan mengikuti rencana dengan ketat</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">10. Apa yang paling Anda hargai dalam hubungan dengan orang lain? (Referensi: Psikologi Hubungan Sosial)</label>
                <select class="form-select" name="q10" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Kepercayaan dan kesetiaan</option>
                    <option value="2">Kejujuran dan keterbukaan</option>
                    <option value="3">Dukungan emosional dan perhatian</option>
                    <option value="4">Rasa hormat dan penghargaan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">Keluar</a>
        </form>

        <div id="result" class="result mt-4">
            <div class="card p-4 shadow-sm">
                <h2 class="text-primary text-center">Hasil Tes Kepribadian Anda</h2>
                <p id="resultText" class="text-center"></p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('personalityTestForm').onsubmit = function(event) {
            event.preventDefault(); // Mencegah reload halaman

            // Mengambil nilai dari form
            const q1 = parseInt(this.q1.value);
            const q2 = parseInt(this.q2.value);
            const q3 = parseInt(this.q3.value);
            const q4 = parseInt(this.q4.value);
            const q5 = parseInt(this.q5.value);
            const q6 = parseInt(this.q6.value);
            const q7 = parseInt(this.q7.value);
            const q8 = parseInt(this.q8.value);
            const q9 = parseInt(this.q9.value);
            const q10 = parseInt(this.q10.value);

            // Menghitung total skor
            const total_score = q1 + q2 + q3 + q4 + q5 + q6 + q7 + q8 + q9 + q10;

            // Menentukan hasil berdasarkan total skor
            let resultText = '';
            if (total_score <= 20) {
                resultText = 'Anda cenderung introvert dan lebih suka menghabiskan waktu sendiri atau dengan beberapa orang terdekat.';
            } else if (total_score <= 40) {
                resultText = 'Anda memiliki keseimbangan antara sifat introvert dan ekstrovert. Anda bisa menikmati waktu sendiri maupun bersama orang lain.';
            } else {
                resultText = 'Anda cenderung ekstrovert dan menikmati berada di sekitar banyak orang serta mencoba hal-hal baru.';
            }

            // Menampilkan hasil
            document.getElementById('resultText').innerText = resultText;
            document.getElementById('result').style.display = 'block'; // Menampilkan div hasil
        };
    </script>
    <div class="footer">
        <p class="text-center">&copy; 2025 Tes Kepribadian. All rights reserved.</p>
    </div>
</body>
</html>