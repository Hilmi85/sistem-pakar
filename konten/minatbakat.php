<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>Tes Minat Bakat: Temukan Kemampuan Anda!</title>
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
<body style="background-color: rgba(208, 255, 0, 0.2);">
    <div class="container m-5">
        <h2 class="text-center display-6 fw-bold text-dark mb-5">Tes Minat Bakat: Temukan Kemampuan Anda!</h2>
        <form id="minatBakatForm">
            <div class="mb-3">
                <label class="form-label">1. Apa yang paling Anda nikmati dari aktivitas sehari-hari?</label>
                <select class="form-select" name="q1" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Membaca dan menulis</option>
                    <option value="2">Berolahraga atau kegiatan fisik</option>
                    <option value="3">Berinteraksi sosial dengan orang lain</option>
                    <option value="4">Menggunakan teknologi atau alat-alat elektronik</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">2. Jika diberi kesempatan untuk memilih pekerjaan ideal Anda, mana yang lebih menarik?</label>
                <select class="form-select" name="q2" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Penulis atau jurnalis</option>
                    <option value="2">Atlet atau pelatih</option>
                    <option value="3">Konselor atau psikolog</option>
                    <option value="4">Insinyur atau ilmuwan komputer</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">3. Aktivitas mana yang membuat Anda merasa paling puas?</label>
                <select class="form-select" name="q3" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Menghasilkan karya kreatif, seperti melukis atau menulis</option>
                    <option value="2">Menyelesaikan tugas fisik atau tantangan olahraga</option>
                    <option value="3">Membantu orang lain mengatasi masalah mereka</option>
                    <option value="4">Memecahkan masalah teknis atau matematis</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">4. Bagaimana cara Anda memanfaatkan waktu luang?</label>
                <select class="form-select" name="q4" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Membaca buku atau menulis cerita</option>
                    <option value="2">Berolahraga atau bermain olahraga</option>
                    <option value="3">Berbicara dengan teman dan keluarga</option>
                    <option value="4">Bermain video game atau eksperimen dengan perangkat keras</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">5. Bidang studi mana yang paling Anda sukai di sekolah?</label>
                <select class="form-select" name="q5" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Sastra atau bahasa</option>
                    <option value="2">Pendidikan jasmani atau kesehatan</option>
                    <option value="3">Psikologi atau ilmu sosial</option>
                    <option value="4">Matematika atau sains</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">6. Kegiatan mana yang paling menarik bagi Anda?</label>
                <select class="form-select" name="q6" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Menulis artikel atau cerita pendek</option>
                    <option value="2">Mengikuti kompetisi olahraga</option>
                    <option value="3">Mengadakan sesi konseling atau pendampingan</option>
                    <option value="4">Membuat program komputer atau eksperimen ilmiah</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">7. Apa yang lebih memotivasi Anda dalam bekerja?</label>
                <select class="form-select" name="q7" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Menciptakan sesuatu yang baru dan inovatif</option>
                    <option value="2">Menantang diri sendiri secara fisik</option>
                    <option value="3">Membantu orang lain mencapai tujuan mereka</option>
                    <option value="4">Memecahkan masalah kompleks dan teknis</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">8. Bagaimana Anda mendefinisikan sukses?</label>
                <select class="form-select" name="q8" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Menerbitkan karya atau mendapatkan pengakuan atas kreativitas</option>
                    <option value="2">Memenangkan kompetisi atau mencapai prestasi fisik</option>
                    <option value="3">Membuat perbedaan positif dalam kehidupan orang lain</option>
                    <option value="4">Menemukan solusi baru untuk masalah teknis</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">9. Mana dari berikut ini yang paling Anda nikmati?</label>
                <select class="form-select" name="q9" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Menulis esai atau puisi</option>
                    <option value="2">Berlatih untuk menjadi lebih baik dalam olahraga</option>
                    <option value="3">Mendengarkan dan memberikan nasihat kepada orang lain</option>
                    <option value="4">Menganalisis data dan menjalankan eksperimen</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">10. Jika Anda bisa berkontribusi dalam satu bidang, mana yang Anda pilih?</label>
                <select class="form-select" name="q10" required>
                    <option value="">Pilih jawaban</option>
                    <option value="1">Bidang sastra atau seni</option>
                    <option value="2">Dunia olahraga</option>
                    <option value="3">Pekerjaan sosial atau psikologi</option>
                    <option value="4">Teknologi atau sains</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="showResult()">Submit</button>
            <a href="index.php" class="btn btn-danger">Keluar</a>
        </form>
        <div id="resultCard" class="mt-4 p-3 bg-success text-white rounded" style="display: none;">
            <h4>Hasil Tes Minat Bakat Anda</h4>
            <p id="recommendationText"></p>
        </div>
        <footer class="text-center mt-5">
            <p>&copy; 2025 Tes Minat Bakat. All rights reserved.</p>
        </footer>
    </div>

    <script>
        function showResult() {
            const form = document.getElementById('minatBakatForm');
            const answers = Array.from(form.elements).filter(el => el.tagName === 'SELECT').map(el => el.value);
            let recommendation = '';

            if (answers[0] === '1' || answers[1] === '1' || answers[2] === '1' || answers[3] === '1' || answers[4] === '1' || answers[5] === '1' || answers[6] === '1' || answers[7] === '1' || answers[8] === '1' || answers[9] === '1') {
                recommendation = 'Anda memiliki minat yang kuat dalam bidang sastra atau seni. Pertimbangkan untuk mengejar karir di bidang penulisan, jurnalistik, atau seni kreatif.';
            } else if (answers[0] === '2' || answers[1] === '2' || answers[2] === '2' || answers[3] === '2' || answers[4] === '2' || answers[5] === '2' || answers[6] === '2' || answers[7] === '2' || answers[8] === '2' || answers[9] === '2') {
                recommendation = 'Anda memiliki minat yang tinggi dalam olahraga. Karir sebagai atlet atau pelatih mungkin cocok untuk Anda.';
            } else if (answers[0] === '3' || answers[1] === '3' || answers[2] === '3' || answers[3] === '3' || answers[4] === '3' || answers[5] === '3' || answers[6] === '3' || answers[7] === '3' || answers[8] === '3' || answers[9] === '3') {
                recommendation = 'Anda cenderung memiliki minat dalam pekerjaan sosial. Pertimbangkan untuk menjadi konselor atau psikolog.';
            } else if (answers[0] === '4' || answers[1] === '4' || answers[2] === '4' || answers[3] === '4' || answers[4] === '4' || answers[5] === '4' || answers[6] === '4' || answers[7] === '4' || answers[8] === '4' || answers[9] === '4') {
                recommendation = 'Anda menunjukkan ketertarikan dalam teknologi. Karir di bidang teknik atau ilmu komputer bisa menjadi pilihan yang baik.';
            } else {
                recommendation = 'Minat Anda bervariasi. Cobalah untuk mengeksplorasi berbagai bidang untuk menemukan yang paling sesuai dengan Anda.';
            }

            document.getElementById('recommendationText').innerText = recommendation;
            document.getElementById('resultCard').style.display = 'block';
        }
    </script>
</body>
</html>