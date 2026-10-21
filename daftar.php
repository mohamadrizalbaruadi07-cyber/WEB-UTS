<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo-box">
            <img src="fb.png" alt="Logo">
            <span>faceboook</span>
        </div>
        <div class="menu-box">
            <a href="index.php">Home</a>
            <a href="#">Reels</a>
            <a href="#">Search</a>
            <a href="#">Profile</a>
            <a href="#">Settings</a>
        </div>
    </nav>

    <?php
        if(isset($_POST['username'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $query = mysqli_query($koneksi, "INSERT INTO user(nama, username, password) values('$nama', '$username', '$password')");
            if($query) {
                echo '<script>alert("Selamat, pendaftaran anda berhasil, Silahkan login.")</script>';
            }else{
                echo '<script>alert("Pendaftaran gagal.")</script>';
            }
        }
    ?>

    <div class="main-container">
        <form class="login" method="post">
            <h2>Pendaftaran User</h2>
            <p>Buat akun facebook Anda</p>
            <input type="text" name="nama" placeholder="Nama">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Kata sandi">
            <button type="submit">Daftar User</button>
            <a class="lupa" href="login.php">Sudah punya akun? Login</a>
        </form>
    </div>
</body>
</html>
