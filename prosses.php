<?php
session_start();
//Mengecek apakah tombol sudah diklik
    //Bagian Database
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['databaseAmbil'])) {
        $_SESSION['databaseTerambil'] = true;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['databaseBatal'])){
        $_SESSION['databaseTerambil'] = false;
    }

    //Bagian Jaringan Komputer
    if (isset($_POST['jarkomAmbil'])) {
        $_SESSION['jarkomTerambil'] = true;
    }
    if (isset($_SESSION['jarkomBatal'])){
        $_SESSION['jarkomTerambil'] = false;
    }

    //Bagian Pemrograman Lanjut
    if (isset($_POST['proglanAmbil'])) {
        $_SESSION['proglanTerambil'] = true;
    }
    if (isset($_POST['proglanBatal'])){
        $_SESSION['proglanTerambil'] = false;
    }

    //Bagian Pengolahan Sinyal Digital
    if (isset($_POST['psdAmbil'])) {
        $_SESSION['psdTerambil'] = true;
    }
    if (isset($_POST['psdBatal'])){
        $_SESSION['psdTerambil'] = false;
    }

    //Bagian Rangkaian Digital
    if (isset($_POST['rdigAmbil'])) {
        $_SESSION['rdigTerambil'] = true;
    }
    if (isset($_POST['rdigBatal'])){
        $_SESSION['rdigTerambil'] = false;
    }

    //Bagian Workshop Telematika
    if (isset($_POST['wortelAmbil'])) {
        $_SESSION['wortelTerambil'] = true;
    }
    if (isset($_POST['wortelBatal'])){
        $_SESSION['wortelTerambil'] = false;
    }
?>