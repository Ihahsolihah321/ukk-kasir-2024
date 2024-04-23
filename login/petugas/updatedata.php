<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaproduk = $_POST['NamaProduk']; // Menyesuaikan dengan nilai value dari dropdown
    $stokBaru = $_POST['Stok'];

    // Gantilah 'PelangganID' dengan nama kolom yang benar di dalam tabel 'produk'
    $queryUpdate = "UPDATE produk SET Stok = '$stokBaru' WHERE NamaProduk = '$namaproduk'";
    mysqli_query($koneksi, $queryUpdate);

    // Redirect kembali ke halaman utama setelah berhasil mengupdate data
    header('Location: Stokbarang.php');
    exit();
}
?>
