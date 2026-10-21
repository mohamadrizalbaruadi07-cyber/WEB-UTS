<?php
// inisialisasi session
session_start();

// mengecek apakah ada session user yang aktif, jika tidak arahkan ke login.php
if(!isset($_SESSION['user'])){
    header('location:login.php'); //arahkan ke login.php
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
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

    <main class="page-content">
        <h1>Halaman Administrator</h1>
        <a href="logout.php">Logout</a>
        <hr>
        <h3>Selamat datang, <?php echo $_SESSION['user']['nama']; ?></h3>
        <p>halaman ini akan tampil setelah user login</p>
    </main>
</body>
</html>
