<?php
include '../../koneksi.php';

if (isset($_POST['hapusakun'])) {
    $id = $_POST['id'];

    // Query untuk menghapus data dari tabel
    $query = "DELETE FROM user WHERE iduser = '$id'";
    mysqli_query($koneksi, $query);

    // Redirect kembali ke halaman utama setelah berhasil menghapus data
    header('Location: register.php');
    exit();
}
?>
