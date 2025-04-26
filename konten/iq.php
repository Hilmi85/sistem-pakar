<html>
<head>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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
<body style="background-color: rgba(0, 255, 81, 0.2);">
    <div class="container m-5">
        <h2 class="text-center display-6 fw-bold text-dark mb-5">Tes IQ: Temukan Kemampuan Kognitif Anda!</h2>
        <form id="iqTestForm" class="mb-3">
            <div class="mb-3">
                <label for="question1" class="form-label">1. Apa yang lebih berat?</label>
                <select class="form-select" id="question1" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">1 kilogram kapas</option>
                    <option value="wrong">1 kilogram besi</option>
                    <option value="wrong">1 liter air</option>
                    <option value="correct">Semua beratnya sama</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question2" class="form-label">2. Urutan dari yang terkecil hingga terbesar:</label>
                <select class="form-select" id="question2" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">1, 0, -1, 2</option>
                    <option value="correct">-1, 0, 1, 2</option>
                    <option value="wrong">0, -1, 2, 1</option>
                    <option value="wrong">2, 1, 0, -1</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question3" class="form-label">3. Jika 7 + 5 = 12, maka 5 + 7 = ?</label>
                <select class="form-select" id="question3" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">10</option>
                    <option value="wrong">14</option>
                    <option value="correct">12</option>
                    <option value="wrong">11</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question4" class="form-label">4. Pada pukul 3 sore, bayangan jarum panjang dan jarum pendek berada dalam sudut sebesar?</label>
                <select class="form-select" id="question4" required>
                    <option value="">Pilih jawaban</option>
                    <option value="correct">90 derajat</option>
                    <option value="wrong">180 derajat</option>
                    <option value="wrong">45 derajat</option>
                    <option value="wrong">0 derajat</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question5" class="form-label">5. Mana dari pasangan berikut yang tidak sesuai?</label>
                <select class="form-select" id="question5" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">Kucing - Meong</option>
                    <option value="wrong">Anjing - Gonggong</option>
                    <option value="wrong">Ayam - Berkokok</option>
                    <option value="correct">Sapi - Merengek</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question6" class="form-label">6. Dalam sebuah kelompok 5 anak, masing-masing mempunyai dua bola. Berapa jumlah bola dalam kelompok tersebut?</label>
                <select class="form-select" id="question6" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">5</option>
                    <option value="correct">10</option>
                    <option value="wrong">15</option>
                    <option value="wrong">20</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question7" class="form-label">7. Apa yang datang berikutnya dalam urutan ini: A, C, E, G, ?</label>
                <select class="form-select" id="question7" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">H</option>
                    <option value="correct">J</option>
                    <option value="wrong">I</option>
                    <option value="wrong">K</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question8" class="form-label">8. Berapa sisi yang dimiliki sebuah segitiga?</label>
                <select class="form-select" id="question8" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">2</option>
                    <option value="correct">3</option>
                    <option value="wrong">4</option>
                    <option value="wrong">5</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question9" class="form-label">9. Mana dari angka berikut ini yang merupakan bilangan prima?</label>
                <select class="form-select" id="question9" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">9</option>
                    <option value="wrong">15</option>
                    <option value="correct">17</option>
                    <option value="wrong">21</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="question10" class="form-label">10. Mana dari pasangan berikut yang identik?</label>
                <select class="form-select" id="question10" required>
                    <option value="">Pilih jawaban</option>
                    <option value="wrong">12321, 12312</option>
                    <option value="correct">22332, 22332</option>
                    <option value="wrong">34554, 34455</option>
                    <option value="wrong">45454, 45445</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">Keluar</a>
        </form>
        <div class="result alert alert-success" role="alert">
            <h4 class="alert-heading">Hasil Tes IQ Anda</h4>
            <p id="resultText"></p>
        </div>
    </div>
    
    <script>
        document.getElementById('iqTestForm').addEventListener('submit', function(event) {
            event.preventDefault();
            let score = 0;
            if (document.getElementById('question1').value === 'correct') score++;
            if (document.getElementById('question2').value === 'correct') score++;
            if (document.getElementById('question3').value === 'correct') score++;
            if (document.getElementById('question4').value === 'correct') score++;
            if (document.getElementById('question5').value === 'correct') score++;
            if (document.getElementById('question6').value === 'correct') score++;
            if (document.getElementById('question7').value === 'correct') score++;
            if (document.getElementById('question8').value === 'correct') score++;
            if (document.getElementById('question9').value === 'correct') score++;
            if (document.getElementById('question10').value === 'correct') score++;

            let iq = score * 10 + 100; // Simplified IQ calculation for demonstration

            // Menentukan kategori berdasarkan nilai IQ
            let category;
            if (iq >= 100 && iq <= 110) {
                category = "Rata-rata";
            } else if (iq > 110 && iq <= 120) {
                category = "Di atas rata-rata";
            } else if (iq > 120 && iq <= 130) {
                category = "Superior";
            } else if (iq > 130 && iq <= 140) {
                category = "Sangat Superior";
            } else if (iq > 140 && iq <= 200) {
                category = "Genius";
            } else {
                category = "Tidak Diketahui";
            }

            // Menampilkan hasil dan kategori
            let resultText = `Anda menjawab ${score} dari 10 pertanyaan dengan benar. IQ Anda adalah ${iq}. Kategori: ${category}.`;

            document.getElementById('resultText').innerText = resultText;
            document.querySelector('.result').style.display = 'block';
        });
    </script>
    <div class="footer">
        <p class="text-center">&copy; 2025 Tes IQ. All rights reserved.</p>
    </div>
</body>
</html>