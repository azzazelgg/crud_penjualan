<?php
    require 'function.php';
    
    if (isset($_POST['tambah'])){
        if(tambah_supplier($_POST) > 0 ) {
            echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='data_supplier.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href='data_supplier.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="card">
        <div class="container">
            <h1 class="card-header text-center">Tambah Data Supplier</h1>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" required>
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
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>