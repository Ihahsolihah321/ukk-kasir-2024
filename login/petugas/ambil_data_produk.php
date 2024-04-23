<?php
include '../../koneksi.php'; 

if (isset($_GET['ProdukID'])) {
    $selectedProdukID = $_GET['ProdukID'];

    $ambilsemuadata = mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID = '$selectedProdukID'");
    $data = mysqli_fetch_assoc($ambilsemuadata);

    // Mengembalikan data dalam format JSON
    echo json_encode($data);
}
?>
