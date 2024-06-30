<!DOCTYPE html>
<html>
<head>
    <title>PPDB SMAN Ceria</title>
</head>
<body>
    <h1>Daftar Calon Siswa</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Nilai</th>
        </tr>
        <?php foreach ($siswa as $s): ?>
        <tr>
            <td><?php echo $s['nama']; ?></td>
            <td><?php echo $s['nilai']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?php echo site_url('ppdb/seleksi'); ?>">Lihat Hasil Seleksi</a>
</body>
</html>
