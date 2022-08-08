<?php include("../templates/auth_header.php"); ?>
<?php include("../templates/header.php"); ?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <?php
            if (isset($_POST['login'])) {
                $ambil = $koneksi->query("SELECT * FROM user WHERE username='$_POST[user]' AND password = '$_POST[pass]'");
                $yangcocok = $ambil->num_rows;
                if ($yangcocok == 1) {
                    $data = $ambil->fetch_assoc();
                    if($data['level'] == 'admin'){
                        session_start();
                        $_SESSION['user'] = $data;
                        echo "<meta http-equiv='refresh' content='1;url=index_admin.php'>";
                    }elseif($data['level'] == 'cs'){
                        session_start();
                        $_SESSION['user'] = $data;
                        echo "<meta http-equiv='refresh' content='1;url=index_cs.php'>";     
                    }elseif($data['level'] == 'karyawan'){
                        session_start();
                        $_SESSION['user'] = $data;
                        echo "<meta http-equiv='refresh' content='1;url=index_karyawan.php'>";     
                    } else {
                    echo "<div class='alert alert-danger'>Login Gagal</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                 }
                }
            }
            ?>
            <form class="form" method="post" action="">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="Username" name="user" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                        <label for="Username">Masukan username</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" name="pass" id="Masukanpassword" class="form-control" placeholder="Password" required="required">
                        <label for="Masukanpassword">
                            Masukan Password
                        </label>
                    </div>
                    <br>
                    <input type="checkbox" onclick="myFunction()">Tampilkan Password
                </div>
                <button name="login" class="btn btn-primary btn-block">Login</a>
            </form>
            
        </div>
    </div>
</div>
<?php include("../templates/auth_footer.php"); ?>
<script>
    function myFunction() {
        var x = document.getElementById("Masukanpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
