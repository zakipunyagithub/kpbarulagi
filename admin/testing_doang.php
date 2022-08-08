<?php include('../admin/koneksi.php'); 


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Mujamu Premio</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

    <!-- sweet alert -->
    <script src="../assets/js/sweetalert2.js"></script>
    <link rel="stylesheet" href="../assets/css/sweetalert2.min.css">

</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.php">Admin Mujamu Premio</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
               <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"> 
                <div class="input-group-append">  
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button> 
                </div>
            </div> -->
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">


            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <!-- <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="kategori.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kategori</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produk.php">
                    <i class="fa fa-fw fa-shopping-bag"></i>
                    <span>Produk</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tentang.php">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Kontak</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="komentar.php">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>Buku Tamu</span></a>
                    </li>
            </li>
            </li>
        </ul> -->

        <div id="content-wrapper" style="background-color: white;">

            <div class="container-fluid" style="background-color: white; height: 100%; padding:20px;">
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <a href="komentar.php" style="text-decoration: none; color: white;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM pesan");
                                $num = mysqli_num_rows ($ambil)?> </p>
                                <?php echo $num;?>
                                <div class="mr-5">Data Buku Tamu</div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <a href="kategori.php" style="text-decoration: none; color: white;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                 <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM kategori");
                                $num = mysqli_num_rows ($ambil)?> </p>
                                <?php echo $num;?>
                                <div class="mr-5">Data Kategori</div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <a href="produk.php" style="text-decoration: none; color: white;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM produk");
                                $num = mysqli_num_rows ($ambil)?> </p>
                                <?php echo $num;?> 
                                <div class="mr-5">Data Produk</div>
                            </div>
                        </a>
                        </div>
                    </div>
               <!--     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">13 New Tickets!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">View Details</span>
                                <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div> -->
            </div>

            </div>
             <!-- Sticky Footer -->
             <footer class="sticky-footer">
                 <div class="container my-auto">
                     <div class="copyright text-center my-auto">
                         <span>Musthafa Zaki Pasha & Mujamu Premio</span>
                     </div>
                 </div>
             </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
         <i class="fas fa-angle-up"></i>
     </a>

     <!-- Logout Modal-->
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                     </button>
                 </div>
                 <div class="modal-body">Pilih "Logout" untuk mengakhiri session ini .</div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                     <a class="btn btn-primary logout" href="logout.php">Logout</a>
                 </div>
             </div>
         </div>
     </div>
     
     <!-- Bootstrap core JavaScript-->
     <script src="../assets/vendor/jquery/jquery.min.js"></script>
     <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Core plugin JavaScript-->
     <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

     <!-- Page level plugin JavaScript-->
     <script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
     <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>

     <!-- Custom scripts for all pages-->
     <script src="../assets/js/sb-admin.min.js"></script>

     <!-- Demo scripts for this page-->
     <script src="../assets/js/demo/datatables-demo.js"></script>


     <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == 1) { ?>
         <script>
             swal({
                 title: 'Edit data!',
                 text: 'Data berhasil di edit..',
                 type: 'success',
                 confirmButtonText: 'OK'
             })
         </script>
     <?php
            $_SESSION['edit'] = 0;
        } ?>

 </body>

 </html>
