<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
session_start();
session_destroy();

echo "<script>window.alert('Anda Telah Logout');</script>";
echo "<script>location='login.php';</script>";
?>

</body>
</html>