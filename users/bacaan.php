
    <!-- Navbar -->

    <?php include 'komponen/header.php';?>
    <?php include 'komponen/navbar.php';?>


    <!-- Category section -->
    <section class="hero-section">
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
		        <h4 class="text-white text-center">Halaman Bacaan</h4>
				<div class="site-pagination text-center">
					<a class="text-white" href="index.php">Home</a> /
					<a class="text-white" href="bacaan.php">Bacaan</a> 
				</div>
		    </div>
		    <?php }?>
		</div>

		
		<div class="container">
			<h3 class="text-center"> Silakan Membaca Berbagai Bacaan Dari Kami </h3>
			<br>
			<div class="row">
				<div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php 
							include "koneksi.php";
							$ambil=$koneksi->query("SELECT * FROM bacaan ORDER BY bacaan.id_bacaan DESC");
							while($pecah = $ambil->fetch_assoc()){
						?>
						<div class="col-lg-6 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<img style="width: 550px; height: 380px;" src="../assets/foto_bacaan/<?php echo $pecah['foto_bacaan'];?>" alt="">
										<!-- <div class="social-sharing">
											
										</div> -->
								</div>
								<div class="pi-text">
									<!-- <h6>Rp. <?php //echo number_format($pecah['harga_produk']);?></h6> -->
									<h5><?php echo substr($pecah['judul_bacaan'], 0,30) ;?> ....</h5>
									<p><?php echo substr($pecah['bacaan'], 0,30);?> ....</p>
									<p>ditulis pada tanggal <?php echo $pecah['tanggal_bacaan']; ?> </p>
									<a href="detail_bacaan.php?&id=<?php echo $pecah['id_bacaan']; ?>" class="btn btn-success">
											<!-- <i class="fas fa-eye"></i> -->
										<span>Baca Lebih Lanjut</span>
									</a>
								</div>
								<br>
								<br>
								<br>
							</div>
						</div>
						<?php } ?>
							
					</div>
				</div>
			</div>
		</div>	
    </section>
	<!-- Category section end -->



	<!-- <div class="page-top-info set-bg" data-setbg="../assets/img/latarbmujamu.png">
		<div class="container">
			<h4 class="text-white">Halaman Produk</h4>
			<div class="site-pagination">
				<a class="text-white" href="index.php">Home</a> /
				<a class="text-white" href="product.php">Produk</a> 
			</div>
		</div>
	</div> -->
	<!-- Page info end -->




	<!-- Footer section -->

	<!-- Footer section end -->


	<br>
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



