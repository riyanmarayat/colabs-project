<?php
session_start();
$_SESSION['salt'] = 'colabsproject';

//Cek apakah referer tersedia
if (isset($_SERVER['HTTP_REFERER'])) {
    // Mendapatkan URL Sebelumnnya
    $referer = $_SERVER['HTTP_REFERER'];

    // Mengarahkan kembali ke halaman sebelumnya
    header("Location: $referer");
    exit();
} else {
    // Jika referer tidak tersedia, maka mengarahkan ke halaman utama
    header("Location: homepage_All.php");
    exit();
}
?>