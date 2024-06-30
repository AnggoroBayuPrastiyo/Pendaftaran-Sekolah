<!DOCTYPE html>
<html>
<head>
    <title>Hasil Seleksi PPDB SMAN Ceria</title>
</head>
<body>
    <h1>Hasil Seleksi PPDB</h1>
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
</body>
</html>
