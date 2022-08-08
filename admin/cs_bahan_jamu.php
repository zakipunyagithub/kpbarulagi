<?php include("../templates/cs_header.php"); ?>
<?php include("../templates/cs_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/cs_auth_header.php"); ?>
<?php include("koneksi.php"); ?>

<!-- DataTables Ex ample -->


<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-fw fa-chart-area"></i>
        Data Informasi Bahan Jamu
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">Tambah Bahan Jamu</div>
                    <div class="card-body">
                       <form action="" method="post" enctype="multipart/form-data">
                                
                                    <div class="form-group">
                                        <p>Foto</p>
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
                                        <p>Isi</p>
                                        <textarea id="editor" name="isi" placeholder="Masukan Informasi Jamu Disini"></textarea>
                                    </div>
                            
                            <div class="box-footer">
                                <button class="btn btn-primary" name="save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Isi</th>
                            <th>Arah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Isi</th>
                            <th>Arah</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM bahan_jamu ORDER BY id DESC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $nomor; ?></td>
                                <td>
                                    <img src="../assets/bahan_jamu/<?php echo $pecah['foto'] ?>" width="200" height="200">
                                </td>
                                <td><?= $pecah['isi']; ?></td>
                                <td>
                                    <?php if($pecah['arah']=="order-lg-2"){?>
                                        Kiri
                                    <?php }else {?>
                                        kanan
                                    <?php }?>
                                </td>
                                <td>
                                    <a class="badge badge-danger" href="cs_edit_bahan_jamu.php?id=<?php echo $pecah['id']; ?>">edit
                                    </a>
                                    <a class="badge badge-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?')" href="cs_hapus_bahan_jamu.php?id=<?php echo $pecah['id']; ?>">hapus</a>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer small text-muted">
        
    </div>
</div>

<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../assets/bahan_jamu/" . $nama);
    $query = "INSERT INTO bahan_jamu  VALUES ('','$_POST[arah]','$_POST[isi]','$nama')";

    if (mysqli_query($koneksi, $query)) {
        echo "<meta http-equiv='refresh' content='1;url=cs_bahan_jamu.php'>";
    } else {
        echo "<meta http-equiv='refresh' content='1;url=cs_bahan_jamu.php'>";
    }
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


<?php include("../templates/cs_footer.php"); ?>