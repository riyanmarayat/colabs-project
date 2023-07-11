<!DOCTYPE html>
<html>

<head>
    <title>COLABS</title>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    //$_SESSION['Peran'] = 'Asisten'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Praktikan') {
            echo '<link rel="stylesheet" href="Style/Praktikan/style.css">'; //Link CSS Praktikan
        } else if ($_SESSION['Peran'] == 'Asisten') {
            echo '<link rel="stylesheet" href="Style/Asisten/homepage.css">'; //Link CSS Asisten
        } else if ($_SESSION['Peran'] == 'Koordinator') {
            echo '<link rel="stylesheet" href="Style/Koordinator/home.css">'; //Link CSS Koordinator
        } else if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/home.css">'; //Link CSS Admin
        } else {
            session_write_close();
            header('Location: error403.php'); //Access Denied
            exit();
        }
    } else if (!isset($_SESSION['Peran'])){
        echo '<link rel="stylesheet" href="Style/Login/home.css">'; //Link CSS No Login
    } else {
        session_write_close();
        header('Location: error403.php'); //Access Denied
        exit();
    }
    ?>

</head>

<body>
    <div class="banner">
        <div class="navbar">
            <a href="homepage_All.php"><img src="Image/logo.png" class="logo"></a>
            <ul>
                <?php
                if (isset($_SESSION['Peran'])) {
                    // Praktikan
                    if ($_SESSION['Peran'] == 'Praktikan') {
                        // Perencanaan
                        echo '<li><a href="perencanaan_P.php">Perencanaan</a></li>';

                        // Pelaksanaan
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Pelaksanaan</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="jadwal_P.php">Jadwal</a></li></p>';
                        echo '<p><li><a href="kelompok_P.php">Kelompok</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';

                        // Nilai
                        echo '<li><a href="nilai_P.php">Nilai</a></li>';
                        
                        //Account
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        //Logout
                        echo '<form action="process_logout.php" method="post">';
                        echo '<div class="dropdown-content">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="prak" name="Peran" value="Praktikan">';
                        echo '<label for="prak">Praktikan</label></a>';
                        echo '<li><button type="submit">Logout</button></li>';
                        echo '</div>';
                        echo '</form>';
                        echo '</ul>';
                        echo '</div>';

                    //Asisten
                    } else if ($_SESSION['Peran'] == 'Asisten') {
                        //Asisten
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Asistensi</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="asistensi_AsK.php">Asistensi</a></li></p>';
                        echo '<p><li><a href="jadwal_asistensi_AdAsK.php">Jadwal</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';

                        //Account
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        //Logout
                        echo '<form action="process_logout.php" method="post">';
                        echo '<div class="dropdown-content">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="prak" name="Peran" value="Asisten">';
                        echo '<label for="prak">Asisten</label></a>';
                        echo '<li><button type="submit">Logout</button></li>';
                        echo '</div>';
                        echo '</form>';
                        echo '</ul>';
                        echo '</div>';
                    } else if ($_SESSION['Peran'] == 'Koordinator') {
                        //Asistensi
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Asistensi</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="asistensi_AsK">Asistensi</a></li></p>';
                        echo '<p><li><a href="jadwal_asistensi_AdAsK">Jadwal</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';

                        //kelola Asisten
                        echo '<li><a href="kelola_asisten_AdK.php">Kelola Asisten</a></li>';
                        
                        //Account
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        //Logout
                        echo '<form action="process_logout.php" method="post">';
                        echo '<div class="dropdown-content">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="prak" name="Peran" value="Koordinator">';
                        echo '<label for="prak">Koordinator</label></a>';
                        echo '<li><button type="submit">Logout</button></li>';
                        echo '</div>';
                        echo '</form>';
                        echo '</ul>';
                        echo '</div>';
                    } else if($_SESSION['Peran'] == 'Admin') {
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
                } else if(!isset($_SESSION['Peran'])) {
                    echo '<ul>';
                    echo '<li><a href="loginpage.php">Login</a></li>';
                    echo '</ul>';
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
</html>