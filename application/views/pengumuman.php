  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Sekolah Cerita</title>
      <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
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
                <li><a href="<?= site_url('dashboard'); ?>">Beranda</a></li>
                <li><a href="<?= site_url('informasi'); ?>">Informasi Pendaftaran</a></li>
                <li><a href="<?= site_url('formulir'); ?>">Isi Formulir Pendaftaran</a></li>
                <li><a href="<?= site_url('kartu'); ?>">Cetak Kartu Pendaftaran</a></li>
                <li><a href="<?= site_url('pengumuman'); ?>">Pengumuman Hasil</a></li>
                <li><a href="<?= site_url('kontak'); ?>">Kontak Kami</a></li>
            </ul>
        </nav>
        <div class="contentPengumuman">
          <!-- kita ngoding nya di sini di class main, nanti jangan lupa page di link ke hfref nya-->
          <h1>Pengumuman Hasil Seleksi</h1>
          <p>saat ini anda belom bisa melihat pengumuman hasi seleksi</p>
        </div>
      </div>
    </body>
  </html>
