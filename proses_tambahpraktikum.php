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
    // Periksa ID paling kecil yang belum digunakan dalam tabel
    $sql = 'SELECT min(ID_Praktikum + 1) AS NextID FROM list_praktikum WHERE (ID_Praktikum + 1) NOT IN (SELECT ID_Praktikum FROM list_praktikum)';
    $result = $pdo->query($sql);
    if ($result->rowCount() > 0) {
        // Memperoleh nilai NextID
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $nextID = $row["NextID"];
    } else {
        // Jika tidak ada ID yang kosong, tambahkan pada akhir menggunakan nilai auto increment
        $nextID = null;
    }

    //Mengecek nama Praktikum
    $sql = $pdo->prepare("SELECT Nama_Praktikum FROM list_praktikum");
    $sql->execute();
    $list_nama_praktikum = $sql->fetchAll(PDO::FETCH_ASSOC);
    //Pengecekan Array
    if (is_array($list_nama_praktikum)) {
        $idx_list_nama_praktikum = sizeof($list_nama_praktikum);
    } else {
        $idx_list_nama_praktikum = 0;
    }
    for ($i = 0; $i < $idx_list_nama_praktikum; $i++){
        if(is_array($list_nama_praktikum[$i]['Nama_Praktikum'])) {
            if(strtolower((implode($list_nama_praktikum[$i]['Nama_Praktikum'])) === strtolower($nama_praktikum))) {
                $_SESSION['message'] = 'Praktikum Sudah Ada';
                session_write_close();
                // Menutup Koneksi
                $pdo = null;
                header('Location: tambahpraktikum_Ad.php');
                exit();
            }
        } else {
            if(strtolower($list_nama_praktikum[$i]['Nama_Praktikum']) === strtolower($nama_praktikum)) {
                $_SESSION['message'] = 'Praktikum Sudah Ada';
                session_write_close();
                // Menutup Koneksi
                $pdo = null;
                header('Location: tambahpraktikum_Ad.php');
                exit();
            }
        }
    }

    //Membuat array
    $main_array = array();
    $main_array = [$nextID ,$nama_praktikum, $lab_praktikum, $matkul_prasyarat, $jumlah_modul];

    //Membuat Placeholder parameter
    $placeholders = [':0', ':1', ':2', ':3', ':4'];

    //Membuat query SQL
    $sql = 'INSERT INTO list_praktikum (ID_Praktikum, Nama_Praktikum, Lab_Praktikum, Matkul_Prasyarat, Jumlah_Modul) VALUES (' . implode(', ', $placeholders) . ')';

    $stmt = $pdo->prepare($sql);

    //Mengikat nilai parameter
    $stmt->bindValue(':0', $nextID);
    $stmt->bindValue(':1', $nama_praktikum);
    $stmt->bindValue(':2', $lab_praktikum);
    $stmt->bindValue(':3', $matkul_prasyarat);
    $stmt->bindValue(':4', $jumlah_modul);
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