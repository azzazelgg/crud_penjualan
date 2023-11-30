<?php
    require 'function.php';
    
    if (isset($_POST['tambah'])){
        if(tambah_pembeli($_POST) > 0 ) {
            echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='data_pembeli.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href='data_pembeli.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Tambah Pembeli</title>
</head>
<body>
<body>
    <div class="card">
        <div class="container">
            <h1 class="card-header text-center">Tambah Data Pembeli</h1>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama_pembeli" class="form-label">Nama Pembeli:</label>
                                <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jk" id="jk" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="no_telp">Nomor Telepon</label>
                                <input type="number" class="form-control" name="no_telp" id="no_telp" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="jumlah_transaksi">Jumlah Transaksi</label>
                                <input type="number" class="form-control" name="jumlah_transaksi" id="jumlah_transaksi" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</body>
</html>