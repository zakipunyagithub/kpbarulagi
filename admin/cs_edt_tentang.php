<?php include("../templates/cs_header.php"); ?>
<?php include("../templates/cs_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>

<?php
$ambil = $koneksi->query("SELECT * FROM tentang WHERE id_toko='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

//echo "<pre>";
//print_r($pecah);
//echo "</pre>";
?>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <a href="cs_tentang.php">
            <button class="btn btn-primary" name="ubah">Kembali ke Kontak</button>
        </a>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" style="text-align: justify; font-family: time">
                        <label>Tentang Toko</label>
                        <textarea name="nama" class="form-control" rows="10"><?php echo $pecah['tentang_toko']; ?></textarea>
                    </div>
                    <div class="form-group" style="text-align: justify; font-family: time">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="5"><?php echo $pecah['alamat']; ?></textarea>
                    </div>
                    <div class="form-group" style="text-align: justify; font-family: time">
                        <label>No Telepon</label>
                        <input type="text" name="notlp" class="form-control" value="<?php echo $pecah['no_tlp']; ?>">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group" style="text-align: justify; font-family: time">
                        <label>Maps</label>
                        <textarea name="maps" class="form-control" rows="5"><?php echo $pecah['maps']; ?></textarea>
                    </div>
                    <div class="form-group" style="text-align: justify; font-family: time">
                        <label>Logo</label>
                        <input type="file" name="foto" class="form-control" required>
                        <img src="../assets/foto2_eksternal/<?php echo $pecah['foto']; ?>" width="200" height="200">
                    </div>
                    <button class="btn btn-primary btn-block" name="ubah">Ubah</button>
                </div>
            </div>
        </form>


        <div class="card-footer small text-muted"></div>
    </div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $foto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    //jika foto di rubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../assets/foto2_eksternal/$foto");

        $koneksi->query("UPDATE tentang SET tentang_toko='$_POST[nama]',alamat='$_POST[alamat]',no_tlp='$_POST[notlp]',maps='$_POST[maps]',foto='$foto' WHERE id_toko='$_GET[id]'");
    } else {
        $koneksi->query("UPDATE tentang SET tentang_toko='$_POST[nama]',alamat='$_POST[alamat]',no_tlp='$_POST[notlp]',maps='$_POST[maps]',foto='$foto' WHERE id_toko='$_GET[id]'");
    }
    echo "<script>location='cs_tentang.php';</script>";
}
?>

<?php
// if (isset($_POST['ubah'])) {
//     $namafoto = $_FILES['foto']['name'];
//     $lokasifoto = $_FILES['foto']['tmp_name'];
//     //jika foto di rubah
//     if (!empty($lokasifoto)) {
//         move_uploaded_file($lokasifoto, "../assets/foto2_eksternal/$namafoto");

//         $koneksi->query("UPDATE tentang SET tentang_toko='$_POST[nama]',alamat='$_POST[alamat]',no_tlp='$_POST[notlp]',maps='$_POST[maps]',foto='$namafoto' WHERE id_toko='$_GET[id]'");
//     } else {
//         $koneksi->query("UPDATE tentang SET tentang_toko='$_POST[nama]',alamat='$_POST[alamat]',no_tlp='$_POST[notlp]',maps='$_POST[maps]',foto='$namafoto' WHERE id_toko='$_GET[id]'");
//     }
//     echo "<script>location='admin_tentang.php';</script>";
?>
<?php include("../templates/cs_footer.php"); ?>