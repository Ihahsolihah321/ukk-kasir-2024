<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['username'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nomorhp'];

    // Query untuk menambahkan data ke dalam tabel
    $query = "INSERT INTO pelanggan (NamaPelanggan, Alamat, NomorTelepon) VALUES ('$nama', '$alamat', '$nohp')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect kembali ke halaman utama setelah berhasil menambahkan data
        header('Location: registerpelanggan.php');
        exit();
    } else {
        // Tampilkan pesan kesalahan jika query tidak berhasil
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
