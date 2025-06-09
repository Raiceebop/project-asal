<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    
    // Set default role sebagai visitor
    $role = 'visitor';


    // Validasi
    if (empty($username) || empty($email) || empty($password)) {
        die('Semua field harus diisi');
    }

    if ($password !== $confirm_password) {
        die('Password dan konfirmasi password tidak cocok');
    }

    if (strlen($password) < 8) {
        die('Password minimal 8 karakter');
    }

    // Hash password
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Simpan ke database
    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash, role) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $email, $password_hash, $role]);
        
        header('Location: login.html?registration=success');
        exit();
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            die('Username atau email sudah digunakan');
        }
        die('Error: ' . $e->getMessage());
    }
}
?>