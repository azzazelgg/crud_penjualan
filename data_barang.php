<?php
    require 'koneksi_db.php';
    $i = 1;
    $get = mysqli_query($conn, "SELECT * FROM barang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<h1 class="text-center">Daftar Barang</h1>

<body>
    <button type="button" class="btn btn-danger mb-3 mx-3">
        <a href="tambah_barang.php" class="text-white text-decoration-none ">Tambah Data</a>
    </button>
    <div class="table-responsive text-nowrap">
        <table border="1" class="table table-bordered">
            <thead>
                <tr>
                    <th>no</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Supplier</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    $get = mysqli_query($conn, "SELECT * FROM barang");

                    while($b=mysqli_fetch_assoc($get)){
                        $id_barang = $b['id_barang'];
                        $nama_barang = $b['nama_barang'];
                        $harga = $b['harga'];
                        $stok = $b['stok'];
                        $id_supplier = $b['id_suplier'];
                    
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $id_barang ?></td>
                        <td><?= $nama_barang ?></td>
                        <td><?= $harga ?></td>
                        <td><?= $stok ?></td>
                        <td><?= $id_supplier ?></td>
                        <td>
                        <button type="button" class="btn btn-primary">
                            <a href="ubah_barang.php?id=<?= $id_barang ?>" class="text-white text-decoration-none">Ubah</a>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <a href="hapus_barang.php?id=<?= $id_barang ?>" class="text-white text-decoration-none">Hapus</a>
                        </button>
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>