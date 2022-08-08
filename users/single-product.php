
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
	        <h4 class="text-white text-center">Halaman Detail Produk</h4>
			<div class="site-pagination text-center">
				<a class="text-white" href="index.php">Home</a> /
				<a class="text-white" href="produk.php">Detail Produk</a> 
			</div>
	    </div>
	    <?php }?>
	</div>


	<!-- <div class="page-top-info set-bg" data-setbg="../assets/img/latarbmujamu.png">
		<div class="container">
			<h4 class="text-white">Halaman Detail Produk</h4>
			<div class="site-pagination">
				<a class="text-white" href="index.php">Home</a> /
				<a class="text-white" href="#">Detail Produk</a>
			</div>
		</div>
	</div> -->
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
		<!--	<div class="back-link">
				<a href="./category.php"> &lt;&lt; Back to Category</a>
			</div> -->
			<div class="row">
				<?php
				include "koneksi.php";
				$id_produk=$koneksi->query($_GET['id']);
				$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
				$pecah=$ambil->fetch_assoc();

				//echo "<pre>";
				//print_r($pecah);
				//echo "</pre>";
				?>
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img style="width: 400px; height: 400px;"  src="../assets/foto_produk/<?php echo $pecah['foto_produk'];?>" alt="">
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-price"><?php echo $pecah['nama_produk'];?></h2>
					<!-- <h3 class="p-price">Rp. <?php //echo number_format($pecah['harga_produk']);?></h3> -->
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<?php echo $pecah['deskripsi_produk'];?> 

								</div>
							</div><p></p>
							<span class="text-dark"> Untuk pembelian, silakan klik tombol "Beli" di bawah ini</span> 
						</div>
						<!--<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div> -->
					</div>
					<?php 
						$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

						// include "koneksi.php";
						// $nama_produk=$koneksi->query($_GET['nama_produk']);
						// $ambil=$koneksi->query("SELECT * FROM produk WHERE nama_produk='$_GET[nama_produk]'");
						// $pecah=$ambil->fetch_assoc();

					?>
					<div class="social-sharing">
						<a href="<?= $pecah['link_produk']?>" class="btn btn-success" >
							<i class="fas fa-shopping-cart text-white"></i>
							<span class="text-light">Beli</span>
						</a>


						
						<!-- <a href="mailto:intanayupltnm@gmail.com" class="email"><i class="fa fa-envelope text-dark"></i><span class="text-dark"> e-mail</span></a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->

	<!-- RELATED PRODUCTS section end -->


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
