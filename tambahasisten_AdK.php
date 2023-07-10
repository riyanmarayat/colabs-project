<!DOCTYPE html> 
<html>
<head> 
    <title>Tambah Asisten - COLABS</title> 
    <?php
    session_start();
    $_SESSION['Peran'] = 'Koordinator'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/tambahasisten.css">';
        }else if ($_SESSION['Peran'] == 'Koordinator') {
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
            <?php
                    if (isset($_SESSION['Peran'])) {
                        if($_SESSION['Peran'] == 'Admin') {
                            //Praktikum
                            echo '<div class="dropdown">';
                            echo '<ul>';
                            echo '<li id="space"><a href="#">Praktikum</a></li>';
                            echo '<div class="dropdown-content">';
                            echo '<p><li><a href="kelola_daftar_praktikum_Ad.php">Kelola Praktikum</a></li></p>';
                            echo '<p><li><a href="kelola_kelas_Ad.php">Kelola Kelas</a></li></p>';
                            echo '<p><li><a href="masa_frs_Ad.php">Masa FRS</a></li></p>';
                            echo '<p><li><a href="jadwal_per_praktikum_Ad.php">Jadwal</a></li></p>';
                            echo '</div>';
                            echo '</ul>';
                            echo '</div>';
                            
                            //Rekapitulasi
                            echo '<div class="dropdown">';
                            echo '<ul>';
                            echo '<li id="space"><a href="#">Rekapitulasi</a></li>';
                            echo '<div class="dropdown-content">';
                            echo '<p><li><a href="rekap_nilai_mhs_Ad.php">Nilai Per Mahasiswa</a></li></p>';
                            echo '<p><li><a href="rekap_nilai_sms_Ad.php">Nilai Per Semester</a></li></p>';
                            echo '<p><li><a href="rekap_nilai_lab_Ad.php">Nilai Per Lab</a></li></p>';
                            echo '<p><li><a href="jadwal_asistensi_AdAsK.php">Asisten</a></li></p>';
                            echo '</div>';
                            echo '</ul>';
                            echo '</div>';

                            //Pelaksanaan
                            echo '<div class="dropdown">';
                            echo '<ul>';
                            echo '<li id="space"><a href="#">Pelaksanaan</a></li>';
                            echo '<div class="dropdown-content">';
                            echo '<p><li><a href="daftar_pengguna_Ad.php">Daftar Koordinator</a></li></p>';
                            echo '<p><li><a href="tambah_koordinator_Ad.php">Tambah Koordinator</a></li></p>';
                            echo '<p><li><a href="login_mhs_Ad.php">Login Mahasiswa</a></li></p>';
                            echo '<p><li><a href="kelola_asisten_AdK.php">Kelola Asisten</a></li></p>';
                            echo '</div>';
                            echo '</ul>';
                            echo '</div>';

                            echo '<li><a href="download_Ad.php">Download</a></li>';

                            echo '<div class="dropdown">';
                            echo '<ul>';
                            echo '<li id="space"><a href="#">Account</a></li>';
                            //Logout
                            echo '<form action="process_logout.php" method="post">';
                            echo '<div class="dropdown-content">';
                            echo '<a><p>Peran:</p></a>';
                            echo '<a><input type="radio" id="prak" name="Peran" value="Admin">';
                            echo '<label for="prak">Admin</label></a>';
                            echo '<li><button type="submit">Logout</button></li>';
                            echo '</div>';
                            echo '</form>';
                            echo '</ul>';
                            echo '</div>';
                        }
                    }else if(!isset($_SESSION['Peran'])) {
                        echo '<ul>';
                        echo '<li><a href="loginpage.php">Login</a></li>';
                        echo '</ul>';
                    }
                    ?>
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