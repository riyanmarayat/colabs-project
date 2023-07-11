<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=colabs_database','root', '');

// Memeriksa koneksi
if ($pdo === false) {
    die("Koneksi gagal: " . $pdo->errorInfo());
}
?>