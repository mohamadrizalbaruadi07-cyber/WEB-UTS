<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo-box">
             <img src="fb.png" alt="Logo">
            <span>facebook</span>
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
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $query = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");

            if(mysqli_num_rows($query) > 0) {
                $data = mysqli_fetch_array($query);
                $_SESSION['user'] = $data;
                echo '<script>alert("Selamat datang, '.$data['nama'].'"); location.href="index.php";</script>';
            }else{
                echo '<script>alert("Username/password tidak sesuai");</script>';
            }
        }
    ?>

    <div class="main-container">
        <form class="login" method="post">
            <h2>Login User</h2>
            <p>Masukkan username dan kata sandi Anda</p>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Kata sandi">
            <button type="submit">Login</button>
            <a class="lupa" href="daftar.php">Belum punya akun? Daftar</a>
        </form>
    </div>
</body>
</html>
