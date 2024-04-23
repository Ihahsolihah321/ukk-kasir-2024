<?php include '../../koneksi.php'?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> ADMIN </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3"> Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Register Screens:</h6>
                        <a class="collapse-item" href="register.php">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Tables -->
             <li class="nav-item active">
                <a class="nav-link" href="StokBarang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Stok Barang</span></a>
            </li>
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="PendataanBarang.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pendataan Barang</span></a>
            </li>

            <!-- Nav Item - logout -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>logout </span></a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ihah Solihah</span>
                                <img class="img-profile rounded-circle"
                                src="img/user-8.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

               <!-- awal isi content-->

               <div class="container-fluid">


                <!-- Data Akun -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">

                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Tambah Akun
                        </button>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="tambah.php" >
                            <div class="form-group">

                                <label for="username">Username :</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="text" name="password" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" name="nama" class="form-control">

                            </div>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="return validateForm()">Submit</button>
                        </form>
                               
                            
                        
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $ambilsemuadatalogin = mysqli_query($koneksi, "SELECT * FROM User ");
                        $i = 1;
                        while ($data = mysqli_fetch_array($ambilsemuadatalogin)) {
                            $id = $data['iduser']; // 
                            $username = $data['username'];
                            $password = $data['password'];
                            $nama = $data['Nama'];
                            

                        ?>

                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $username; ?></td>
                                <td><?= $password; ?></td>
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
                                            <form method="post" action="edit.php">
                                                <input type="hidden" name="id" value="<?= $id; ?>">
                                                <div class="form-group">
                                                    <label for="username">Username:</label>
                                                    <input type="text" name="username" class="form-control" value="<?= $username ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password:</label>
                                                    <input type="text" name="password" class="form-control" value="<?= $password ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama">Nama:</label>
                                                    <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" >Submit</button>
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
                                            <h4 class="modal-title">Konfirmasi Hapus Akun</h4>
                                        </div>
                                        <!-- Modal body -->
                                        <form action="hapus.php" method="post">
                                            <input type="hidden" name="id" value="<?= $id; ?>"> <!-- Gunakan ProdukID di sini -->
                                            <div class="modal-body">
                                                Apakah anda yakin menghapus data akun ini?
                                                <span class="text-danger"><strong><?= $username ?></strong></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger" name="hapusakun">Hapus</button>
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

</div>








               <!-- akhir isi content-->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin akan "Logout".</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../index.php">Logout</a>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

<script>
function validateForm() {
    // Mengambil nilai dari setiap input
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var nama = document.getElementsByName("nama")[0].value;

    // Memeriksa apakah setiap input tidak kosong
    if (username.trim() == "" || password.trim() == "" || nama.trim() == "") {
        // Jika ada input yang kosong, tampilkan pesan kesalahan
        alert("Harap isi semua kolom sebelum mengirimkan formulir.");
        return false; // Mencegah pengiriman formulir
    }
    return true; // Mengizinkan pengiriman formulir jika semua input terisi
}
</script>

</html>