<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kartu Pendaftaran Sekolah">
    <meta name="keywords" content="kartu pendaftaran, sekolah, pendaftaran">
    <title>Kartu Pendaftaran</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css2/print.css'); ?>">
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kartu Pendaftaran</h1>

        <div class="form-group">
            <label>Nomor Pendaftaran:</label>
            <p><?php echo isset($nomor_pendaftaran) ? htmlspecialchars($nomor_pendaftaran) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Nama Peserta:</label>
            <p><?php echo isset($nama_peserta) ? htmlspecialchars($nama_peserta) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Tempat Lahir:</label>
            <p><?php echo isset($tempat_lahir) ? htmlspecialchars($tempat_lahir) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <p><?php echo isset($tanggal_lahir) ? htmlspecialchars($tanggal_lahir) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <p><?php echo isset($jenis_kelamin) ? ($jenis_kelamin == 'Laki-Laki' ? 'Laki-laki' : 'Perempuan') : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Nomor Akta Kelahiran:</label>
            <p><?php echo isset($nomor_akta) ? htmlspecialchars($nomor_akta) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>NIK:</label>
            <p><?php echo isset($nik) ? htmlspecialchars($nik) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <p><?php echo isset($alamat) ? htmlspecialchars($alamat) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Nama Wali:</label>
            <p><?php echo isset($nama_wali) ? htmlspecialchars($nama_wali) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Nomor Ponsel:</label>
            <p><?php echo isset($nomor_hp) ? htmlspecialchars($nomor_hp) : ''; ?></p>
        </div>

        <div class="form-group">
            <label>Pilih Jurusan:</label>
            <p><?php echo isset($pilih_jurusan) ? ($pilih_jurusan == 'IPA' ? 'IPA' : 'IPS') : ''; ?></p>
        </div>

        <div class="no-print">
            <button onclick="printAndRedirect()">Cetak Kartu Pendaftaran</button>
        </div>
    </div>

    <script>
        function printAndRedirect() {
            window.print();
            setTimeout(function () {
                window.location.href = '<?php echo base_url('user'); ?>';
            }, 1000);
        }
    </script>
</body>
</html>
