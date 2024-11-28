<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan Ujian Masuk SMA CERIA</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style-ujian-1.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h3 style="color: #000;">Panduan Ujian Masuk SMA CERIA</h3>
        </div>
        <div class="card-body">
            <p>Selamat datang, <?= $nama_lengkap ?> (Nomor Pendaftaran: <?= $nomor_pendaftaran ?>), di ujian masuk SMA CERIA. Silakan baca petunjuk di bawah ini sebelum memulai ujian:</p>
            <ul>
                <li>Waktu ujian adalah 60 menit.</li>
                <li>Setiap soal memiliki satu jawaban benar.</li>
                <li>Jangan menutup atau refresh halaman selama ujian berlangsung.</li>
            </ul>
            <div class="text-center mt-4">
                <a href="<?= base_url('ujian/mulai') ?>" class="btn btn-primary">Mulai Ujian</a>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?= base_url('assets/js/script-1.js') ?>"></script>
</html>