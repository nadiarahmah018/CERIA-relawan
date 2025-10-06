<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - CERIA Relawan</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container" style="padding: 3rem 0;">
        <div class="card" style="text-align: center;">
            <h2>Selamat Datang di Dashboard!</h2>
            <p>Halo, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>!</p>
            <p>Anda berhasil login sebagai admin CERIA Relawan.</p>
            <div style="margin-top: 1.5rem;">
                <a href="index.php" class="btn btn-outline">Kembali ke Beranda</a>
                <a href="logout.php" class="btn btn-primary" style="margin-left: 0.5rem;">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>