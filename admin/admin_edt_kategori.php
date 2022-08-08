<?php include("../templates/admin_header.php"); ?>
<?php include("../templates/admin_topbar.php"); ?>
<?php //include("../templates/admin_sidebar.php"); ?>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    $kategori = $_POST['kategori'];

    $ambil = $koneksi->query("UPDATE kategori SET kategori='$kategori' WHERE id_kategori=$id");

    header("Location: admin_kategori.php");
    $_SESSION['edit'] = 1;
}
?>

<?php
$id = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM kategori WHERE id_kategori=$id"); ?>
<?php while ($pecah = $ambil->fetch_assoc()) { ?>
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="admin_kategori.php">
            <button class="btn btn-primary" name="ubah">Kembali ke Kategori</button>
        </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-login mx-auto mt-6">
                        <div class="card-header">Edit Kategori</div>
                        <div class="card-body">
                            <form role="form" method="post" action="admin_edt_kategori.php">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                            <input type="text" id="kategori" name="kategori" class="form-control" placeholder=" kategori" value="<?php echo $pecah["kategori"]; ?>" required>
                                            <label for="kategori">Kategori</label>
                                        </div>
                                    </div>

                                </div><!-- /.box-body -->
                                <div class="box-footer">

                                    <input type="submit" name="update" class="btn-block btn btn-outline-primary btn-sm" value="edit"></input>
                                </div>
                            </form>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>

    <?php include("../templates/admin_footer.php"); ?>