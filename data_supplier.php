<?php
    require 'koneksi_db.php';
    $i = 1;
    $get = mysqli_query($conn, "SELECT * FROM supplier");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<h1 class="text-center mb-3">Daftar Supplier</h1>

<body>
    <button type="button" class="btn btn-danger mb-3 mx-3">
        <a href="tambah_supplier.php" class="text-white text-decoration-none ">Tambah Data</a>
    </button>
    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>ID Supplier</th>
                <th>Nama Supplier</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                $get = mysqli_query($conn, "SELECT * FROM supplier");

                while($b=mysqli_fetch_assoc($get)){
                    $id_supplier = $b['id_supplier'];
                    $nama_supplier = $b['nama_supplier'];
                    $no_telp = $b['no_telp'];
                    $alamat = $b['alamat'];
                
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $id_supplier ?></td>
                    <td><?= $nama_supplier ?></td>
                    <td><?= $no_telp ?></td>
                    <td><?= $alamat ?></td>
                    <td>
                        <button type="button" class="btn btn-primary">
                            <a href="ubah_supplier.php?id=<?= $id_supplier ?>" class="text-white text-decoration-none">Ubah</a>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="hapus_supplier.php?id=<?= $id_supplier ?>" class="text-white text-decoration-none">Hapus</a>
                        </button>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>