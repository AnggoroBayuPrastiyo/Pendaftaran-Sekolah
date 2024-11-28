<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Ujian Masuk SMA CERIA</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style-ujian-1.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h3 style="color: #000; display: inline;">Soal Ujian Masuk SMA CERIA</h3>
            <!-- Timer di sebelah kanan judul -->
            <span id="timer" style="font-weight: bold; color: red; float: right;">Waktu Tersisa: </span>
        </div>
        <div class="card-body">
            <form id="quizForm" action="<?= base_url('ujian/submit') ?>" method="post">
                <?php foreach($soal as $index => $item): ?>
                    <div class="form-group">
                        <label><?= ($index + 1) . ". " . $item['pertanyaan'] ?></label>
                        <div>
                            <input type="radio" name="jawaban[<?= $item['id'] ?>]" value="A"> <?= $item['opsi_a'] ?><br>
                            <input type="radio" name="jawaban[<?= $item['id'] ?>]" value="B"> <?= $item['opsi_b'] ?><br>
                            <input type="radio" name="jawaban[<?= $item['id'] ?>]" value="C"> <?= $item['opsi_c'] ?><br>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success" onclick="return checkAllAnswered();">Kirim Jawaban</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Menangkap waktu akhir dari server (misalnya end_time di-set di controller)
    let endTime = <?= $end_time * 1000 ?>; // dalam milidetik

    // Fungsi untuk menjalankan timer
    function startTimer() {
        let timerDisplay = document.getElementById("timer");

        let timer = setInterval(function () {
            let now = new Date().getTime();
            let distance = endTime - now;

            if (distance <= 0) {
                clearInterval(timer);
                timerDisplay.textContent = "Waktu habis!";
                alert("Waktu habis! Jawaban Anda akan dikirimkan otomatis.");
                document.getElementById("quizForm").submit();
                return;
            }

            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            timerDisplay.textContent = `Waktu Tersisa: ${minutes}m ${seconds}s`;
        }, 1000);
    }

    // Memulai timer saat halaman soal dibuka
    startTimer();

    // Cek semua soal sudah diisi sebelum submit
    function checkAllAnswered() {
        let unanswered = false;
        const questions = new Set(); // Menyimpan semua nama soal

        // Tambahkan semua pertanyaan ke set
        document.querySelectorAll("input[type=radio]").forEach(function (input) {
            questions.add(input.name);
        });

        // Periksa apakah setiap pertanyaan memiliki jawaban
        questions.forEach(function (questionName) {
            if (!document.querySelector(`input[name="${questionName}"]:checked`)) {
                unanswered = true;
            }
        });

        if (unanswered) {
            alert("Mohon isi semua soal sebelum mengirim.");
            return false; // Gagal kirim form
        }
        return true; // Lanjutkan pengiriman form
    }
</script>

<script src="<?= base_url('assets/js/script-ujian-1.js') ?>"></script>
</body>
</html>