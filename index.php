<!DOCTYPE html>
<html>

<head>
    <title>COLABS</title>
    <?php
    session_start();
    //$_SESSION['Peran'] = 'Asisten'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Praktikan') {
            echo '<link rel="stylesheet" href="Style/Praktikan/style.css">';
        } else if ($_SESSION['Peran'] == 'Asisten') {
            echo '<link rel="stylesheet" href="Style/Asisten/homepage.css">';
        } else if ($_SESSION['Peran'] == 'Koordinator') {
            echo '<link rel="stylesheet" href="Style/Koordinator/home.css">';
        } else if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/home.css">';
        }
    } else if (!isset($_SESSION['Peran'])){
        echo '<link rel="stylesheet" href="Style/Login/home.css">';
    }
    ?>

</head>

<body>
    <div class="banner">
        <div class="navbar">
        <img src="Image\logo.png" class="logo">
            <ul>
                <?php
                if (isset($_SESSION['Peran'])) {
                    if ($_SESSION['Peran'] == 'Praktikan') {
                        echo '<li><a href="#">Perencanaan</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Pelaksanaan</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Jadwal</a></li></p>';
                        echo '<p><li><a href="#">Kelompok</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<li><a href="#">Nilai</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<form action="/action_page.php">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="prak" name="Peran" value="Praktikan">';
                        echo '<label for="prak">Praktikan</label></a>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                    } else if ($_SESSION['Peran'] == 'Asisten') {
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Asistensi</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Asistensi</a></li></p>';
                        echo '<p><li><a href="#">Jadwal</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<form action="/action_page.php">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="asis" name="Peran" value="Asisten">';
                        echo '<label for="asis">Asisten</label></a>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                    } else if ($_SESSION['Peran'] == 'Koordinator') {
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Asistensi</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Asistensi</a></li></p>';
                        echo '<p><li><a href="#">Jadwal</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<li><a href="#">Kelola Asisten</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<form action="/action_page.php">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="koor" name="Peran" value="Koordinator">';
                        echo '<label for="koor">Koordinator</label></a>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                    }
                } else if(!isset($_SESSION['Peran'])) {
                    echo '<ul>';
                    echo '<li><a href="#">Login</a></li>';
                    echo '</ul>';
                }else {
                    echo $_SESSION['Peran'];
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="content">
        <h1>SISTEM INFORMASI PRAKTIKUM</h1>
        <p>Pengumuman Praktikum</p>
        <div>
            <button type="button"><span></span>Database</button>
            <button type="button"><span></span>Jaringan Komputer</button>
            <button type="button"><span></span>Pemrograman Lanjut</button>
            <button type="button"><span></span>Pengolahan SInyal Digital</button>
            <button type="button"><span></span>Rangkaian Digital</button>
            <button type="button"><span></span>Workshop Telematika</button>
        </div>
    </div>
</body>
<?php
session_destroy();
?>
</html>
