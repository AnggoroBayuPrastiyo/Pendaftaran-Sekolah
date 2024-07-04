<!-- application/views/menu/index.php -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Registered Users</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive"> <!-- Tambahkan wrapper table-responsive -->
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
                        <?php foreach ($registrations as $registration): ?>
                        <tr>
                            <td><?php echo $registration['nomor_pendaftaran']; ?></td>
                            <td><?php echo $registration['nama_peserta']; ?></td>
                            <td><?php echo $registration['tempat_lahir']; ?></td>
                            <td><?php echo $registration['tanggal_lahir']; ?></td>
                            <td><?php echo $registration['jenis_kelamin']; ?></td>
                            <td><?php echo $registration['nomor_akta']; ?></td>
                            <td><?php echo $registration['nik']; ?></td>
                            <td><?php echo $registration['alamat']; ?></td>
                            <td><?php echo $registration['nama_wali']; ?></td>
                            <td><?php echo $registration['nomor_hp']; ?></td>
                            <td><a href="<?php echo base_url('uploads/' . $registration['ijazah']); ?>" download>Download</a></td>
                            <td><a href="<?php echo base_url('uploads/' . $registration['kk']); ?>" download>Download</a></td>
                            <td><a href="<?php echo base_url('uploads/' . $registration['akte']); ?>" download>Download</a></td>
                            <td><a href="<?php echo base_url('uploads/' . $registration['ktp']); ?>" download>Download</a></td>
   
                            <!-- Tambahkan kolom lain sesuai kebutuhan -->
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
