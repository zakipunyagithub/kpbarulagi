<!--session_start();
$mysqli = mysqli_connect("localhost", "root", "", "kpraktek");
$_SESSION['judul'] = 'Login page';
// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
-->

<?php

$koneksi = mysqli_connect("localhost", "root", "1234567890", "kpraktek");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$_SESSION['judul'] = 'Login page';
