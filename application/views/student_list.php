<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        h2 {
            text-align: center;
        }

        .button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .table-button {
            background-color: blue;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 1px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>DATA STI202102177</h2>

    <div class="button-container">
        <?php if ($this->session->userdata('logged_in')) : ?>
            <a href="<?php echo site_url('students/create'); ?>" class="button">Tambah</a>
            <a href="<?php echo site_url('login/logout'); ?>" class="button">Logout</a>
        <?php else : ?>
            <a href="<?php echo site_url('login'); ?>" class="button">Login</a>
        <?php endif; ?>

    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Status</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($tb_mahasiswa)) : ?>
            <?php foreach ($tb_mahasiswa as $tb_mahasiswa) : ?>
                <tr>
                    <td><?php echo $tb_mahasiswa['id']; ?></td>
                    <td><?php echo $tb_mahasiswa['nim']; ?></td>
                    <td><?php echo $tb_mahasiswa['nama']; ?></td>
                    <td><?php echo $tb_mahasiswa['alamat']; ?></td>
                    <td><?php echo $tb_mahasiswa['email']; ?></td>
                    <td><?php echo $tb_mahasiswa['tempat_lahir']; ?></td>
                    <td><?php echo $tb_mahasiswa['tgl_lahir']; ?></td>
                    <td><?php echo $tb_mahasiswa['agama']; ?></td>
                    <td><?php echo $tb_mahasiswa['status']; ?></td>
                    <td><img src="<?php echo $tb_mahasiswa['foto']; ?>" alt="Foto" width="50"></td>
                    <td>
                        <a href="<?php echo site_url('students/edit/' . $tb_mahasiswa['id']); ?>" class="button">Edit</a>
                        <a href="<?php echo site_url('students/delete/' . $tb_mahasiswa['id']); ?>" class="button">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="11">No data found</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>