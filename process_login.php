<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Import file koneksi DB
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
    if (password_verify($_POST['password'], $storedPassword)) {
        // Login berhasil, menyimpan ID pengguna dalam sesi
        $_SESSION['user_id'] = $row['ID'];
        $_SESSION['Peran'] = $row['Peran'];

        // Meredirect ke halaman homepage
        session_write_close();
        $pdo = null;
        header('Location: homepage_All.php');
        exit();

    }
}
// Jika login gagal, set pesan error dan kembali ke halaman loginpage.php
$_SESSION['error_message'] = 'Username atau password salah.';
session_write_close();
// Menutup Koneksi
$pdo = null;
header('Location: loginpage.php');
exit();
?>