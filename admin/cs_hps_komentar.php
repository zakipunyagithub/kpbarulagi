<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM pesan WHERE id_pesan=$id");

header("Location:cs_komentar.php");

