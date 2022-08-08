<nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.php">
                <?php
                    include "koneksi.php";
                    $ambil = $koneksi->query("SELECT * FROM tentang");
                ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <img alt="Image placeholder" src="../assets/foto2_eksternal/<?php echo $pecah['foto'];?>" id="id_toko" height="150" width="100">
                <?php }?>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bacaan.php">Bacaan</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="produk.php">Produk</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                        <div class="dropdown-menu dropdown-menu-single">
                            <?php 
								include "koneksi.php";
								$ambil=$koneksi->query("SELECT * FROM kategori");
								while($pecah = $ambil->fetch_assoc()){ 
							?>
								<a href="category.php?id=<?php echo $pecah['id_kategori']; ?>" class="dropdown-item"><?php echo $pecah['kategori']; ?></a>
							<?php } ?>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">
                            <button class="btn btn-primary">
                                Login Admin
                            </button>  
                        </a>
                    </li> -->
                </ul>
                <!-- Button -->
                <!-- <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="../admin">
                    Login Admin
                </a> -->
                <!-- Mobile button -->
                <!-- <div class="d-lg-none text-center">
                    <a href="https://webpixels.io/themes/quick-website-ui-kit" class="btn btn-block btn-sm btn-warning">See more details</a>
                </div> -->
            </div>
        </div>
    </nav>