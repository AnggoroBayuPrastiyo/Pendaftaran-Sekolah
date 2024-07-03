<!DOCTYPE html>
<html>
<head>
    <title>Admin - Registrations</title>
</head>
<body>

<h1>Data Registrasi Peserta</h1>

<table border="1">
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
            <th>Pilihan Jurusan</th>
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
            <td><?php echo $registration['pilih_jurusan']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
