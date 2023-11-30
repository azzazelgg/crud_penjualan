<?php
    require 'function.php';
    
    $supplier = query("SELECT * FROM supplier");
    if (isset($_POST['tambah'])){
        if(tambah_barang($_POST) > 0 ) {
            echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href='data_barang.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Ditambahkan');
            document.location.href='data_barang.php';
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
    <title>Halaman Tambah Barang</title>
</head>
<body>
<body>
    <div class="card">
        <div class="container">
            <h1 class="card-header text-center">Tambah Data Barang</h1>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama Barang:</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="harga">Harga Barang:</label>
                                <input type="number" class="form-control" name="harga" id="harga" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="stok">Stok Barang:</label>
                                <input type="number" class="form-control" name="stok" id="stok" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="id_supplier">Supplier:</label>
                                <select class="form-select" name="id_supplier" id="supplier" required>
                                    <?php foreach ($supplier as $s) : ?>
                                    <option value="<?= $s['id_supplier']; ?>">
                                        <?= $s['nama_supplier']?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
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