<?php include("../templates/cs_header.php"); ?>
<?php include("../templates/cs_topbar.php"); ?>
<?php //include("../templates/sidebar.php"); ?>
<?php require("../templates/cs_auth_header.php"); ?>

<form method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label>Nama Toko</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" name="alamat" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label>No Tlp</label>
            <input type="text" class="form-control" name="notlp">
        </div>
        <div class="form-group">
            <label>Maps</label>
            <textarea class="form-control" name="maps" rows="10"></textarea>
        </div>
    </div>
    <div class="col-md-6">
        <button class="btn btn-primary" name="save">Simpan</button>
    </div>
</form>

<?php
if (isset($_POST['save'])) {
  
    $query = "INSERT INTO tentang VALUES ('','$_POST[tentang_toko]','$_POST[alamat]','$_POST[no_tlp]','$_POST[maps]')";

    if (mysqli_query($koneksi, $query)) {
        echo "<meta http-equiv='refresh' content='1;url=cs_tentang.php'>";
    } else {
        echo "<meta http-equiv='refresh' content='1;url=cs_tentang.php'>";
    }
}
?>

<?php include("../templates/cs_footer.php"); ?>