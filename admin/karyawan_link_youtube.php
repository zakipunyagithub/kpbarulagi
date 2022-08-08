<?php include("../templates/karyawan_header.php"); ?>
<?php include("../templates/karyawan_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/karyawan_auth_header.php"); ?>
<?php include("koneksi.php"); ?>

<!-- DataTables Ex ample -->


<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-fw fa-chart-area"></i>
        Link Youtube</div>
    <div class="card-body">
        <div class="row">
            <!-- <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">Tambah Link Youtube</div>
                    <div class="card-body">
                       <form action="" method="post" enctype="multipart/form-data">
                                
                                    <div class="form-group">
                                        <input type="file" name="foto" class="form-control" placeholder=" kategori" required>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="arah" required>
                                            <option>Pilih Arah Foto</option>
                                            <option value="">Kanan</option>
                                            <option value="order-lg-2">Kiri</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        
                                        <td>Link Youtube</td>
                                        <td><input type="text" name="link_youtube" placeholder="Masukan Link Youtube Di Sini"></td>

                                      <textarea id="editor" name="link_youtube" placeholder="Masukan Link Youtube Di Sini"></textarea>
                                    </div>

                                    <div class="form-group">
                                       
                                        <td>Judul Youtube</td>
                                        <td><input type="text" name="judul_youtube" placeholder="Masukan Judul Youtube Di Sini"></td>

                                      <textarea id="editor" name="judul_youtube" placeholder="Masukan Judul Youtube Di Sini"></textarea>
                                    </div>

                                    <div class="form-group">
                                       
                                      <textarea id="editor" name="keterangan_youtube" placeholder="Masukan Keterangan Youtube Di Sini"></textarea>
                                    </div>
                            
                            <div class="box-footer">
                                <button class="btn btn-primary" name="save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
            <hr>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Link Youtube</th>
                                <th>Judul Youtube</th>
                                <th>Deskripsi Video Youtube</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Link Youtube</th>
                                <th>Judul Youtube</th>
                                <th>Deskripsi Video Youtube</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM link_youtube ORDER BY id ASC"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $nomor; ?></td>
                                    <td>
                                        <iframe width="100%" height="200" src="<?= $pecah['link_youtube']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <?= $pecah['link_youtube']; ?>
                                    </td>
                                    <td><?= $pecah['judul_youtube']; ?></td>
                                    <td><?= $pecah['keterangan_youtube']; ?></td>
                                    <!-- <td>
                                        <?php //if($pecah['arah']=="order-lg-2"){?>
                                            Kiri
                                        <?php//}else {?>
                                            kanan
                                        <?php //}?>
                                    </td> -->
                                    <td>
                                        <a class="badge badge-danger" href="karyawan_edit_link_youtube.php?id=<?php echo $pecah['id']; ?>">edit</a>
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
    <div class="card-footer small text-muted"></div>
</div>



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


<?php include("../templates/karyawan_footer.php"); ?>