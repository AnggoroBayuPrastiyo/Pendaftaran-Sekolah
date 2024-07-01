<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Seleksi PPDB SMA</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css2/hasilSeleksi.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Hasil Seleksi PPDB SMA</h1>
        <p>Nama Lengkap: <?= isset($nama_peserta); ?></p>
        <p>Tanggal Lahir: <?= isset($tanggal_lahir); ?></p>
        <p>Hasil Seleksi Anda: <?= isset($hasil_seleksi); ?></p>
        <a href="<?= site_url('seleksi'); ?>">Kembali</a>
    </div>
</body>
</html>
