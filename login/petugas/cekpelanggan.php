<?php
include '../../koneksi.php';

// Mengecek apakah formulir login pelanggan telah di-submit
if(isset($_POST['login'])){
    // Mengambil data ID pelanggan dari formulir
    $pelanggan_id = $_POST['pelanggan'];

    // Mengeksekusi query untuk memeriksa apakah pelanggan sudah terdaftar
    $query = "SELECT * FROM pelanggan WHERE PelangganID = '$pelanggan_id'";
    $result = mysqli_query($koneksi, $query);

    // Jika data pelanggan ditemukan, arahkan ke halaman pembelian
    if(mysqli_num_rows($result) > 0){
        // Anda dapat menyimpan data pelanggan dalam session jika diperlukan
        $data_pelanggan = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['PelangganID'] = $data_pelanggan['PelangganID'];
        $_SESSION['NamaPelanggan'] = $data_pelanggan['NamaPelanggan'];

        // Redirect ke halaman pembelian
        header('Location: pembelian.php');
        exit();
    } else {
        // Jika pelanggan tidak ditemukan, tampilkan pesan error
        $error_message = "Pelanggan tidak ditemukan. Silakan coba lagi.";
    }
}
?>
