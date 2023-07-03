<?php
// Import file koneksi DB
session_start();
require_once 'connectDB.php';
require_once 'salt.php';

// Pengecekan login
$stmt = $pdo->prepare("SELECT user.ID, user.NRP, user.Password, akun.Peran FROM user JOIN akun ON user.NRP = akun.NRP WHERE user.NRP = :username");
$stmt->bindParam(':username', $_POST['username']);
$stmt->execute();

if ($stmt->rowCount() == 1) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $storedPassword = $row['Password'];

    // Memverifikasi password menggunakan password_verify()
    if (password_verify($_POST['password'], $_SESSION['salt'], $storedPassword)) {
        // Login berhasil, menyimpan ID pengguna dalam sesi
        $_SESSION['user_id'] = $row['ID'];
        $_SESSION['Peran'] = $row['Peran'];

        // Meredirect ke halaman homepage
        header('Location: homepage_All.php');
        exit();

    } else {
        // Password salah
        $_SESSION['error_message'] = 'Username atau password salah.';
        header('Location: loginpage.php');
        exit();
    }
} else {
    // NRP tidak ditemukan
    $_SESSION['error_message'] = 'Username atau password salah.';
    header('Location: loginpage.php');
    exit();
}