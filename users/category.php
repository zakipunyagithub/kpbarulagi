
    <!-- Navbar -->

    <?php include 'komponen/header.php';?>
    <?php include 'komponen/navbar.php';?>



	<!-- Page info -->
	<div class="row mb-5 justify-content-center text-center set-bg" data-setbg="../assets/img/latarbmujamu.png">
	    <div class="col-lg-6 text-white">
	    <?php $ambil = $koneksi->query("SELECT * FROM tentang"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
	        <img src="../assets/foto2_eksternal/<?php echo $pecah['foto'];?>" id="id_toko" width="250" height="250">
	        <h2 class=" mt-4">Mujamu Premio</h2>
	        <div class="mt-2">
	            <p class="lead lh-180">Legendary Javanese Traditional Herb in a Bottle</p>
	        </div>
	        <hr>
	        <h4 class="text-white text-center">Halaman Kategori</h4>
			<div class="site-pagination text-center">
				<a class="text-white" href="index.php">Home</a> /
				<a class="text-white" href="produk.php">Produk</a> 
			</div>
	    </div>
	    <?php }?>
	</div>


	<!-- <div class="page-top-info set-bg" data-setbg="../assets/img/latarbmujamu.png">
		<div class="container">
			<h4 class="text-white">Halaman Kategori</h4>
			<div class="site-pagination">
				<a class="text-white" href="index.php">Home</a> /
				<a class="text-white" href="product.php">Produk</a> 
			</div>
		</div>
	</div> -->
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php 
							include "koneksi.php";
							$id_kategori=$koneksi->query($_GET['id']);
							$ambil=$koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON kategori.id_kategori=produk.id_kategori WHERE kategori.id_kategori='".$_GET['id']."' ORDER BY produk.id_produk DESC");
							while($pecah = $ambil->fetch_assoc()){
						?>
						<div class="col-lg-3 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img style="width: 250px; height: 400px;" src="../assets/foto_produk/<?php echo $pecah['foto_produk'];?>" alt="">
									<div class="pi-links">
										<a href="single-product.php?&id=<?php echo $pecah['id_produk']; ?>" class="add-card"><i class="fas fa-eye"></i><span>Detail Produk</span></a>
									</div>
								</div>
								<div class="pi-text">
								<!--	<h6>Rp. <?php echo number_format($pecah['harga_produk']);?></h6> -->
									<p> <?php echo $pecah['nama_produk'];?></p>
								</div>
							</div>
						</div>
						<?php } ?>

						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->


	<!-- Footer section -->

	<!-- Footer section end -->



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
