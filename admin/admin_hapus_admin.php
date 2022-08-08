<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM user WHERE id_user=$id");

header("Location:admin_admin.php");

