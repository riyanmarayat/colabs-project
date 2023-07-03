<?php
// Import file koneksi DB
require_once 'connectDB.php';

session_start();

// Pengecekan login
$stmt = $pdo->prepare("SELECT ID, NRP, Password FROM user WHERE username = :username");
$stmt->bindParam(':username', $_POST['username']);
$stmt->execute();

if ($stmt->rowCount() == 1) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $storedPassword = $row['Password'];

    // Memverifikasi password menggunakan password_verify()
    if (password_verify($_POST['password'], $storedPassword)) {
        // Loin berhasil, menyimpan ID pengguna dalam sesi
        $_SESSION['user_id'] = $row['id'];

        // Meredirect ke halaman homepage
        header('Location: homepage_All.php');
        exit();

    } else {
        // Password salah
        echo "Username atau password salah";
    }
} else {
    // NRP tidak ditemukan
    echo "NRP atau password salah";
}