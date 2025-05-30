<?php
$host = 'localhost';      // Server database
$dbname = 'db_projectasal';   // Nama database yang dibuat di phpMyAdmin
$username = 'root';       // Username phpMyAdmin (default: root)
$password = '';           // Password phpMyAdmin (default kosong)

try {
    // Membuat koneksi PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set atribut untuk mode error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set charset untuk support karakter khusus
    $pdo->exec("SET NAMES 'utf8mb4'");
    $pdo->exec("SET CHARACTER SET utf8mb4");
    
    ;

} catch (PDOException $e) {
    // Handle error koneksi
    die("Koneksi database gagal: " . $e->getMessage());
}
?>