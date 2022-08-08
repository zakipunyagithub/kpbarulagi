<?php include("../templates/admin_header.php"); ?>
<?php include("../templates/admin_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/admin_auth_header.php"); ?>
<?php include("koneksi.php"); ?>

<!-- DataTables Ex ample -->


<div class="card mb-3">
    <div class="card-header">
        <a href="admin_link_youtube.php">
            <button class="btn btn-primary" name="ubah">Kembali ke Link Youtube</button>
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">Edit Link Youtube</div>
                    <div class="card-body">
                       <form action="" method="post" enctype="multipart/form-data">
                                
                                    <!-- <div class="form-group">
                                        <input type="file" name="foto" class="form-control" placeholder=" kategori" required>
                                    </div>  

                                    <div class="form-group">
                                        <select class="form-control" name="arah" required>
                                            <option>Pilih Arah Foto</option>
                                            <option value="">Kanan</option>
                                            <option value="order-lg-2">Kiri</option>
                                        </select>
                                    </div> -->

                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM link_youtube WHERE id='$_GET[id]'");
                                    $pecah = $ambil->fetch_assoc();

                                    // echo "<pre>";
                                    // print_r($pecah);
                                    // echo "</pre>"; 
                                    ?>

                                    <div class="form-group">
                                        
                                        <td>Link Youtube</td>
                                        <td>
                                            <textarea class="form-control" name="link_youtube"><?php echo $pecah['link_youtube']; ?></textarea>
                                           
                                      <!-- <textarea id="editor" name="link_youtube" placeholder="Masukan Link Youtube Di Sini"></textarea> -->
                                    </div>

                                    <div class="form-group">
                                       
                                        <td>Judul Youtube</td>
                                        <td><input class="form-control" type="text" name="judul_youtube" value="<?php echo $pecah['judul_youtube']; ?>"></td>

                                      <!-- <textarea id="editor" name="judul_youtube" placeholder="Masukan Judul Youtube Di Sini"></textarea> -->
                                    </div>

                                    <div class="form-group">
                                        <td>Deskripsi Video YouTube</td>
                                      <textarea id="editor" name="keterangan_youtube">
                                          <?php echo $pecah['keterangan_youtube']; ?>
                                      </textarea>
                                    </div>
                            
                            <div class="box-footer">
                                <button class="btn btn-primary" name="ubah">Update/Ubah</button>
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
$link_youtube = $_POST['link_youtube'];
$judul_youtube = $_POST['judul_youtube'];
$keterangan_youtube = $_POST['keterangan_youtube'];

$ganti = str_replace(['watch?v=', 'shorts/'], "embed/", $link_youtube);
// $ganti = str_replace("watch?v=", "embed/", $link_youtube);
// $ganti2 = str_replace("/shorts/", "embed/", $link_youtube);

$insert = mysqli_query($koneksi, "UPDATE link_youtube SET link_youtube='$ganti', judul_youtube='$judul_youtube', keterangan_youtube='$keterangan_youtube' WHERE id='$_GET[id]'");
 echo "<script>location='admin_link_youtube.php';</script>";
//redirect('../link_youtube.php');

// if (isset($_POST['save'])){
//     $query = "INSERT INTO link_youtube VALUES ('', '$_POST[link_youtube]', '$_POST[judul_youtube]', '$_POST[keterangan_youtube]')"
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