<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once 'connectDB.php';

//Memproses Data
if (isset($_POST['action']) && $_POST['action'] === "hapus") {
    $rowIndex = $_POST['rowIndex'];
    $nama_praktikum = $_POST['nama'];

    //Mendapatkan index list praktikum
    if (is_array($_SESSION['list_nama_praktikum'])) {
        $index = sizeof($_SESSION['list_nama_praktikum']);
    } else {
        $index = 0;
    }

    //Menghapus file beserta databasenya
    for ($i = 0; $i < $index; $i++){
        if(is_array($_SESSION['list_nama_praktikum'][$i])) {
            if(strtolower((implode($_SESSION['list_nama_praktikum'][$i])) === strtolower($nama_praktikum))) {
                //Membuat query
                try{
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = 'DELETE FROM list_praktikum WHERE Nama_Praktikum = :' . implode($_SESSION['list_nama_praktikum'][$i]);
                    $stmt = $pdo->prepare($sql);
                    //Mengikat Parameter
                    $stmt->bindValue(':' . implode($_SESSION['list_nama_praktikum'][$i]), $_SESSION['list_nama_praktikum'][$i]);
                    $stmt->execute();

                    unset($_SESSION['list_nama_praktikum'][$i]);
                    $_SESSION['list_nama_praktikum'] = array_values($_SESSION['list_nama_praktikum']);
                    echo "success";
                    break;
                } catch(PDOException $e) {
                    $message = 'Error: ' . $e->getMessage();
                    echo $message;
                }  
            }
        } else {
            if(isset($_SESSION['list_nama_praktikum'][$i]) && strtolower($_SESSION['list_nama_praktikum'][$i]) === strtolower($nama_praktikum)) {
                //Membuat Query
                try{
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = 'DELETE FROM list_praktikum WHERE Nama_Praktikum = :' . $_SESSION['list_nama_praktikum'][$i];
                    $stmt = $pdo->prepare($sql);
                    //Mengikat Parameter
                    $stmt->bindValue(':' . $_SESSION['list_nama_praktikum'][$i], $_SESSION['list_nama_praktikum'][$i]);
                    $stmt->execute();

                    unset($_SESSION['list_nama_praktikum'][$i]);
                    $_SESSION['list_nama_praktikum'] = array_values($_SESSION['list_nama_praktikum']);
                    echo "success";
                    break;
                } catch(PDOException $e) {
                    $message = 'Error: ' . $e->getMessage();
                    echo $message;
                }
            }
        }
    }
    
    session_write_close();
    $pdo = null;
    exit();
}

$pdo = null;
?>