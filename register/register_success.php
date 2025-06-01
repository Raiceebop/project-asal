<?php
require 'database.php';

// Cek apakah user sudah login
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7fafc;
        }
        .success-container {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
        }
        .success-icon {
            color: #48bb78;
            font-size: 4rem;
            margin-bottom: 1rem;
        }
        .success-message {
            margin-bottom: 1.5rem;
            color: #2d3748;
        }
        .login-link {
            display: inline-block;
            background: #5a67d8;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .login-link:hover {
            background: #434190;
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">✓</div>
        <h1 class="success-message">Registrasi Berhasil!</h1>
        <p>Akun Anda telah berhasil dibuat. Silakan login untuk melanjutkan.</p>
        <a href="..\login.php" class="login-link">Login Sekarang</a>
    </div>
</body>
</html>