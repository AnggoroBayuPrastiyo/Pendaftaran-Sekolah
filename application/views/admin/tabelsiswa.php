<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Registered Users</h1>
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nomor Pendaftaran</th>
              <th>Nama Peserta</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Nomor Akta</th>
              <th>NIK</th>
              <th>Alamat</th>
              <th>Nama Wali</th>
              <th>Nomor HP</th>
              <th>Ijazah</th>
              <th>Kartu Keluarga</th>
              <th>Akta Kelahiran</th>
              <th>KTP</th>
              <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($registrations)): ?>
            <?php foreach ($registrations as $registration): ?>
            <tr>
              <td>
                <?php echo isset($registration['nomor_pendaftaran']) ? htmlspecialchars($registration['nomor_pendaftaran']) : 'N/A'; ?>
              </td>
              <td>
                <?php echo isset($registration['nama_peserta']) ? htmlspecialchars($registration['nama_peserta']) : 'N/A'; ?>
              </td>
              <td>
                <?php echo isset($registration['tempat_lahir']) ? htmlspecialchars($registration['tempat_lahir']) : 'N/A'; ?>
              </td>
              <td>
                <?php echo isset($registration['tanggal_lahir']) ? htmlspecialchars($registration['tanggal_lahir']) : 'N/A'; ?>
              </td>
              <td>
                <?php echo isset($registration['jenis_kelamin']) ? htmlspecialchars($registration['jenis_kelamin']) : 'N/A'; ?>
              </td>
              <td>
                <?php echo isset($registration['nomor_akta']) ? htmlspecialchars($registration['nomor_akta']) : 'N/A'; ?>
              </td>
              <td><?php echo isset($registration['nik']) ? htmlspecialchars($registration['nik']) : 'N/A'; ?></td>
              <td><?php echo isset($registration['alamat']) ? htmlspecialchars($registration['alamat']) : 'N/A'; ?></td>
              <td>
                <?php echo isset($registration['nama_wali']) ? htmlspecialchars($registration['nama_wali']) : 'N/A'; ?>
              </td>
              <td><?php echo isset($registration['nomor_hp']) ? htmlspecialchars($registration['nomor_hp']) : 'N/A'; ?>
              </td>
              <td>
                <?php if (!empty($registration['ijazah']) && file_exists(FCPATH . 'uploads/' . $registration['ijazah'])): ?>
                <a href="<?php echo base_url('uploads/' . $registration['ijazah']); ?>" download>Download</a>
                <?php else: ?>
                <span>File tidak ditemukan</span>
                <?php endif; ?>
              </td>
              <td>
                <?php if (!empty($registration['kk']) && file_exists(FCPATH . 'uploads/' . $registration['kk'])): ?>
                <a href="<?php echo base_url('uploads/' . $registration['kk']); ?>" download>Download</a>
                <?php else: ?>
                <span>File tidak ditemukan</span>
                <?php endif; ?>
              </td>
              <td>
                <?php if (!empty($registration['akte']) && file_exists(FCPATH . 'uploads/' . $registration['akte'])): ?>
                <a href="<?php echo base_url('uploads/' . $registration['akte']); ?>" download>Download</a>
                <?php else: ?>
                <span>File tidak ditemukan</span>
                <?php endif; ?>
              </td>
              <td>
                <?php if (!empty($registration['ktp']) && file_exists(FCPATH . 'uploads/' . $registration['ktp'])): ?>
                <a href="<?php echo base_url('uploads/' . $registration['ktp']); ?>" download>Download</a>
                <?php else: ?>
                <span>File tidak ditemukan</span>
                <?php endif; ?>
              </td>
              <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
              <td colspan="14">Tidak ada data yang ditemukan.</td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>