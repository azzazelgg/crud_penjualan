<?php 

    require 'function.php';
    $supplier = query("SELECT * FROM supplier");

    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $barang = query("SELECT * FROM barang WHERE id_barang = 
    $id")[0];

    if (isset($_POST['ubah'])){
    if(ubah_barang($_POST) > 0 ) {
        echo "<script>
        alert('Data Berhasil Diubah');
        document.location.href='data_barang.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Diubah');
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
    <h1>Ubah Data Barang</h1>

    <div class="card">
        <div class="container">
            <h1 class="card-header text-center">Tambah Data Barang</h1>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama">Nama Barang:</label>
                                <input type="text" class="form-control" name="nama_barang" id="nama" value="<?php echo $barang['nama_barang'] ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="harga">Harga Barang:</label>
                                <input type="number" class="form-control" name="harga" id="harga" value="<?php echo $barang['harga'] ?>"  required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="stok">Stok Barang:</label>
                                <input type="number" class="form-control" name="stok" id="stok" value="<?php echo $barang['stok'] ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="id_supplier">Supplier:</label>
                                <select class="form-select" name="id_supplier" id="supplier" value="<?php echo $barang['id_supplier'] ?>">
                                    <?php foreach ($supplier as $s) : ?>
                                    <option value="<?= $s['id_supplier']; ?>">
                                        <?= $s['nama_supplier']?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                                <input type="hidden" name="id" value="<?php echo $barang['id_barang'] ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>