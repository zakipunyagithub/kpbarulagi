
<?php
session_start();
//koneksi database
$koneksi = mysqli_connect("localhost","root","1234567890","kpraktek");

if (!isset($_SESSION['user']))
{
  //echo "<script>window.alert('Anda Harus Login');</script>";
  //echo "<script>location='../admin/login.php';</script>";
  header('location:../admin/index.php');
  exit();
}
?>
<?php include('koneksi.php'); ?>

