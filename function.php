<?php

function koneksi () {
    $conn = mysqli_connect ("localhost","root","","penjualan") ;
    return $conn ;
}

function query($sql) {
    $conn = koneksi();
    $result = mysqli_query ($conn, $sql) ;

    $rows = [];
    while ($row = mysqli_fetch_assoc ($result)){
        $rows [] = $row;
    }
    return $rows ;
}


// barang
function tambah_barang($data) {
    $conn = koneksi();

    $nama = $data['nama'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "INSERT INTO barang VALUES (null, '$nama','$harga','$stok','$id_supplier')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus_barang($id) {
    $conn = koneksi();
    
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id");

    return mysqli_affected_rows($conn);
}

function ubah_barang($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama_barang'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $id_supplier = $data['id_supplier'];

    $sql = "UPDATE barang SET nama_barang = '$nama',
                              harga = '$harga',
                              stok = '$stok',
                              id_suplier = '$id_supplier'
            WHERE id_barang = $id";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}
// Penutup Barang

// Pembeli
function tambah_pembeli($data)
{
    $conn = koneksi();

    $nama_pembeli = $data['nama_pembeli'];
    $jk = $data['jk'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];
    $jumlah_transaksi = $data['jumlah_transaksi'];

    $sql = "INSERT INTO pembeli VALUES (null, '$nama_pembeli','$jk','$no_telp','$alamat','$jumlah_transaksi')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
function hapus_pembeli($id) 
{
    $conn = koneksi();
    
    mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli = $id");

    return mysqli_affected_rows($conn);
}
function ubah_pembeli($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama_pembeli'];
    $jk = $data['jk'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];
    $jumlah_transaksi = $data['jumlah_transaksi'];

    $sql = "UPDATE pembeli SET nama_pembeli = '$nama',
                              jk = '$jk',
                              no_telp = '$no_telp',
                              alamat = '$alamat',
                              jumlah_transaksi = '$jumlah_transaksi'
            WHERE id_pembeli = $id";
            
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}
// penutup pembeli
// supplier
function tambah_supplier($data)
{
    $conn = koneksi();

    $nama_supplier = $data['nama_supplier'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

    $sql = "INSERT INTO supplier VALUES (null, '$nama_supplier','$no_telp','$alamat')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus_supplier($id)
{
    $conn = koneksi();
    
    mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = $id");

    return mysqli_affected_rows($conn);
}
function ubah_supplier($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $nama = $data['nama_supplier'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];

    $sql = "UPDATE supplier SET nama_supplier = '$nama',
                              no_telp = '$no_telp',
                              alamat = '$alamat'
            WHERE id_supplier = $id";
            
    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}
// Penutup Supplier
?>