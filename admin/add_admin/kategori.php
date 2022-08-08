<?php
include('../koneksi.php');
$kategori = $_POST['kategori'];

$result = $koneksi->query("INSERT INTO `kategori` (`id_kategori`, `kategori`) 
								VALUES (NULL, '" . $kategori . "');");
if (!$result) {
    echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
    exit();
} else {
    header('Location: kategori.php');
}
header('Location: ../admin_kategori.php');
