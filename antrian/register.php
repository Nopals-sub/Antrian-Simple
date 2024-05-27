<?php
session_start();
require_once 'db.php';

// Inisialisasi variabel untuk pesan kesalahan
$error = '';

// Proses registrasi pengguna
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Periksa apakah username sudah digunakan
    $check_query = "SELECT * FROM users WHERE username='$username'";
    $check_result = $conn->query($check_query);
    
    if ($check_result->num_rows > 0) {
        $error = 'Username sudah digunakan. Silakan gunakan username lain.';
    } else {
        // Tambahkan pengguna baru ke database
        $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if ($conn->query($insert_query) === TRUE) {
            // Redirect to login page after successful registration
            header('Location: login.php');
            exit();
        } else {
            $error = 'Registrasi gagal. Silakan coba lagi.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrasi</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Halaman Registrasi</h1>
        </header>
        <main>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Daftar</button>
            </form>
            <?php if ($error != ''): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <p>Sudah punya akun? <a href="login.php">Login disini</a>.</p>
        </main>
    </div>
</body>
</html>
