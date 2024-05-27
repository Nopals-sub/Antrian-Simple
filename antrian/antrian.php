<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

// Query untuk mendapatkan daftar antrian
$sql = "SELECT * FROM antrian";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="antrian.css">
    <title>Antrian</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Daftar Antrian</h1>
        </header>
        <main>
            <ul>
                <?php while($row = $result->fetch_assoc()): ?>
                    <li><?php echo htmlspecialchars($row['nama']); ?></li>
                <?php endwhile; ?>
            </ul>
            <a href="index.php">Kembali</a>
        </main>
    </div>
</body>
</html>
