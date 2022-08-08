<?php 
include '../koneksi.php';
// $username = $_POST['username'];
// $password = $_POST['password'];
// $level = $_POST['level'];

 
// $sql = "INSERT INTO user (username, password, level) VALUES ('$username', '$password', '$level')";
// if (mysqli_query($koneksi, $sql)) {
//       header("location:../admin_admin.php");
// } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
// }


if (isset($_POST['tambah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "../../assets/foto_admin/$namafoto");
    $query = "INSERT INTO user VALUES ('','$_POST[username]','$_POST[password]','$_POST[level]','$_POST[namalengkap]','$namafoto','$_POST[email]','$_POST[telepon]','$_POST[alamat]')";

    	if (mysqli_query($koneksi, $query)) {
	        echo "<meta http-equiv='refresh' content='1;url=../admin_admin.php'>";
	    } else {
	        echo "<meta http-equiv='refresh' content='1;url=../admin_admin.php'>";
	    }
    }
        // $koneksi->query("UPDATE user SET username='$_POST[username]',password='$_POST[password]',level='$_POST[level]',nama_lengkap='$_POST[namalengkap]',email='$_POST[email]',no_hp='$_POST[telepon]',foto_admin='$namafoto',alamat='$_POST[alamat]' WHERE id_user='$_GET[id]'");
        // } else {
        //     $koneksi->query("UPDATE user SET username='$_POST[username]',password='$_POST[password]',level='$_POST[level]',nama_lengkap='$_POST[namalengkap]',email='$_POST[email]',no_hp='$_POST[telepon]',foto_admin='$namafoto',alamat='$_POST[alamat]' WHERE id_user='$_GET[id]'");
        // }
        // echo "<script>location='admin_admin.php';</script>";
?>

<?php
// if (isset($_POST['save'])) {
//     $nama = $_FILES['foto']['name'];
//     $lokasi = $_FILES['foto']['tmp_name'];
//     move_uploaded_file($lokasi, "../assets/foto_produk/" . $nama);
//     $query = "INSERT INTO produk VALUES ('','$_POST[nama]','$_POST[id_kategori]','$_POST[harga]','$nama','$_POST[deskripsi]')";

//     if (mysqli_query($koneksi, $query)) {
//         echo "<meta http-equiv='refresh' content='1;url=admin_produk.php'>";
//     } else {
//         echo "<meta http-equiv='refresh' content='1;url=admin_produk.php'>";
//     }
// }
?>