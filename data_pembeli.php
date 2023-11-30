<?php
    require 'koneksi_db.php';
    $i = 1;
    $get = mysqli_query($conn, "SELECT * FROM pembeli");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<h1 class="text-center mb-3">Daftar Pembeli</h1>

<body>
    <button type="button" class="btn btn-danger mb-3 mx-3">
        <a href="tambah_pembeli.php" class="text-white text-decoration-none ">Tambah Data</a>
    </button>
    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>Jenis Kelamin</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                $get = mysqli_query($conn, "SELECT * FROM pembeli");

                while($b=mysqli_fetch_assoc($get)){
                    $id_pembeli = $b['id_pembeli'];
                    $nama_pembeli = $b['nama_pembeli'];
                    $jk = $b['jk'];
                    $no_telp = $b['no_telp'];
                    $alamat = $b['alamat'];
                
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $id_pembeli ?></td>
                    <td><?= $nama_pembeli ?></td>
                    <td><?= $jk ?></td>
                    <td><?= $no_telp ?></td>
                    <td><?= $alamat ?></td>
                    <td>
                        <button type="button" class="btn btn-primary">
                            <a href="ubah_pembeli.php?id=<?= $id_pembeli ?>" class="text-white text-decoration-none">Ubah</a>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="hapus_pembeli.php?id=<?= $id_pembeli ?>" class="text-white text-decoration-none">Hapus</a>
                        </button>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>