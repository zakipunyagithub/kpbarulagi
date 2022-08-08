
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
	        <h4 class="text-white text-center">Halaman Kontak</h4>
			<div class="site-pagination text-center">
				<a class="text-white" href="index.php">Home</a> /
				<a class="text-white" href="kontak.php">Kontak</a> 
			</div>
	    </div>
	    <?php }?>
	</div>


	<!-- <div class="page-top-info set-bg" data-setbg="../assets/img/latarbmujamu.png">
		<div class="container">
			<h4 class="text-white">Halaman Kontak</h4>
			<div class="site-pagination">
				<a class="text-white" href="index.php">Home</a> /
				<a class="text-white" href="contact.php">Kontak</a>
			</div>
		</div>
	</div> -->
	<!-- Page info end -->


	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 contact-info">
					<?php $ambil=$koneksi->query("SELECT * FROM tentang");?>
					<?php while($pecah = $ambil->fetch_assoc()){?>
					<img src="../assets/foto2_eksternal/<?php echo $pecah['foto'];?>" id="id_toko" width="300" height="150">
					<p></p>
					<h3>Mujamu Premio</h3>
					<p><?php echo $pecah['tentang_toko']?></p>
					<p>Buka setiap hari senin - sabtu </p>
					<p>Pukul 08.00 - 16.00 wib </p>
					<p><?php echo $pecah['alamat']; ?></p>
					<p><?php echo $pecah['no_tlp']; ?></p>
					<!-- <img src="<?php// echo $pecah['foto']; ?>"> -->


					<?php } ?>
						<!--<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>-->
						<!-- <a href=" https://wa.me/6285745333882?text=Halo,%20Saya%20Boleh%20Tanya-tanya%20soal%20Produk%20Jamu%20dari%20Mujamu%20Premio%3F" class="whatsapp"><i class="fab fa-whatsapp"></i><span>whatsapp</span></a>
						<a href="mailto:emailnyamujamupremio1@gmail.com" class="email"><i class="fas fa-envelope mb-4"></i></a> -->
						<h6 >Masukan Data Anda Agar bisa Mengirim Komentar :</h6>
							<form method="post"class="contact-form">
							<input type="text" name="nama" placeholder="Nama">
							<input type="email" name="email" placeholder="E-mail">
							<textarea name="komentar" placeholder="Pesan"></textarea>
							<button class="site-btn mb-5" name="save">Kirim</button>
							</form>	
			</div>
				<div class="col-md-6">
					<?php
					if (isset($_POST['save'])){

						$koneksi->query("INSERT INTO pesan (nama,email,komentar) VALUES ('$_POST[nama]','$_POST[email]','$_POST[komentar]')");
					}
					?> 

					</p>
					<?php $nomor=1 ?>
				<?php $ambil=$koneksi->query("SELECT * FROM tentang");?>
				<?php while($pecah = $ambil->fetch_assoc()){?>
					<div class="col-lg-6">
						<?php echo $pecah['maps']; ?>
					</div>
				<?php $nomor++; ?>
				<?php } ?>	
					
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->


	<!-- Related product section -->
	
	<!-- Related product section end -->


<!-- Footer section -->
		<?php
		include "../view/view-footer.php";
	?>

	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/fontawesome/js/fontawesome.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.slicknav.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/jquery.nicescroll.min.js"></script>
	<script src="../assets/js/jquery.zoom.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/js/main.js"></script>

	</body>
</html>
