<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Dokumen</title>
</head>
<body>
    <div class="container">
        <h1>Unggah Dokumen</h1>
        <?php echo form_open_multipart('upload/do_upload'); ?>
        
        <label for="ijazah">Upload Ijazah</label><br>
        <input type="file" name="userfiles[]" size="20" id="ijazah"/><br /><br />

        <label for="kk">Upload Kartu Keluarga</label><br>
        <input type="file" name="userfiles[]" size="20" id="kk"/><br /><br />

        <label for="akte">Upload Akta Kelahiran</label><br>
        <input type="file" name="userfiles[]" size="20" id="akte"/><br /><br />

        <label for="ktp">Upload KTP OrangTua/Wali</label><br>
        <input type="file" name="userfiles[]" size="20" id="ktp"/><br /><br />

        <input type="submit" value="mengunggah" />

        </form>
        <?php if (isset($error)) echo $error; ?>
    </div>
</body>
</html>
