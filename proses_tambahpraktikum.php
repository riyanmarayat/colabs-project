<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Import file koneksi DB
require_once 'connectDB.php';

try{
    //Mengatur mode error ke exeption
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Menangkap data yang akan diupdate
    $nama_praktikum = $_POST['nama_praktikum'] //Data Nama Praktikum
    if (isset($_POST['nama_lab'])) {
        $lab = $_POST['nama_lab'];
    }
    
}
?>