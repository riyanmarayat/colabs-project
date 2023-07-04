<!DOCTYPE html> 
<html>
<head> 
    <title>Tambah Asisten - COLABS</title> 
    <?php
    session_start();
    $_SESSION['Peran'] = 'Koordinator'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Koordinator') {
            echo '<link rel="stylesheet" href="Style/Koordinator/tambahasisten.css">';
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
            <img src="Image\logo.png" class="logo">
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
                            </form>
                            <p>
                                <li><a href="#">LOG OUT</a></li>
                            </p>
                        </div>
                    </ul>
                </div>
            </ul>
        </div>
    </div>

    <div class="content">
        <h1>TAMBAH ASISTEN</h1>
        <div class="content2">
            <form>
                <label>NRP</label><br>
                <li><a href="#"></a><input type="text"><br></a></li>
                <label>Praktikum</label><br>
                <input type="checkbox" id="DB" name="DB" value="Praktikum">
                <label for="DB">Database</label><br>
                <input type="checkbox" id="JK" name="JK" value="Praktikum">
                <label for="JK">Jaringan Komputer</label><br>
                <input type="checkbox" id="PL" name="PL" value="Praktikum">
                <label for="PL">Pemrograman Lanjut</label><br>
                <input type="checkbox" id="PSD" name="PSD" value="Praktikum">
                <label for="PSD">Pengolahan Sinyal Digital</label><br>
                <input type="checkbox" id="RD" name="RD" value="Praktikum">
                <label for="RD">Rangkaian Digital</label><br>
                <input type="checkbox" id="WT" name="WT" value="Praktikum">
                <label for="WT">Workshop Telematika</label><br>
                <button type="button"><span></span>Save</button>
            </form>
        </div>
    </div>
</body>
</html>