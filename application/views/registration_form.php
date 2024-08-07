<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolah Ceria</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css2/registerForm.css'); ?>">
</head>

<body>
  <div class="logo">

  </div>
  <div class="container">
    <div class="main">
      <h1 class="title">Kartu Pendaftaran</h1>

      <form id="registration-form" action="<?php echo site_url('registration/process_form'); ?>" method="post">
        <div class="form-group">
          <label for="nomor-pendaftaran">Nomor Pendaftaran:</label>
          <input type="text" id="nomor-pendaftaran" name="nomor_pendaftaran" readonly>
        </div>

        <div class="form-group">
          <label for="nama_peserta">Nama Peserta:</label>
          <input type="text" id="nama_peserta" name="nama_peserta" required>
        </div>

        <div class="form-group">
          <label for="tempat_lahir">Tempat Lahir:</label>
          <input type="text" id="tempat_lahir" name="tempat_lahir" required>
        </div>

        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir:</label>
          <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin:</label>
          <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option disabled selected>Pilih Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>

        <div class="form-group">
          <label for="nomor_akta">Nomor Akta Kelahiran:</label>
          <input type="number" id="nomor_akta" name="nomor_akta" required>
        </div>

        <div class="form-group">
          <label for="nik">NIK:</label>
          <input type="number" id="nik" name="nik" required>
        </div>

        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" id="alamat" name="alamat" required>
        </div>

        <div class="form-group">
          <label for="nama_wali">Nama Wali:</label>
          <input type="text" id="nama_wali" name="nama_wali" required>
        </div>

        <div class="form-group">
          <label for="nomor_hp">Nomor Handphone:</label>
          <input type="number" id="nomor_hp" name="nomor_hp" required>
        </div>

        <div class="form-group">
          <label for="pilih_jurusan">Pilih Jurusan:</label>
          <select id="pilih_jurusan" name="pilih_jurusan" required>
            <option disabled selected>Pilih Jurusan</option>
            <option value="IPA">IPA</option>
            <option value="IPS">IPS</option>
          </select>
        </div>

        <div class="print-btn">
          <button type="submit">Submit</button>
        </div>
      </form>

      <h2>Informasi Penting</h2>
      <ul>
        <li>Kartu Pendaftaran ini wajib dibawa dan ditunjukkan saat pelaksanaan pendaftaran ulang di sekolah.</li>
        <li>Membawa kartu/bukti identitas diri asli.</li>
        <li>Membawa seluruh dokumen asli yang diupload.</li>
      </ul>
    </div>
  </div>
</body>

</html>