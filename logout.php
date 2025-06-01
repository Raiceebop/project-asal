<?php
ob_start(); // Mulai output buffering
session_start();

// Hapus semua variabel session
$_SESSION = array();

// Hapus session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), 
        '', 
        time() - 42000,
        $params["path"], 
        $params["domain"],
        $params["secure"], 
        $params["httponly"]
    );
}

// Destroy session
session_destroy();

// Redirect ke login
header("Location: login.php");
ob_end_flush(); // Akhiri output buffering dan kirim output
exit();
?>