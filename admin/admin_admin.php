<?php include("../templates/admin_header.php"); ?>
<?php include("../templates/admin_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/admin_auth_header.php"); ?>


<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Admin
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="add_admin/tambah_user.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" >
                    </div>
                    <div>
                        <label>Level</label>
                        <select class="form-control" name="level">
                            <option value="">Level</option>
                            <option value="admin">Admin</option>
                            <option value="karyawan">Karyawan</option>
                            <option value="cs">CS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon" class="form-control">
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ganti Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <br>
                    <button class="btn-block btn btn-primary" name="tambah">Tambah Admin Baru</button>
                </div>
            </div>
        </form>



        <hr>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>No Tlp</th>
                        <th>alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>No Tlp</th>
                        <th>Maps</th>
                        <th>Foto</th>
                        <th>No Tlp</th> 
                        <th>alamat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php $ambil = $koneksi->query("SELECT * FROM user"); ?>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $nomor; ?></td>
                            <td><?= $pecah['username']; ?></td>
                            <td><?= $pecah['password']; ?></td>
                            <td><?= $pecah['level']; ?></td>
                            <td><?= $pecah['nama_lengkap']; ?></td>
                            <td><?= $pecah['email']; ?></td>
                            <td><img src="../assets/foto_admin/<?php echo $pecah['foto_admin']; ?>" width="100" height="100"></td>
                            <td><?= $pecah['no_hp']; ?></td>
                            <td><?php echo substr($pecah['alamat'], 0,40);?> ....</td>
                            


                            <td>
                                <a class="badge badge-danger" href="admin_edit_admin.php?id=<?php echo $pecah['id_user']; ?>">edit</a>
                                <a class="badge badge-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus ini ?')" href="admin_hapus_admin.php?id=<?php echo $pecah['id_user']; ?>">hapus</a>
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

<?php include("../templates/admin_footer.php"); ?>