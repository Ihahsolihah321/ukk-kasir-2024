
<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];


    // Query untuk menambahkan data ke dalam tabel
    $query = "INSERT INTO user (username, password, Nama) VALUES ('$username', '$password', '$nama')";
    mysqli_query($koneksi, $query);
    if ($query) {
        // Redirect kembali ke halaman utama setelah berhasil menambahkan data
        header('Location: register.php');
        exit();
    } else {
        // Tampilkan pesan kesalahan jika query tidak berhasil
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

