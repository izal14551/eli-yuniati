<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Student</title>
</head>

<body>
    <h2>Tambah Student</h2>
    <form method="post" action="<?php echo site_url('students/store'); ?>">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required>
        <br>
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" required>
        <br>
        <label for="agama">Agama:</label>
        <input type="text" id="agama" name="agama" required>
        <br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required>
        <br>
        <label for="foto">Foto (URL):</label>
        <?php echo form_open_multipart('upload/do_upload'); ?>
        <input type="file" id="foto" name="foto" size="20" />
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>