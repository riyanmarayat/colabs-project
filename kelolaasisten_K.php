<!DOCTYPE html> 
<html>
<head> 
    <title>Kelola Asisten - COLABS</title> 
    <?php
    session_start();
    $_SESSION['Peran'] = 'Koordinator'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Koordinator') {
            echo '<link rel="stylesheet" href="Style/Koordinator/kelolaasisten.css">';
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

    <div class="content">
        <h1>KELOLA ASISTEN</h1>
        <p><button type="button"><span></span>Tambah Asisten</button></p>
    <div class="table-box">
    <div class="table-row table-head">
        <div class="table-cell">
            <p>Nama</p>
        </div>
        <div class="table-cell">
            <p>NRP</p>
        </div>
        <div class="table-cell">
            <p>Peran</p>
        </div>
        <div class="table-cell">
            <p>Praktikum</p>
        </div>
        <div class="table-cell">
            <p>Aktivitas</p>
        </div>
    </div>

    <div class="table-row">
        <div class="table-cell">
            <p>Nama</p>
        </div>
        <div class="table-cell">
            <p>5024XXX</p>
        </div>
        <div class="table-cell">
            <p>Asisten</p>
        </div>
        <div class="table-cell">
            <p>Workshop Telematika</p>
        </div>
        <div class="table-cell">
            <p><button type="button"><span></span>Copot Peran</button></p>
        </div>
    </div>        

    <div class="table-row">
        <div class="table-cell">
            <p>Nama</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>Koordinator</p>
        </div>
        <div class="table-cell">
            <p>Database</p>
            <p>Pemrograman Lanjut</p>
        </div>
        <div class="table-cell">
            <p><button type="button"><span></span>Copot Peran</button></p>
        </div>
    </div>   

    <div class="table-row">
        <div class="table-cell">
            <p>Nama</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p><button type="button"><span></span>Copot Peran</button></p>
        </div>
    </div>   

    <div class="table-row">
        <div class="table-cell">
            <p>Nama</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p><button type="button"><span></span>Copot Peran</button></p>
        </div>
    </div>   

    <div class="table-row">
        <div class="table-cell">
            <p>Nama</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p><button type="button"><span></span>Copot Peran</button></p>
        </div>
    </div>   

    <div class="table-row">
        <div class="table-cell">
            <p>Nama</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p>-</p>
        </div>
        <div class="table-cell">
            <p><button type="button"><span></span>Copot Peran</button></p>
        </div>
    </div>
    