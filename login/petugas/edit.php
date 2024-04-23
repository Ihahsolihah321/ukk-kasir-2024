<?php
include '../../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pelanggan WHERE PelangganID = '$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header('Location: register.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['NomorTelepon'];

    // Memastikan semua kolom terisi
    if (empty($nama) || empty($alamat) || empty($nohp)) {
        echo '<script>alert("Semua kolom harus diisi!"); window.location.href = "registerpelanggan.php?id='.$id.'";</script>';
        exit();
    }

    // Memastikan nomor telepon berisi angka positif
    if (!is_numeric($nohp) || $nohp <= 0) {
        echo '<script>alert("Nomor Telepon harus merupakan angka positif!"); window.location.href = "registerpelanggan.php?id='.$id.'";</script>';
        exit();
    }

    $query = "UPDATE pelanggan SET NamaPelanggan = '$nama', Alamat = '$alamat', NomorTelepon = '$nohp' WHERE PelangganID = '$id'";
    mysqli_query($koneksi, $query);

    header('Location: registerpelanggan.php');
    exit();
}
?>
