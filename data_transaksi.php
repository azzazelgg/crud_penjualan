<?php
    require 'koneksi_db.php';
    $i = 1;
    $get = mysqli_query($conn, "SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<h1>Daftar Transaksi</h1>

<body>
    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>ID Transaksi</th>
                <th>ID Barang</th>
                <th>ID Pembeli</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;

                while($b=mysqli_fetch_assoc($get)){
                    $id_transaksi = $b['id_transaksi'];
                    $id_barang = $b['id_barang'];
                    $id_pembeli = $b['id_pembeli'];
                    $tanggal = $b['tanggal'];
                    $keterangan = $b['keterangan'];
                
            ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $id_transaksi ?></td>
                    <td><?= $id_barang ?></td>
                    <td><?= $id_pembeli ?></td>
                    <td><?= $tanggal ?></td>
                    <td><?= $keterangan ?></td>
                    <td>
                        <button type="button" class="btn btn-outline-dark"><a href="">Ubah</a></button>
                        <button type="button" class="btn btn-outline-danger"><a href="">Hapus</a></button>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>