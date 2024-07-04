<!-- Begin Page Content -->
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800">Edit Data Siswa</h1>
  <div class="row">
    <div class="col-lg-12">
      <form action="<?= base_url('admin/update_siswa'); ?>" method="post">
        <div class="form-group">
          <label for="nama_peserta">Nama Peserta</label>
          <input type="text" class="form-control" id="nama_peserta" name="nama_peserta"
            value="<?= $siswa['nama_peserta']; ?>">
        </div>
        <div class="form-group">
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
            value="<?= $siswa['tempat_lahir']; ?>">
        </div>
        <div class="form-group">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
            value="<?= $siswa['tanggal_lahir']; ?>">
        </div>
        <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->
        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
        <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->