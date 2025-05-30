<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Ambil data dari form
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['konfirmasi_password'];
    $role = $_POST['role'];

    // 2. Validasi
    $errors = [];
    
    if (empty($username)) {
        $errors[] = "Username harus diisi";
    } elseif (strlen($username) < 4) {
        $errors[] = "Username minimal 4 karakter";
    }
    
    if (empty($password)) {
        $errors[] = "Password harus diisi";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password minimal 6 karakter";
    }
    
    if ($password !== $confirm_password) {
        $errors[] = "Konfirmasi password tidak sesuai";
    }

    // 3. Jika validasi berhasil
    if (empty($errors)) {
        try {
            // Cek apakah username sudah ada
            $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
            $stmt->execute([$username]);
            
            if ($stmt->rowCount() > 0) {
                $errors[] = "Username sudah digunakan";
            } else {
                // Hash password
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                
                // Simpan ke database
                $stmt = $pdo->prepare("INSERT INTO users (username, password_hash, role) VALUES (?, ?, ?)");
                $stmt->execute([$username, $password_hash, $role]);
                
                // Redirect ke halaman sukses
                header("Location: register_success.php");
                exit();
            }
        } catch (PDOException $e) {
            $errors[] = "Terjadi kesalahan sistem: " . $e->getMessage();
        }
    }
}

// Jika ada error atau bukan method POST, tetap di halaman registrasi
require 'register.php';
?>