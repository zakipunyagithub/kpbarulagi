
<!-- Header section -->

<header class="header-section">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 text-center text-lg-left">
					<!-- logo -->
				<!--	<a href="index.php" class="site-logo">
						<img src="img/logo.png" alt="">
					</a>
				</div>
				<div class="col-xl-6 col-lg-5">
					<form class="header-search-form">
						<input type="text" placeholder="Search">
						<button><i class="flaticon-search"></i></button>
					</form>
				</div> -->

			</div>
		</div>
	</div>
	<nav class="main-navbar">
		<div class="container">
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">Produk</a></li>
				<li><a href="#">Kategori</a>
					<ul class="sub-menu">
					<?php 
						include "koneksi.php";
						$ambil=$koneksi->query("SELECT * FROM kategori");
						while($pecah = $ambil->fetch_assoc()){ 
					?>
						<li><a href="category.php?id=<?php echo $pecah['id_kategori']; ?>"><?php echo $pecah['kategori']; ?></a></li>
					<?php } ?>
					</ul>
				</li>
			<!--	<li><a href="#">Blog</a></li> -->
				<li><a href="contact.php">Kontak</a></li>
			</ul>
		</div>
	</nav>
</header>
<!-- Header section end -->