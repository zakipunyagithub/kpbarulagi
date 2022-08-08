
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
	        <h4 class="text-white text-center">Halaman Detail Bacaan</h4>
			<div class="site-pagination text-center">
				<a class="text-white" href="index.php">Home</a> /
				<a class="text-white" href="bacaan.php">Bacaan</a> 
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
				$ambil=$koneksi->query("SELECT * FROM bacaan WHERE id_bacaan='$_GET[id]'");
				$pecah=$ambil->fetch_assoc();

				//echo "<pre>";
				//print_r($pecah);
				//echo "</pre>";
				?>
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img style="width: 800px; height: 600px;"  src="../assets/foto_bacaan/<?php echo $pecah['foto_bacaan'];?>" alt="">
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-price text-justify"><?php echo $pecah['judul_bacaan'];?></h2>
					<h6>Bacaan ditulis pada tanggal <?php echo $pecah['tanggal_bacaan'];?></h3>
					<hr>
					<div class="panel">
						<div class="panel-body text-justify">
							<p><?php echo substr($pecah['bacaan'], 0,1310);?> ....</p>
						</div>
					</div>
				</div>
				<div class="text-justify">
					<p class="text-justify"><?php echo substr($pecah['bacaan'], 1311);?></p>
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
