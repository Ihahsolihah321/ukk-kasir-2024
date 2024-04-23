
<?php

function hitungTotalBayar($koneksi)
{
    $query = mysqli_query($koneksi, "SELECT produk.ProdukID, produk.Harga, detailpenjualan.PenjualanID, detailpenjualan.JumlahProduk, detailpenjualan.bayar, detailpenjualan.kembalian
    FROM produk
    JOIN detailpenjualan ON produk.ProdukID = detailpenjualan.ProdukID;");
    $total = 0;
    $tot_bayar = 0;
    $bayar = 0; 
    $kembalian = 0; 

    while ($r = $query->fetch_assoc()) {
        if (isset($r['Harga'])) {
            $total = $r['Harga'] * $r['JumlahProduk'];
            $tot_bayar += $total;
        } else {
            echo "Warning: Undefined array key 'Harga'";
        }

        $bayar = $r['bayar'];
        $kembalian = $r['kembalian'];
    }

    return ['tot_bayar' => $tot_bayar, 'bayar' => $bayar, 'kembalian' => $kembalian];
}


?>
