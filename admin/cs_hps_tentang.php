<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM tentang WHERE id_toko=$id");

header("Location:cs_tentang.php");

