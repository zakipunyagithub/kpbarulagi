<?php include("../templates/admin_header.php"); ?>
<?php include("../templates/admin_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/admin_auth_header.php"); ?>
<?php include("koneksi.php"); ?>

<!-- DataTables Ex ample -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-fw fa-chart-area"></i>
        Data Kategori</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $ambil = $koneksi->query("SELECT * FROM kategori ORDER BY kategori.id_kategori DESC"); ?>
                            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $nomor; ?></td>
                                    <td><?= $pecah['kategori']; ?></td>
                                    <td>
                                        <a class="badge badge-danger" href="admin_edt_kategori.php?id=<?php echo $pecah['id_kategori']; ?>">edit</a>
                                        <a class="badge badge-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?')" href="admin_hps_kategori.php?id=<?php echo $pecah['id_kategori']; ?>">hapus</a>
                                    </td>
                                </tr>
                                <?php $nomor++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-login mx-auto mt-6">
                    <div class="card-header">Tambah Kategori</div>
                    <div class="card-body">
                        <form role="form" method="post" action="add_admin/kategori.php">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <input type="text" id="kategori" name="kategori" class="form-control" placeholder=" kategori" required>
                                        <label for="kategori">Kategori</label>
                                    </div>
                                </div>

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn-block btn btn-outline-primary btn-sm">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer small text-muted"></div>
</div>

<?php include("../templates/admin_footer.php"); ?>