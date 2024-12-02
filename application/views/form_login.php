<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Ujian Masuk SMA CERIA</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style-ujian-1.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h3>Login Ujian Masuk SMA CERIA</h3>
        </div>
        <div class="card-body">
            <?php echo form_open('ujiancontroller/proses_login'); ?>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="form-group">
                <label for="nomor_pendaftaran">Nomor Pendaftaran</label>
                <input type="text" class="form-control" id="nomor_pendaftaran" name="nomor_pendaftaran" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</body>
</html>