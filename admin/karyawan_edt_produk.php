<?php include("../templates/karyawan_header.php"); ?>
<?php include("../templates/karyawan_topbar.php"); ?>
<?php //include("../templates/admin_sidebar.php"); ?>


<div class="card mb-3">
    <div class="card-header">
        <a href="karyawan_produk.php">
            <button class="btn btn-primary" name="ubah">Kembali ke Produk</button>
        </a>
    </div>

    <div class="card-body">

        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
                        $pecah = $ambil->fetch_assoc();

                        // echo "<pre>";
                        // print_r($pecah);
                        // echo "</pre>"; 
                        ?>
                        <label>Kategori</label>
                        <select class="form-control" name="id_kategori">
                            <option value="<?php echo $pecah['id_kategori']; ?>">Pilih</option>
                            <?php
                            $ambil = $koneksi->query("SELECT * FROM kategori");
                            while ($perkategori = $ambil->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $perkategori["id_kategori"] ?>">
                                    <?php echo $perkategori['kategori'] ?>
                                </option>
                            <?php }  ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ganti Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Ganti Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_produk']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ganti Link Produk</label>
                        <input type="text" name="link_produk" class="form-control" value="<?php echo $pecah['link_produk']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <img src="../assets/foto_produk/<?php echo $pecah['foto_produk'] ?>" width="490" height="380">
                    </div>
                    <div class="form-group">
                        <label>Ganti Foto</label>
                        <input type="file" name="foto" class="form-control" required>
                    </div>
                    <br>
                    <button class=" btn-block btn btn-primary" name="ubah">Ubah</button>
                </div>
            </div>
        </form>

    </div>
    <div class="card-footer small text-muted"></div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    //jika foto di rubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../assets/foto_produk/$namafoto");

        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',id_kategori='$_POST[id_kategori]',deskripsi_produk='$_POST[deskripsi]',foto_produk='$namafoto',link_produk='$_POST[link_produk]' WHERE id_produk='$_GET[id]'");
    } else {
        $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',id_kategori='$_POST[id_kategori]',deskripsi_produk='$_POST[deskripsi]',foto_produk='$namafoto',link_produk='$_POST[link_produk]' WHERE id_produk='$_GET[id]'");
    }
    echo "<script>location='karyawan_produk.php';</script>";
}
?>



<?php include("../templates/karyawan_footer.php"); ?>