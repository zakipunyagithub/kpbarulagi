<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk=$id");

header("Location:karyawan_produk.php");
