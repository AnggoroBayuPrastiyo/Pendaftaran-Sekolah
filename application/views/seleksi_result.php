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
        <div class="form-group">
            <label>Nama Lengkap:</label>
            <p><?php echo $nama; ?></p>
        </div>

        <div class="form-group">
            <label>Nilai:</label>
            <p><?php echo $nilai; ?></p>
        </div>

        <div class="form-group">
            <label>Status:</label>
            <p><?php echo $status; ?></p>
        </div>

        <button onclick="window.print()">Print Hasil Seleksi</button>
    </div>
</body>
</html>
