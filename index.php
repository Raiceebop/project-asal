<?php
session_start();
require 'register/database.php';

// Redirect jika belum login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Ambil data user
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, <?php echo htmlspecialchars($user['username']); ?>!</h1>
    <p>Role: <?php echo htmlspecialchars($user['role']); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>