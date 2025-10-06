<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

$error = '';

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] === 'logout') {
        $error = "Anda telah berhasil logout.";
    } elseif ($_GET['pesan'] === 'belum_login') {
        $error = "Silakan login terlebih dahulu untuk mengakses dashboard.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - CERIA Relawan</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <header class="site-header">
        <nav class="site-nav">
            <div class="container nav-inner">
                <a class="brand" href="index.php">CERIA</a>
                <ul class="nav-list">
                    <li><a href="#tentang">Tentang</a></li>
                    <li><a href="#aktivitas">Aktivitas</a></li>
                    <li><a href="#daftar">Daftar</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

    </header>

    <div class="container" style="padding: 3rem 0;">
        <div class="card" style="max-width: 400px; margin: 0 auto;">
            <h2 style="text-align: center; margin-bottom: 1.5rem;">Login</h2>
            <?php if ($error): ?>
                <div class="card" style="background: #ffe6e6; color: #d32f2f; padding: 0.8rem; margin-bottom: 1rem;">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
            <form method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Masukkan username" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Masukkan password" />
                </div>
                <div class="form-actions" style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <p style="text-align: center;">username: admin dan pw:admin123 </p>
            <p style="text-align: center; margin-top: 1rem;">
                <a href="index.php" style="color: var(--secondary-color);">&larr; Kembali ke Beranda</a>
            </p>
        </div>
    </div>
</body>
</html>