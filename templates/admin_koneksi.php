<?php

$koneksi = mysqli_connect("localhost", "root", "123456789", "kpraktek");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$_SESSION['judul'] = 'Login page';
