<?php include("../templates/cs_header.php"); ?>
<?php include("../templates/cs_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/cs_auth_header.php"); ?>


<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Kontak <!--<a class="btn btn-small btn-primary float-right" href="tmb_tentang.php">Tambah</a> --></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama toko</th>
                        <th>Alamat</th>
                        <th>No Tlp</th>
                        <th>Maps</th>
                        <th>Logo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama toko</th>
                        <th>Alamat</th>
                        <th>No Tlp</th>
                        <th>Maps</th>
                        <th>Logo</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM tentang"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $nomor; ?></td>
                            <td><?= $pecah['tentang_toko']; ?></td>
                            <td><?= $pecah['alamat']; ?></td>
                            <td><?= $pecah['no_tlp']; ?></td>
                            <td><?= $pecah['maps']; ?></td>
                            <td>
                                <img src="../assets/foto2_eksternal/<?php echo $pecah['foto']; ?>" width="100" height="100">
                            </td>
                            <td>
                                <a class="badge badge-danger" href="cs_edt_tentang.php?id=<?php echo $pecah['id_toko']; ?>">edit</a>
                                <!-- <a class="badge badge-warning" href="hps_tentang.php?id=<?php //echo $pecah['id_toko']; ?>">hapus</a> -->
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