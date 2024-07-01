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
        <h3>Sekolah Ceria 😄</h3>
      </div>
      <div class="container">
        <nav>
          <h5>Menu</h5>
          <ul>
      <!-- ini ada sedikit perubahan di bagian link -->
                <li><a href="<?= site_url('dashboard'); ?>">Beranda</a></li>
                <li><a href="<?= site_url('informasi'); ?>">Informasi Pendaftaran</a></li>
                <li><a href="<?= site_url('formulir'); ?>">Isi Formulir Pendaftaran</a></li>
                <li><a href="<?= site_url('kartu'); ?>">Cetak Kartu Pendaftaran</a></li>
                <li><a href="<?= site_url('pengumuman'); ?>">Pengumuman Hasil</a></li>
                <li><a href="<?= site_url('kontak'); ?>">Kontak Kami</a></li>
      <!-- ini ada sedikit perubahan di bagian link -->
            </ul>
        </nav>
        <div class="contentPengumuman">
          <!-- kita ngoding nya di sini di class main, nanti jangan lupa page di link ke hfref nya-->
          <h1>Pengumuman Hasil Seleksi</h1>
          <!--<p>saat ini anda belom bisa melihat pengumuman hasi seleksi</p>-->
          <form id="seleksi-form" action="<?php echo site_url('seleksi/process_form'); ?>" method="post">
                <div class="form-group">
                    <label for="nomor-pendaftaran">Nomor Pendaftaran:</label>
                    <input type="text" id="nomor-pendaftaran" name="nomor-pendaftaran" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" readonly>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tempat Lahir:</label>
                    <input type="text" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                </div>
                    <button type="submit">Lihat Hasil</button>
          </form>
        </div>
      </div>
    </body>
  </html>
