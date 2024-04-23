<?php

include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $produkid = $_POST['ProdukID'];
    $jumlah = $_POST['JumlahProduk'];
    $subtotal = $_POST['Subtotal'];
    $penjualan = $_POST['penjualan'];

    // Query untuk menambahkan data ke dalam tabel
    $query = "INSERT INTO detailpenjualan (ProdukID, PenjualanID, JumlahProduk, Subtotal) VALUES ('$produkid', '$penjualan', '$jumlah', '$subtotal')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect kembali ke halaman utama setelah berhasil menambahkan data
        header('Location: pembelian.php');
        exit();
    } else {
        // Tampilkan pesan kesalahan jika query tidak berhasil
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>