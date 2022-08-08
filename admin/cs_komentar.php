<?php include("../templates/cs_header.php"); ?>
<?php include("../templates/cs_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/cs_auth_header.php"); ?>


<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Buku Tamu</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM pesan ORDER BY pesan.id_pesan DESC"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $nomor; ?></td>
                            <td><?= $pecah['nama']; ?></td>
                            <td><?= $pecah['email']; ?></td>
                            <td><?= $pecah['komentar']; ?></td>
                            <td>
                                <a class="badge badge-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?')" href="cs_hps_komentar.php?id=<?php echo $pecah['id_pesan']; ?>">hapus</a>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted"></div> 
</div>

<?php include("../templates/cs_footer.php"); ?>