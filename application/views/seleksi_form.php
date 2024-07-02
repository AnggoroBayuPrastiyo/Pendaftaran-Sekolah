  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sekolah Ceria</title>
    <!-- ini ada sedikit perubahan di bagian link -->
    <link rel="stylesheet" href="<?= base_url('assets/css/hasilSeleksi.css'); ?>">
    <!-- ini ada sedikit perubahan di bagian link -->
  </head>

  <body>
    <script src="script.js"></script>

    <div class="logo">
      <h3>SMAN Ceria</h3>
    </div>
    <div class="container">

      <div class="contentPengumuman">
        <!-- kita ngoding nya di sini di class main, nanti jangan lupa page di link ke hfref nya-->
        <h1>Pengumuman Hasil Seleksi</h1>
        <!--<p>saat ini anda belom bisa melihat pengumuman hasi seleksi</p>-->
        <form id="seleksi-form" action="<?php echo site_url('seleksi/process_form'); ?>" method="post">
          <div class="form-group">
            <label for="nomor_pendaftaran">Nomor Pendaftaran:</label>
            <input type="text" id="nomor_pendaftaran" name="nomor_pendaftaran" required>
          </div>
          <div class="form-group">
            <label for="nama_peserta">Nama Lengkap:</label>
            <input type="text" id="nama_peserta" name="nama_peserta" required>
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="text" id="tanggal_lahir" name="tanggal_lahir" required>
          </div>
      </div>
      <button type="submit">Lihat Hasil</button>
      </form>
    </div>
    </div>
  </body>

  </html>