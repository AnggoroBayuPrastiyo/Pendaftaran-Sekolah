<!DOCTYPE html>
<html>
<head>
    <title>Tambah Calon Siswa</title>
</head>
<body>
    <h1>Tambah Calon Siswa</h1>
    <form action="<?php echo site_url('ppdb/simpan'); ?>" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br>
        <label>Nilai:</label><br>
        <input type="text" name="nilai"><br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
