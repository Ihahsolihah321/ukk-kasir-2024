<?php
include '../../koneksi.php';

if (isset($_POST['edit'])) {
    // Memastikan input hanya berisi angka positif
    if ($_POST['Harga'] <= 0) {
        echo '<script>alert("Harga harus merupakan angka positif!"); window.location.href = "PendataanBarang.php";</script>';
        exit; // Menghentikan eksekusi script jika harga tidak valid
    }

    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg','');
    $nama = $_FILES ['Gambar']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower (end($x));
    $ukuran = $_FILES ['Gambar']['size'];
    $file_tmp = $_FILES ['Gambar']['tmp_name'];
    $angka_acak = rand(1,99);
    $nama_gambar_baru = $angka_acak. '-'.$nama;

    if($nama != ""){
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            $get_gambar = "SELECT Gambar FROM produk WHERE ProdukID = '$_POST[idb]'";
            $data_gambar = mysqli_query($koneksi, $get_gambar);
            $gambar_lama = mysqli_fetch_array($data_gambar);

            unlink("img/" . $gambar_lama['Gambar']);

            if($ukuran < 1044070) {
                move_uploaded_file($file_tmp, 'img/' . $nama_gambar_baru);

                $ubah = mysqli_query($koneksi, "UPDATE produk SET
                Gambar = '$nama_gambar_baru',
                NamaProduk = '$_POST[NamaProduk]',
                Category = '$_POST[kategori]',
                Harga = '$_POST[Harga]'    
                WHERE ProdukID = '$_POST[idb]'");

                if($ubah){
                    echo '<script>alert("Berhasil mengupdate data!"); window.location.href = "PendataanBarang.php";</script>';
                }else{
                    echo '<script>alert("Gagal mengupdate data!"); window.location.href = "PendataanBarang.php";</script>';
                }
            }else{
                echo '<script>alert("Ukuran File Terlalu Besar Max 1MB!"); window.location.href = "PendataanBarang.php";</script>';
            }
        }else{
            echo '<script>alert("Ekstensi File yang di upload tidak diperbolehkan!"); window.location.href = "PendataanBarang.php";</script>';
        }
    }else{
        $ubah = mysqli_query($koneksi, "UPDATE produk SET
                                    NamaProduk = '$_POST[NamaProduk]',
                                    Category = '$_POST[kategori]',
                                    Harga = '$_POST[Harga]'      
                                    WHERE ProdukID = '$_POST[idb]'");

        if($ubah){
            echo '<script>alert("Berhasil mengupdate data!"); window.location.href = "PendataanBarang.php";</script>';
        }else{
            echo '<script>alert("Gagal mengupdate data!"); window.location.href = "PendataanBarang.php";</script>';
        }
    }
}
?>
