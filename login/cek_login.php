<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';


// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data  dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from User where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['role']=="1") {   
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        header("location:admin/index.php");
    }else if ($data['role']=="0"){
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        header("location:petugas/index.php");
    }
} else {
    header("location:index.php?pesan=gagal");
}

?>