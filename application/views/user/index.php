<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Profil</title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css2/nama.css'); ?>">
  <!-- Tambahkan stylesheet lainnya atau script di sini -->
</head>

<body>
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>

    <div class="row">
      <div class="col-lg-6">
        <?= $this->session->flashdata('message')?>
      </div>
    </div>


    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?= $user['name']?></h5>
            <p class="card-text">
              <?= $user['email']?>
            </p>
            <p class="card-text"><small class="text-body-secondary">Member Since
                <?= date('d F Y', $user['date_created'])?></small></p>
          </div>

          <a href="<?= base_url('registration') ?>">Link ke registration</a>
          <a href="<?= base_url('seleksi') ?>">Link ke seleksi</a>

          <!-- Tabel Nama Kelompok dan Anggota -->
          <div class="card mt-4">
            <div class="card-header">
              <h5 class="card-title">Kelompok 5</h5>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nama Kelompok</th>
                    <th>NIM</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Anggoro Bayu Prastiyo</td>
                    <td>12220014</td>
                  </tr>
                  <tr>
                    <td>Rizky Permata Putra</td>
                    <td>12220053</td>
                  </tr>
                  <tr>
                    <td>Siti Mayang Sari</td>
                    <td>12220070</td>
                  </tr>
                  <tr>
                    <td>Putri Khodijah</td>
                    <td>12220109</td>
                  </tr>
                  <tr>
                    <td>Fiski Aliyanita</td>
                    <td>12220118</td>
                  </tr>
                  <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

</body>

</html>