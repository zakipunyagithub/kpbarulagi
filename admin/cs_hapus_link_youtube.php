<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "DELETE FROM link_youtube WHERE id='$id' ");

header("Location:cs_link_youtube.php");
