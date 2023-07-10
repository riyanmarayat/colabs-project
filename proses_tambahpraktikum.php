<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Import file koneksi DB
require_once 'connectDB.php';

try{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Mengambil data POST
    $nama_praktikum = $_POST['nama_praktikum'];
    $lab_praktikum = $_POST['nama_lab'];
    $matkul_prasyarat = json_encode($_SESSION['list_matkulpra_dipilih'], true);
    $jumlah_modul = $_POST['jumlah_modul'];

    //Membuat array
    $main_array = array();
    $main_array = [$nama_praktikum, $lab_praktikum, $matkul_prasyarat, $jumlah_modul];

    //Membuat Placeholder parameter
    $placeholders = [':0', ':1', ':2', ':3'];

    //Membuat query SQL
    $sql = 'INSERT INTO list_praktikum (Nama_Praktikum, Lab_Praktikum, Matkul_Prasyarat, Jumlah_Modul) VALUES (' . implode(', ', $placeholders) . ')';

    $stmt = $pdo->prepare($sql);

    //Mengikat nilai parameter
    $stmt->bindValue(':0', $nama_praktikum);
    $stmt->bindValue(':1', $lab_praktikum);
    $stmt->bindValue(':2', $matkul_prasyarat);
    $stmt->bindValue(':3', $jumlah_modul);
    $stmt->execute();
    
    $_SESSION['message'] = 'Data berhasil disimpan';
} catch(PDOException $e) {
    $_SESSION['message'] = 'Error: ' . $e->getMessage();
}
unset($_SESSION['list_matkulpra_dipilih']);
session_write_close();
// Menutup Koneksi
$pdo = null;
header('Location: tambahpraktikum_Ad.php');
exit();
?>