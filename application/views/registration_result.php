<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Pendaftaran</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css2/kartu.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Kartu Pendaftaran</h1>
        <div class="form-group">
            <label>Nomor Pendaftaran:</label>
            <p><?php echo $nomor_pendaftaran; ?></p>
        </div>

        <div class="form-group">
            <label>Nama Peserta:</label>
            <p><?php echo $nama_peserta; ?></p>
        </div>

        <div class="form-group">
            <label>Tempat Lahir:</label>
            <p><?php echo $tempat_lahir; ?></p>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <p><?php echo $tanggal_lahir; ?></p>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <p><?php echo $jenis_kelamin == 'lk' ? 'Laki-laki' : 'Perempuan'; ?></p>
        </div>

        <div class="form-group">
            <label>Nomor Akta Kelahiran:</label>
            <p><?php echo $nomor_akta; ?></p>
        </div>

        <div class="form-group">
            <label>NIK:</label>
            <p><?php echo $nik; ?></p>
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <p><?php echo $alamat; ?></p>
        </div>

        <div class="form-group">
            <label>Nama Wali:</label>
            <p><?php echo $nama_wali; ?></p>
        </div>

        <div class="form-group">
            <label>Nomor Handphone:</label>
            <p><?php echo $nomor_hp; ?></p>
        </div>

        <div class="form-group">
            <label>Pilihan Sekolah:</label>
            <p><?php echo $pilihan_sekolah; ?></p>
        </div>

        <button onclick="window.print()">Print Kartu Pendaftaran</button>
    </div>
</body>
</html>