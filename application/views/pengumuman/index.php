<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        body {
            background: linear-gradient(to bottom, #f8f9fa, #e9ecef);
            font-family: 'Poppins', sans-serif;
        }
        .display-4 {
            color: #007bff;
        }
        .alert-info {
            background: rgba(0, 123, 255, 0.1);
            border: none;
            color: #007bff;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.25rem;
        }
        .card-text {
            color: #6c757d;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #a71d2a;
            border-color: #a71d2a;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <!-- Informasi Tentang Sekolah -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">📢 Pengumuman Seleksi</h1>
        <p class="lead text-muted">Sekolah Menengah Pertama Harapan Bangsa</p>
        <div class="alert alert-info" role="alert">
            <strong>Visi:</strong> Membangun generasi unggul yang berakhlak mulia.<br>
            <strong>Misi:</strong> Memberikan pendidikan berkualitas dengan berlandaskan nilai-nilai kejujuran dan kreativitas.
        </div>
        <p>
            <strong>Alamat:</strong> Jl. Merdeka No. 123, Jakarta, Indonesia<br>
            <strong>Telepon:</strong> (021) 123-4567<br>
            <strong>Email:</strong> <a href="mailto:info@harapanbangsa.sch.id">info@harapanbangsa.sch.id</a>
        </p>
    </div>

    <!-- Daftar Pengumuman -->
    <div class="row">
        <?php foreach ($pengumuman as $p): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <i class="bi bi-megaphone"></i> <?= $p['judul'] ?>
                        </h5>
                        <p class="card-text text-truncate" style="max-height: 3.5em; overflow: hidden;">
                            <?= $p['konten'] ?>
                        </p>
                        <small class="text-muted d-block">Tanggal: <?= $p['tanggal'] ?></small>
                        <small class="text-muted">Kategori: <?= $p['kategori'] ?></small>
                        <div class="mt-3">
                            <a href="<?= site_url('pengumuman/detail/'.$p['id']) ?>" class="btn btn-primary btn-sm">
                                Lihat Detail
                            </a>
                            <a href="<?= site_url('pengumuman/hapus/'.$p['id']) ?>" class="btn btn-danger btn-sm">
                                Hapus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Footer -->
<footer>
    &copy; 2024 Sekolah Menengah Pertama Harapan Bangsa. All rights reserved.
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


    <!-- Daftar Pengumuman
    <div class="row">
        <?php foreach ($pengumuman as $p): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <i class="bi bi-megaphone"></i> <?= $p['judul'] ?>
                        </h5>
                        <p class="card-text text-truncate" style="max-height: 3.5em; overflow: hidden;">
                            <?= $p['konten'] ?>
                        </p>
                        <small class="text-muted d-block">Tanggal: <?= $p['tanggal'] ?></small>
                        <small class="text-muted">Kategori: <?= $p['kategori'] ?></small>
                        <div class="mt-3">
                            <a href="<?= site_url('pengumuman/detail/'.$p['id']) ?>" class="btn btn-primary btn-sm">
                                Lihat Detail
                            </a>
                            <a href="<?= site_url('pengumuman/hapus/'.$p['id']) ?>" class="btn btn-danger btn-sm">
                                Hapus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div> -->

    