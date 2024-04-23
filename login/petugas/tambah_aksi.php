<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaproduk = $_POST['NamaProduk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];

    // Proses validasi file
    $allowed_types = array('image/png', 'image/jpeg', 'image/jpg');
    $max_size = 1024 * 1024 * 1.5; // 1.5 MB

    if ($_FILES['Gambar']['size'] > $max_size) {
        echo '<script>alert("File terlalu besar. Maksimum 1.5 MB."); window.location.href = "tables.php";</script>';
        exit();
    } elseif (!in_array($_FILES['Gambar']['type'], $allowed_types)) {
        echo '<script>alert("Tipe file tidak diizinkan. Hanya PNG, JPG, dan JPEG yang diperbolehkan."); window.location.href = "tables.php";</script>';
        exit();
    } else {
        // Proses upload gambar
        $gambar = $_FILES["Gambar"]["name"];
        $temp = $_FILES["Gambar"]["tmp_name"];
        $folder = "img/" . $gambar;

        move_uploaded_file($temp, $folder);

        // Simpan data ke database
        $query = "INSERT INTO produk (Gambar, NamaProduk, Category, Harga, Stok) VALUES ('$gambar', '$namaproduk', '$kategori', '$harga', '$stok')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo '<script>alert("Berhasil menyimpan data!"); window.location.href = "PendataanBarang.php";</script>';
        } else {
            echo '<script>alert("Gagal menyimpan data!"); window.location.href = "PendataanBaranf.php";</script>';
        }
    }
}
?>
