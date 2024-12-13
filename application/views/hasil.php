<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Seleksi PPDB SMA</title>
  <link rel="stylesheet" href="<?= base_url('assets/css2/hasilSeleksi.css'); ?>">

  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css2/hasilSeleksi.css'); ?>"> -->
</head>

<body>
  <div class="container">
    <h1>Hasil Seleksi PPDB SMA</h1>
    <p>Nomor Pendaftaran: <?= isset($nomor_pendaftaran) ? $nomor_pendaftaran : 'Nomor Pendaftaran tidak tersedia'; ?>
    </p>
    <p>Nama Lengkap: <?= isset($nama_peserta) ? $nama_peserta : 'Nama Peserta tidak tersedia'; ?></p>
    <p>Tanggal Lahir: <?= isset($tanggal_lahir) ? $tanggal_lahir : 'Tanggal Lahir tidak tersedia'; ?></p>
    <p>Hasil Seleksi Anda: <?= isset($hasil_seleksi) ? $hasil_seleksi : 'Belum ada hasil seleksi'; ?></p>
    <a href="<?= site_url('seleksi'); ?>">Kembali</a>
  </div>
</body>

</html>