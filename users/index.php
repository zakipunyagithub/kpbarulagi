
    <!-- Navbar -->

    <?php include 'komponen/header.php';?>
    <?php include 'komponen/navbar.php';?>


	<!-- Hero section -->

	<section class="hero-section">
		
		<!-- <div class="container">

		<section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary"> -->

        <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center set-bg" data-setbg="../assets/img/latarbmujamu.png">
                <div class="col-lg-6 text-white">
                    <?php $ambil = $koneksi->query("SELECT * FROM tentang"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <img src="../assets/foto2_eksternal/<?php echo $pecah['foto'];?>" id="id_toko" width="250" height="250">
                    <h2 class=" mt-4">Mujamu Premio</h2>
                    <div class="mt-2">
                        <p class="lead lh-180">Legendary Javanese Traditional Herb in a Bottle</p>
                        <p>
                          <?php echo $pecah['tentang_toko']; ?>  
                        </p>
                        <p>
                          <?php echo $pecah['alamat']; ?>  
                        </p>
                    <?php }?>
                    </div>
                </div>
            </div>

        <div class="container">
            <!-- Title -->
            <h3 class="text-center"> Konten Youtube Kami </h3>
            <!-- Card -->
            <div class="row mt-5">
                <?php $ambil = $koneksi->query("SELECT * FROM link_youtube ORDER BY id ASC"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="pt-4 pb-5" width="100%">
                                <iframe width="100%" height="200" src="<?= $pecah['link_youtube']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                            </div>
                            <h5 class="h4 lh-130 mb-3"><?= $pecah['judul_youtube']; ?></h5>
                            <p class="text-muted mb-0"><?= $pecah['keterangan_youtube']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <hr>
    
    <section class="slice slice-lg">
        <div class="container">
            <h3 class="text-center"> Bahan-bahan Pembuatan Jamu dan Manfaatnya </h3>
            <?php $ambil = $koneksi->query("SELECT * FROM bahan_jamu ORDER BY id DESC"); ?>
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>

            <div class="py-6">
                <div class="row row-grid justify-content-between ">
                    <div class="col-lg-5 <?= $pecah['arah']?>">
                        <?= $pecah['isi']?>
                    </div>
                    <div class="col-lg-6 order-lg-1" id="bahanjamu">
                        <div class="card mb-0 mr-lg-5">
                            <div class="card-body p-2" >
                                <img alt="Image placeholder" src="../assets/bahan_jamu/<?= $pecah['foto']?>" class="img-fluid shadow rounded" id="bahanjamu">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>
    </section>
		
    


	<!-- Product filter section end -->


	<!-- Banner section -->
	<!-- Banner section end  -->


	<!-- Footer section -->
		<?php
		include "../view/view-footer.php";
        ?>

	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.slicknav.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/jquery.nicescroll.min.js"></script>
	<script src="../assets/js/jquery.zoom.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/js/main.js"></script>

	</body>
</html>
