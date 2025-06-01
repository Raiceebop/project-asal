<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet"> <!-- Menghubungkan dengan file CSS eksternal -->
    <title>Form Login</title>
</head>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <form action="" method="POST"> <!-- Form untuk proses login -->
                    <img src="https://raw.githubusercontent.com/hicodersofficial/glassmorphism-login-form/master/assets/illustration.png"
                        alt="illustration" class="illustration" />
                    <h1 class="opacity">LOGIN</h1>
                    <form> <!-- Mulai form -->
                        <input type="text" name="username" id="username" placeholder="USERNAME" />
                        <!-- Input untuk username -->
                        <input type="password" name="password" id="password" placeholder="PASSWORD" />
                        <!-- Input untuk password -->
                        <button class="opacity" name="login">SUBMIT</button> <!-- Tombol submit -->
                        <center>
                            <p><i>Belum Punya Akun?</i></p>
                        </center> <!-- Pesan untuk pengguna yang belum memiliki akun -->
                    </form> <!-- Selesai form -->
                    <div class="register-forget opacity">
                        <a href="register/register.php">REGISTER</a> <!-- Link untuk menuju halaman registrasi -->
                    </div>
                </form>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>

</html>

<?php
session_start();
require 'register\database.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek user di database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        // Buat session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>