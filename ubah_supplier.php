<?php 

    require 'function.php';

    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $supplier = query("SELECT * FROM supplier WHERE id_supplier = 
    $id")[0];

    if (isset($_POST['ubah'])){
    if(ubah_supplier($_POST) > 0 ) {
        echo "<script>
        alert('Data Berhasil Diubah');
        document.location.href='data_supplier.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Diubah');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Edit Supplier</title>
</head>
<body>
    <h1>Ubah Data Supplier</h1>

    <div class="card">
        <div class="container">
            <h1 class="card-header text-center">Edit Data Supplier</h1>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="nama">Nama Supplier</label>
                                <input type="text" class="form-control" name="nama_supplier" id="nama" value="<?php echo $supplier['nama_supplier'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="no_telp">Nomor Telepon</label>
                                <input type="number" class="form-control" name="no_telp" id="no_telp" value="<?php echo $supplier['no_telp'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="alamat">alamat Supplier</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $supplier['alamat'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>