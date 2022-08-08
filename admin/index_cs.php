<?php include("../templates/cs_header.php"); ?>
<?php include("../templates/cs_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/cs_auth_header.php"); ?>

<div class="container-fluid" style="background-color: white; height: 100%; padding:20px;">
    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <a href="cs_link_youtube.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM link_youtube");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?>
                    <div class="mr-5">Link Youtube</div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <a href="cs_bahan_jamu.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-mortar-pestle"></i>
                        <i class="fas fa-pepper-hot"></i>

                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM bahan_jamu");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?>
                    <div class="mr-5">Manfaat Bahan Jamu</div>
                </div>
            </a>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <a href="cs_bacaan.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-book-open"></i>
                        <i class="fas fa-fw fa-edit"></i>
                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM bacaan");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?>
                    <div class="mr-5">Data Bacaan</div>
                </div>
            </a>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <a href="cs_kategori.php" style="text-decoration: none; color: white;">
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
                <a href="cs_produk.php" style="text-decoration: none; color: white;">
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
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
                <a href="cs_tentang.php" style="text-decoration: none; color: white;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <!-- <i class="fas fa-fw fa-comments"></i> -->
                        <i class="far fa-address-card"></i>
                    </div>
                    <p class="main-text"><?php $ambil=$koneksi->query("SELECT * FROM tentang");
                    $num = mysqli_num_rows ($ambil)?> </p>
                    <?php echo $num;?> 
                    <div class="mr-5">Kontak</div>
                </div>
            </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <a href="cs_komentar.php" style="text-decoration: none; color: white;">
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
</div>



<?php include("../templates/cs_footer.php"); ?>