<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM bacaan WHERE id_bacaan=$id");

header("Location:karyawan_bacaan.php");

