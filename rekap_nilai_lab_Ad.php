<!DOCTYPE html>
<html>
    <head>
    <title>Rekapitulasi Nilai Perlab - COLABS</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan secara manual
    if(isset($_SESSION['Peran'])){
        if(($_SESSION['Peran'] == 'Admin')){
            echo '<link rel="stylesheet" href="Style/Admin/rekapnilailab.css">'; //Link style untuk Admin
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
                    <!--Praktikum-->
                    <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Praktikum</a></li>
                        <div class="dropdown-content">
                        <p><li><a href="kelola_daftar_praktikum_Ad.php">Kelola Praktikum</a></li></p>
                        <p><li><a href="kelola_kelas_Ad.php">Kelola Kelas</a></li></p>
                        <p><li><a href="masa_frs_Ad.php">Masa FRS</a></li></p>
                        <p><li><a href="jadwal_per_praktikum_Ad.php">Jadwal</a></li></p>
                        </div>
                    </ul>
                    </div>

                    <!--Rekapitulasi-->
                    <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Rekapitulasi</a></li>
                        <div class="dropdown-content">
                        <p><li><a href="rekap_nilai_mhs_Ad.php">Nilai Per Mahasiswa</a></li></p>
                        <p><li><a href="rekap_nilai_sms_Ad.php">Nilai Per Semester</a></li></p>
                        <p><li><a href="rekap_nilai_lab_Ad.php">Nilai Per Lab</a></li></p>
                        <p><li><a href="jadwal_asistensi_AdAsK.php">Asisten</a></li></p>
                        </div>
                    </ul>
                    </div>

                    <!--Pelaksanaan-->
                    <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Pelaksanaan</a></li>
                        <div class="dropdown-content">
                        <p><li><a href="daftar_pengguna_Ad.php">Daftar Koordinator</a></li></p>
                        <p><li><a href="tambah_koordinator_Ad.php">Tambah Koordinator</a></li></p>
                        <p><li><a href="login_mhs_Ad.php">Login Mahasiswa</a></li></p>
                        <p><li><a href="kelola_asisten_AdK.php">Kelola Asisten</a></li></p>
                        </div>
                    </ul>
                    </div>

                    <li><a href="download_Ad.php">Download</a></li>

                    <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Account</a></li>
                        <!--Logout-->
                        <form action="process_logout.php" method="post">
                        <div class="dropdown-content">
                            <a><p>Peran:</p></a>
                            <a><input type="radio" id="prak" name="Peran" value="Admin">
                            <label for="prak">Admin</label></a>
                            <li><button type="submit">Logout</button></li>
                        </div>
                        </form>
                    </ul>
                    </div>
                </ul>
            </div>
        </div>

        <div class="content">
            <h1>REKAPITULASI NILAI PRAKTIKUM</h1>
            <a href="#"></a><label></label><br></a>
            <a href="#"></a><label>Cari : </label><input type="text"><br>
        <div class="table-box">
        <div class="table-row table-head">
            <div class="table-cell">
                <p>No.</p>
            </div>
            <div class="table-cell">
                <p>NRP</p>
            </div>
            <div class="table-cell">
                <p>Nama</p>
            </div>
            <div class="table-cell">
                <p>Aktivitas</p>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>1</p>
            </div>
            <div class="table-cell">
                <p>5024201070</p>
            </div>
            <div class="table-cell">
                <p>Evan</p>
            </div>
            <div class="table-cell">
                <p><button type="button"><span></span>Rincian</button></p>
            </div>
        </div>        

        <div class="table-row">
            <div class="table-cell">
                <p>2</p>
            </div>
            <div class="table-cell">
                <p>5024201070</p>
            </div>
            <div class="table-cell">
                <p>Evan</p>
            </div>
            <div class="table-cell">
                <p><button type="button"><span></span>Rincian</button></p>
            </div>
        </div> 

        <div class="table-row">
            <div class="table-cell">
                <p>3</p>
            </div>
            <div class="table-cell">
                <p>5024201070</p>
            </div>
            <div class="table-cell">
                <p>Evan</p>
            </div>
            <div class="table-cell">
                <p><button type="button"><span></span>Rincian</button></p>
            </div>
        </div> 

        <div class="table-row">
            <div class="table-cell">
                <p>4</p>
            </div>
            <div class="table-cell">
                <p>5024201070</p>
            </div>
            <div class="table-cell">
                <p>Evan</p>
            </div>
            <div class="table-cell">
                <p><button type="button"><span></span>Rincian</button></p>
            </div>
        </div> 
    </body>
</html>
