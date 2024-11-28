<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Ujian Masuk SMA CERIA</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style-ujian-1.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h3>Hasil Ujian Masuk SMA CERIA</h3>
        </div>
        <div class="card-body text-center">
            <p>Terima kasih telah menyelesaikan ujian! Berikut adalah hasil Anda:</p>
            <h5>Nama Lengkap: <?= $nama_lengkap ?></h5>
            <h5>No Pendaftaran: <?= $nomor_pendaftaran ?></h5>
            <h4>Nilai Anda: <?= number_format($skor_murni, 2) ?></h4> <!-- Tampilkan skor murni dengan 2 angka desimal -->
            <a href="<?= base_url() ?>" class="btn btn-primary mt-3">Kembali ke Halaman Utama</a>
        </div>
    </div>
</div>
</body>
</html>