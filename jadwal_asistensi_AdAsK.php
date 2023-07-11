<html>
    <head>
    <title>Jadwal Asistensi - COLABS</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['Peran'] = 'Asisten'; //Ini merupakan perubahan secara manual
    if(isset($_SESSION['Peran'])){
        if(($_SESSION['Peran'] == 'Asisten')){
            echo '<link rel="stylesheet" href="Style/Asisten/jadwalasistensi2.css">'; //Link style untuk asisten
        }else if(($_SESSION['Peran'] == 'Koordinator')){
            echo '<link rel="stylesheet" href="Style/Koordinator/jadwalasistensi2.css">'; //Link style untuk koordinator
        }else if(($_SESSION['Peran'] == 'Admin')){
            echo '<link rel="stylesheet" href="Style/Admin/jadwalasistensi.css">'; //Link style untuk koordinator
        }else {
            //Error Tidak memiliki Akses
        }
    }else {
        //Error Tidak memiliki Akses
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
            <h1>JAWAL ASISTENSI</h1>
        <div class="table-box">
        <div class="table-row table-head">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Modul 3</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell last-cell">
                <p>Status</p>
            </div>
        </div>    

        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>502420XXXX</p>
                <p>Aaaaaaaaa</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell">
                <p>Lengkap</p>
            </div>
        </div>
        
        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p><button type="button"><span></span>Batal</button></p>
                <p>502420XXXX</p>
                <p>Eeeeeeeee</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Modul 3</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell">
                <p>Tidak Lengkap</p>
            </div>
        </div>
        
        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Modul 3</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell" >
                <p>Status</p>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Modul 3</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell">
                <p>Status</p>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <p>Status</p>
            </div>
        </div>
    </body>
</html>
