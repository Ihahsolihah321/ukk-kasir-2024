<?php

// Fungsi untuk menghasilkan ID unik
function generateUniqueID($koneksi) {
    // Logic untuk menghasilkan ID unik, misalnya menggunakan timestamp dan uniqid
    $idUnik = "P" . date('ymdGis') . uniqid();
    
    // Pastikan ID yang dihasilkan belum digunakan
    $ambilID = mysqli_query($koneksi, "SELECT PenjualanID FROM detailpenjualan WHERE PenjualanID='$idUnik'");
    $data = mysqli_fetch_array($ambilID);
    
    while ($data['PenjualanID'] != null) {
        // Jika ID sudah ada, buat ID baru
        $idUnik = "P" . date('ymdGis') . uniqid();
        $ambilID = mysqli_query($koneksi, "SELECT PenjualanID FROM detailpenjualan WHERE PenjualanID='$idUnik'");
        $data = mysqli_fetch_array($ambilID);
    }

    return $idUnik;
}


?>
  <hr class="mt-2">
                                    <ul class="list-group border-0">
                                        <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                                            <label for="col-sm-4 col-form-label col-form-label-sm">Member:</label>
                                            <div class="col-sm-4">
                                                <select name="idpelanggan" id="idpelanggan" class="form-control">
                                                    <option value="">Silahkan Pilih</option>
                                                    <?php
                                                    $ambilsemuadatanya = mysqli_query($koneksi, "select * from pelanggan");
                                                    while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)) {
                                                        $idPelanggan = $fetcharray['PelangganID'];
                                                        $namapelanggan = $fetcharray['NamaPelanggan'];
                                                    ?>
                                                        <option value="<?= $idpelanggan; ?>"><?= $namapelanggan; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </li>