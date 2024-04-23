<?php
include '../../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary" >

<div class="container" >
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <h2>Data Akun</h2>       
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No </th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                                        <?php

                                            $ambilsemuadatalogin = mysqli_query($koneksi, "SELECT * FROM User");
                                            $i = 1;
                                            while ($data = mysqli_fetch_array($ambilsemuadatalogin)) {
                                                $username = $data['Username'];
                                                $Password= $data['Pasword'];  
                                                $nama = $data['Nama'];
                                        ?>

                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $username; ?></td>
                                                    <td><?= $Password; ?></td>
                                                    <td><?= $nama; ?></td>

                                                    <td>
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $i; ?>">
                                                            Edit
                                                        </button>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $i; ?>">
                                                            Delete
                                                        </button>
                                                    </td>
                                                </tr>


                                                <!-- edit Modal -->
                                                
                                                
                                                <div class="modal" id="edit<?= $i;?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">EDIT AKUN</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <form method="post" action="edit_aksi.php" >
                                                                        <label for="nama">Nama:</label>
                                                                        <input type="text" name="NamaProduk" class="form-control" value="<?=$namaproduk ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="harga">Harga:</label>
                                                                        <input type="text" name="Harga" class="form-control" value="<?=$harga ?>">

                                                                        <label for="stok">Stok:</label>
                                                                        <input type="text" name="Stok" class="form-control" value="<?=$stok ?>">
                                                                    </div>
                                                                    
                                                                    <button type="submit" class="btn btn-primary" name = "edit" data-bs-dismiss="modal">Submit</button>
                                                                </form>
                                                        
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- delete Modal -->
                                                <div class="modal" id="delete<?= $i; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Konfirmasi Hapus Barang</h4>
                                                                
                                                            </div>

                                                            <!-- Modal body -->
                                                            <form action="hapus_aksi.php" method="post">
                                                                <input type="hidden" name="idb" value="<?= $data['ProdukID']; ?>">
                                                                <div class="modal-body">
                                                                    Apakah anda yakin menghapus data ini?
                                                                    <span class="text-danger"><strong><?= $data['NamaProduk'] ?></strong></span>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-danger" name="hapusbarang">Hapus</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                </div>

                            <?php
                            }
                            ?>
                    
                    </tbody>
                </table>
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

</body>
</html>
