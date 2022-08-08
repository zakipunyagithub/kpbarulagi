<?php include("../templates/cs_header.php"); ?>
<?php include("../templates/cs_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/cs_auth_header.php"); ?>


<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-fw fa-shopping-bag"></i>
        Data Produk
        <a class="btn btn-small btn-primary float-right" href="cs_tmb_produk.php">Tambah</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama produk</th>
                        <th>Kategori</th>
                        <!-- <th>Harga</th> -->
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Link Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama produk</th>
                        <th>Kategori</th>
                        <!-- <th>Harga</th> -->
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Link Produk</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON kategori.id_kategori=produk.id_kategori ORDER BY produk.id_produk DESC"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $nomor; ?></td>
                            <td><?= $pecah['nama_produk']; ?></td>
                            <td><?= $pecah['kategori']; ?></td>
                            <td><?php echo substr($pecah['deskripsi_produk'], 0,40);?> ....</td>
                            <td>
                                <img src="../assets/foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100" height="100">
                            </td>
                            <td><?= $pecah['link_produk']; ?></td>

                            <td>
                                <a class="badge badge-danger" href="cs_edt_produk.php?id=<?php echo $pecah['id_produk']; ?>">edit</a>
                                <a class="badge badge-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?')" href="cs_hps_produk.php?id=<?php echo $pecah['id_produk']; ?>">hapus</a>
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