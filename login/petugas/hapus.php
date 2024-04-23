<?php
include '../../koneksi.php';

if (isset($_POST['hapusakun'])) {
    $id = $_POST['PelangganID'];

    // Query untuk menghapus data dari tabel
    $query = "DELETE FROM pelanggan WHERE PelangganID = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect kembali ke halaman utama setelah berhasil menghapus data
        header('Location: registerpelanggan.php');
        exit();
    } else {
        // Tampilkan pesan kesalahan jika query tidak berhasil
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
