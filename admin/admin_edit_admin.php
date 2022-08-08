<?php include("../templates/admin_header.php"); ?>
<?php include("../templates/admin_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="admin_admin.php">
            <button class="btn btn-primary" name="ubah">Kembali ke Admin</button>
        </a>
    </div>

    <div class="card-body">
        <?php
        $ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id]'");
        $pecah = $ambil->fetch_assoc();

        //echo "<pre>";
        //print_r($pecah);
        //echo "</pre>";
        ?>

        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $pecah['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" value="<?php echo $pecah['password']; ?>">
                        <!-- <input type="hidden" name="id_user" value="$_GET[id]"> -->
                    </div>
                    <div>
                        <label>Level</label>
                        <select class="form-control" name="level">
                            <option value="<?php echo $pecah['level']; ?>"><?php echo $pecah['level']; ?></option>
                            <option value="admin">Admin</option>
                            <option value="karyawan">Karyawan</option>
                            <option value="cs">CS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control" value="<?php echo $pecah['nama_lengkap']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $pecah['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="telepon" class="form-control" value="<?php echo $pecah['no_hp']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="10"><?php echo $pecah['alamat']; ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <img src="../assets/foto_admin/<?php echo $pecah['foto_admin'] ?>" width="490" height="400">
                    </div>
                    <div>
                        <label>Ganti Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <br>
                    <button class="btn-block btn btn-primary" name="ubah">Ubah</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['ubah'])) {
            $namafoto = $_FILES['foto']['name'];
            $lokasifoto = $_FILES['foto']['tmp_name'];
            //jika foto di rubah
            if (!empty($lokasifoto)) {
                move_uploaded_file($lokasifoto, "../assets/foto_admin/$namafoto");

                $koneksi->query("UPDATE user SET username='$_POST[username]',password='$_POST[password]',level='$_POST[level]',nama_lengkap='$_POST[namalengkap]',email='$_POST[email]',no_hp='$_POST[telepon]',foto_admin='$namafoto',alamat='$_POST[alamat]' WHERE id_user='$_GET[id]'");
            } else {
                $koneksi->query("UPDATE user SET username='$_POST[username]',password='$_POST[password]',level='$_POST[level]',nama_lengkap='$_POST[namalengkap]',email='$_POST[email]',no_hp='$_POST[telepon]',foto_admin='$namafoto',alamat='$_POST[alamat]' WHERE id_user='$_GET[id]'");
            }
            echo "<script>location='admin_admin.php';</script>";
        }
        ?>
        

    </div>
    <div class="card-footer small text-muted"></div>
</div>



<?php include("../templates/admin_footer.php"); ?>