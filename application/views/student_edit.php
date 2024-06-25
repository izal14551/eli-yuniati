<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>

<body>
    <h2>Edit Student</h2>
    <form method="post" action="<?php echo site_url('students/update/' . $tb_mahasiswa['id']); ?>">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?php echo $tb_mahasiswa['nim']; ?>" required>
        <br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $tb_mahasiswa['nama']; ?>" required>
        <br>
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required><?php echo $tb_mahasiswa['alamat']; ?></textarea>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $tb_mahasiswa['email']; ?>">
        <br>
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo $tb_mahasiswa['tempat_lahir']; ?>" required>
        <br>
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo $tb_mahasiswa['tgl_lahir']; ?>" required>
        <br>
        <label for="agama">Agama:</label>
        <input type="text" id="agama" name="agama" value="<?php echo $tb_mahasiswa['agama']; ?>" required>
        <br>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="<?php echo $tb_mahasiswa['status']; ?>" required>
        <br>
        <label for="foto">Foto (URL):</label>
        <input type="text" id="foto" name="foto" value="<?php echo $tb_mahasiswa['foto']; ?>">
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>