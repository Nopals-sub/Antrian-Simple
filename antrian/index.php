<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Selamat datang</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Selamat Datang di Sistem Antrian</h1>
            <p>Halo, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
        </header>
        <nav>
            <ul>
                <li><a href="antrian.php">Lihat Antrian</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <main>
            <h2>Informasi Antrian</h2>
            <p>Selamat datang di sistem antrian kami. Anda dapat melihat daftar antrian saat ini dengan mengklik tautan di atas.</p>
        </main>
        <footer>
            <p>&copy; 2024 Sistem Antrian. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
