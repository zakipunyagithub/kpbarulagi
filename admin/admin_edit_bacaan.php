<?php include("../templates/admin_header.php"); ?>
<?php include("../templates/admin_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/admin_auth_header.php"); ?>
<?php include("koneksi.php"); ?>

<!-- DataTables Ex ample -->


<div class="card mb-3">
    <div class="card-header">
        <a href="admin_bacaan.php">
            <button class="btn btn-primary" name="ubah">Kembali ke Bacaan</button>
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">Edit Bacaan</div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <?php
                                        $ambil = $koneksi->query("SELECT * FROM bacaan WHERE id_bacaan='$_GET[id]'");
                                        $pecah = $ambil->fetch_assoc();

                                        // echo "<pre>";
                                        // print_r($pecah);
                                        // echo "</pre>"; 
                                    ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Bacaan</label>
                                            <input type="text" class="form-control" name="judul_bacaan" value="<?php echo $pecah['judul_bacaan']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Bacaan Dibuat</label>
                                            <input type="date" class="form-control" name="tanggal_bacaan" value="<?php echo $pecah['tanggal_bacaan']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Bacaaan</label>
                                            <textarea id="editor" name="bacaan">
                                                <?php echo $pecah['bacaan']; ?>
                                            </textarea>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Harga (Rp)</label>
                                            <input type="number" class="form-control" name="harga">
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Foto Bacaan</label>
                                            <input type="file" class="form-control" name="foto_bacaan" required>
                                            <img src="../assets/foto_bacaan/<?php echo $pecah['foto_bacaan'] ?>" width="490" height="380">
                                        </div>
                                        <button class="btn btn-primary" name="ubah">Simpan</button>
                                        <!-- <a href="admin_produk.php" class="btn btn-danger"> Batal </a> -->
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="card-footer small text-muted">
        
    </div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto_bacaan']['name'];
    $lokasifoto = $_FILES['foto_bacaan']['tmp_name'];
    //jika foto di rubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../assets/foto_bacaan/$namafoto");

        $koneksi->query("UPDATE bacaan SET judul_bacaan='$_POST[judul_bacaan]',tanggal_bacaan='$_POST[tanggal_bacaan]',bacaan='$_POST[bacaan]',foto_bacaan='$namafoto' WHERE id_bacaan='$_GET[id]'");
    } else {
        $koneksi->query("UPDATE bacaan SET judul_bacaan='$_POST[judul_bacaan]',tanggal_bacaan='$_POST[tanggal_bacaan]',bacaan='$_POST[bacaan]',foto_bacaan='$namafoto' WHERE id_bacaan='$_GET[id]'");
    }
    echo "<script>location='admin_bacaan.php';</script>";
}
?>


<script src="../assets/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        } )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( err => {
            console.error( err.stack );
        } );
</script>


<?php include("../templates/admin_footer.php"); ?>