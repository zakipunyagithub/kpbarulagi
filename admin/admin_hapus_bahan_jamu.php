<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM bahan_jamu WHERE id=$id");

header("Location:admin_bahan_jamu.php");
