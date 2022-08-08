<?php include("../templates/karyawan_header.php"); ?>
<?php include("../templates/karyawan_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/karyawan_auth_header.php"); ?>
<?php include("koneksi.php"); ?>

<!-- DataTables Ex ample -->


<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-fw fa-chart-area"></i>
        Data Bacaan
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">Tambah Bacaan</div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Judul Bacaan</label>
                                            <input type="text" class="form-control" name="judul_bacaan">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Bacaan Dibuat</label>
                                            <input type="date" class="form-control" name="tanggal_bacaan">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Harga (Rp)</label>
                                            <input type="number" class="form-control" name="harga">
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Isi Bacaaan</label>
                                            <textarea id="editor" name="bacaan" placeholder="Masukan Paragraf Bacaan Di Sini"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Bacaan</label>
                                            <input type="file" class="form-control" name="foto_bacaan">
                                        </div>
                                        <button class="btn btn-primary" name="save">Simpan</button>
                                        <!-- <a href="admin_produk.php" class="btn btn-danger"> Batal </a> -->
                                    </div>
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
                            <th>Judul Bacaan</th>
                            <th>Tanggal Bacaan</th>
                            <th>Isi Bacaan</th>
                            <th>Foto Bacaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul Bacaan</th>
                            <th>Tanggal Bacaan</th>
                            <th>Isi Bacaan</th>
                            <th>Foto Bacaan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php $ambil = $koneksi->query("SELECT * FROM bacaan ORDER BY id_bacaan DESC"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $nomor; ?></td>
                                <td><?php echo substr($pecah['judul_bacaan'], 0,50) ;?> ....</td>
                                <td><?= $pecah['tanggal_bacaan']?></td>
                                <td><?php echo substr($pecah['bacaan'], 0,50);?> ..... </td>
                                <td>
                                    <img src="../assets/foto_bacaan/<?php echo $pecah['foto_bacaan']; ?>" width="150" height="150">
                                </td>
                                <td>
                                    <a class="badge badge-danger" href="karyawan_edit_bacaan.php?id=<?php echo $pecah['id_bacaan']; ?>">edit
                                    </a>
                                    <a class="badge badge-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?')" href="karyawan_hapus_bacaan.php?id=<?php echo $pecah['id_bacaan']; ?>">hapus</a>
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
    $nama = $_FILES['foto_bacaan']['name'];
    $lokasi = $_FILES['foto_bacaan']['tmp_name'];
    move_uploaded_file($lokasi, "../assets/foto_bacaan/" . $nama);
    $query = "INSERT INTO bacaan VALUES ('','$_POST[judul_bacaan]','$_POST[tanggal_bacaan]','$_POST[bacaan]','$nama')";

    if (mysqli_query($koneksi, $query)) {
        echo "<meta http-equiv='refresh' content='1;url=karyawan_bacaan.php'>";
    } else {
        echo "<meta http-equiv='refresh' content='1;url=karyawan_bacaan.php'>";
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


<?php include("../templates/karyawan_footer.php"); ?>