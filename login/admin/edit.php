<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE user SET username = '$username', password = '$password', Nama = '$nama' WHERE iduser = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($koneksi));
    }

    header('Location: register.php');
    exit();
}
?>
