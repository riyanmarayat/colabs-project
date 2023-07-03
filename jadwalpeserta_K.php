<!DOCTYPE html> 
<html>
<head> 
    <title>Jadwal Peserta - COLABS</title>
    <?php
    session_start();
    $_SESSION['Peran'] = 'Koordinator'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Koordinator') {
            echo '<link rel="stylesheet" href="Style/Koordinator/jadwalpeserta.css">';
        }else {
            //Error tidak bisa diakses
        }
    } else {
        //Error tidak bisa diakses
    }
    ?>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="logo.png" class="logo">
            <ul>
                <li id="space"><a href="#">Asistensi</a></li>
                <li id="space"><a href="#">Kelola Asisten</a></li>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Account</a></li>
                        <div class="dropdown-content">
                            <form action="/action_page.php">
                                <a><p>Peran:</p></a>
                                <a><input type="radio" id="koor" name="Peran" value="Koordinator">
                                <label for="koor">Koordinator</label></a>
                                <a><input type="radio" id="asis" name="Peran" value="Asisten">
                                <label for="asis">Asisten</label></a>
                                <a><input type="radio" id="prak" name="Peran" value="Praktikan">
                                <label for="prak">Praktikan</label></a>
                        </div>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
