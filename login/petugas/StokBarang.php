<?php

include '../../koneksi.php';
include 'header.php';

?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- STOK BARANG -->
    <div class="card shadow mb-4">
        <!-- STOK BARANG -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Tambah Barang
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Pendataan Barang</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form method="post" action="updatedata.php">
                                    <div class="form-group">
                                        <select name="NamaProduk" class="form-control">
                                            <?php
                                            $ambilsemuadatanya = mysqli_query($koneksi, "select * from produk");
                                            while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)) {
                                                $namaproduk = $fetcharray['NamaProduk'];
                                                $id = $fetcharray['PelangganID'];
                                            ?>

                                                <option value="<?= $namaproduk; ?>"><?= $namaproduk; ?></option>


                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <label for="stok">Stok:</label>
                                        <input type="text" name="Stok" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="return validateAndSubmit()">Submit</button>

                                </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card-header py-3">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Stok</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    $ambilsemuadataproduk = mysqli_query($koneksi, "SELECT * FROM produk");
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($ambilsemuadataproduk)) {
                                        $img = ''; // Initialize variable for image
                                        $namaproduk = $data['NamaProduk'];
                                        $kategori = $data['Category'];
                                        $harga = $data['Harga'];
                                        $stok = $data['Stok'];


                                        // Check if there is an image
                                        $gambar = $data['Gambar'];
                                        if ($gambar == null) {
                                            // If NO image, set a placeholder or any text you want
                                            $img = "No photo";
                                        } else {
                                            // If there is an image, create an <img> tag
                                            $img = '<img src="img/' . $gambar . '" class="zoomable" width="100">';
                                        }
                                    ?>

                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $img; ?></td>
                                            <td>
                                                <?= $namaproduk; ?>
                                                <div>
                                                    <small>Kategori : <?= $kategori; ?></small>
                                                </div>
                                            </td>
                                            <td><?= "Rp " . number_format($harga, 0, ',', '.'); ?></td>
                                            <td><?= $stok; ?></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </diV>
                </div>
            </div>
            <!-- /.container-fluid -->`
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; ihahsolihah 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>
<script>
function validateAndSubmit() {
    // Memanggil fungsi validasi untuk memastikan semua input terisi dan stok memenuhi syarat
    var isValid = validateForm();
    // Mengembalikan hasil validasi
    return isValid;
}

function validateForm() {
    // Mengambil nilai dari input stok
    var stokInput = document.getElementsByName("Stok")[0].value;

    // Mengonversi nilai stok menjadi bilangan bulat
    var stok = parseInt(stokInput);

    // Menetapkan nilai minimum stok yang diperbolehkan
    var minStok = 0; // Anda dapat mengganti nilai minimum sesuai kebutuhan

    // Memeriksa apakah nilai stok lebih besar atau sama dengan nilai minimum
    if (stok < minStok) {
        // Jika nilai stok kurang dari nilai minimum, tampilkan pesan kesalahan
        alert("Stok tidak boleh kurang dari " + minStok + ".");
        return false; // Mencegah formulir dikirim
    }

    // Memeriksa apakah input stok tidak kosong
    if (stokInput.trim() == "") {
        // Jika input stok kosong, tampilkan pesan kesalahan
        alert("Harap isi kolom stok sebelum mengirimkan formulir.");
        return false; // Mencegah formulir dikirim
    }

    return true; // Mengizinkan formulir dikirim jika semua validasi berhasil
}
</script>




</html>