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
      <h3>PPDB Sekolah Negeri Ceria 😄</h3>
    </div>
    <div class="container">
      <nav>
        <h5>Menu</h5>
        <ul>
          <li><a href="<?=('dashboard'); ?>">Beranda</a></li>
          <li><a href="<?=('informasi'); ?>">Informasi Pendaftaran</a></li>
          <li><a href="<?=('formulir'); ?>">Isi Formulir Pendaftaran</a></li>
          <li><a href="<?=('kartu'); ?>">Cetak Kartu Pendaftaran</a></li>
          <li><a href="<?=('pengumuman'); ?>">Pengumuman Hasil</a></li>
          <li><a href="<?=('kontak'); ?>">Kontak Kami</a></li>
        </ul>
      </nav>
      <div class="main">
        <!-- kita ngoding nya di sini di class main, nanti jangan lupa page di link ke hfref nya-->
        <h1>Informasi Pendaftaran</h1>
        <link rel="informasi pendaftaran" href="informasi.html"><br>
        <br />
        <p>
          SMA Negeri Ceria pada Tahun Pelajaran 2024/2025 menerima Peserta Didik
          Baru (PDB) dengan ketentuan sebagai berikut:
        </p>
        <br />
        <h4>1. Persyaratan Pendaftaran</h4>
        <br />
        <ol>
          <li>Usia : Calon siswa berusia minimal 16 tahun pada tanggal 1 Juli 2024.</li>
          <li>Dokumen yang diperlukan : 
            <ul>
              <li>Fotokopi Akta Kelahiran 1 Lembar</li>
              <li>Fotocopy Kartu Keluarga 1 Lembar</li>
              <li>Pasfoto terbaru ukuran 3X4 3 Lembar</li>
              <li>Surat keterangan sehat dari dokter</li>
              <li>Fotokopy KTP OrangTua/Wali</li>
              <li>Fotocopy Ijazah berlegalisir 1 Lembar</li>
            </ul>
          </li>
          </ol>
        <br />

        <h4>2. Tahapan Pendaftaran</h4>
        <ol>
          <li>Pengisian Formmulir :</li>
          <ul>
            <li>Formulir pendaftaran dapat dilakukan dari aplikasi PPDB SMAN Ceria </li>
            <li>Jam operasional : Senin - Jum'at, pukul 08.00 - 15.00 WIB </li>
          </ul>
          </ol>
        <br />

        <h4>3. Pelaksanaan Seleksi</h4>
        <br />
        <ol>
          <li>Menggunakan nilai ijazah SMP.</li>
        </ol>
        <br />

        <h4>4. Pengumuman Hasil Seleksi</h4>
        <br />
        <ul>
          <li>Hasil seleksi akan diumumkan pada tanggal 25 Juli 2024</li>
          <li>Pengumuman dapat dilihat di situs web SMA Negeri Ceria</li>
        </ul>
        <br />

        <h4>5. Daftar Ulang</h4>
        <br />
        <ul>
          <li>Calon siswa yang dinyatakan lulus seleksi wajib melakukan daftar ulang pada tanggal 28 - 30 Juli 2024.</li>
          <li>Dokumen yang dibutuhkan saat daftar ulang:
          <li>Bukti pembayaran biaya daftar ulang</li>
          <li>Surat Keterangan Lulus Seleksi</li>
        </ul>
        <br />

        <h4>6. Biaya</h4>
        <br />
        <ul>
          <li>Biaya Pendaftaran Rp. 100.000</li>
          <li>Biaya Daftar Ulang Rp. 500.000</li>
        </ul>
        <br />
      </div>
    </div>
  </body>
</html>