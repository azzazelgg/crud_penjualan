<?php

require 'function.php';

$id = $_GET['id'];
if(hapus_pembeli($id,) > 0){
    echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href = 'data_pembeli.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dihapus')
    document.location.href = 'data_pembeli.php;
    </script>";
}

?>