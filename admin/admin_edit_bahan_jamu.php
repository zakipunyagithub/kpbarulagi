<?php include("../templates/admin_header.php"); ?>
<?php include("../templates/admin_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/admin_auth_header.php"); ?>
<?php include("koneksi.php"); ?>

<!-- DataTables Ex ample -->


<div class="card mb-3">
    <div class="card-header">
        <a href="admin_bahan_jamu.php">
            <button class="btn btn-primary" name="ubah">Kembali ke Bahan Jamu</button>
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">Edit Bahan Jamu</div>
                    <?php
                        $ambil = $koneksi->query("SELECT * FROM bahan_jamu WHERE id='$_GET[id]'");
                        $pecah = $ambil->fetch_assoc();
                    ?>
                    <div class="card-body">
                       <form action="" method="post" enctype="multipart/form-data">
                                
                                    <div class="form-group">
                                        <p>Foto</p>
                                        <input type="file" name="foto" class="form-control" placeholder="" required>
                                        <img src="../assets/bahan_jamu/<?php echo $pecah['foto'] ?>" width="490" height="380">
                                    </div>
                                    
                                    <div class="form-group">
                                        <select class="form-control" name="arah" required>
                                            <option value="<?php echo $pecah['id']; ?>">Pilih Arah Foto</option>
                                            <option value="">Kanan</option>
                                            <option value="order-lg-2">Kiri</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                       <p>Isi</p>
                                      <textarea id="editor" name="isi">
                                          <?php echo $pecah['isi']; ?>
                                      </textarea>
                                    </div>
                            
                            <div class="box-footer">
                                <button class="btn btn-primary" name="ubah">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <hr>
            
        </div>
    </div>
    <div class="card-footer small text-muted"></div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $foto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    //jika foto di rubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../assets/bahan_jamu/$foto");

        $koneksi->query("UPDATE bahan_jamu SET arah='$_POST[arah]',isi='$_POST[isi]',foto='$foto' WHERE id='$_GET[id]'");
    } else {
        $koneksi->query("UPDATE bahan_jamu SET arah='$_POST[arah]',isi='$_POST[isi]',foto='$foto' WHERE id='$_GET[id]'");
    }
    echo "<script>location='admin_bahan_jamu.php';</script>";
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