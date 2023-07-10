<!DOCTYPE html> 
<html>
<head> 
    <title>Kelola Kelas - COLABS</title> 
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    //$_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan secara manual
    if(isset($_SESSION['Peran'])){
        if(($_SESSION['Peran'] == 'Admin')){
            echo '<link rel="stylesheet" href="Style/Admin/kelolakelas.css">'; //Link style untuk Admin
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
        <h1>KELOLA KELAS</h1>
        <p><button type="button"><span></span>Tambah Kelas</button></p>
        <label for="Kurikulum">Kurikulum:</label>
            <select name="Kurikulum" id="Kurikulum">
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
            </select>
        <label for="TahunAkademik">Tahun Akademik:</label>
            <select name="TahunAkademik" id="TahunAkademik">
                <option value="2022/2023">2022/2023</option>
                <option value="2021/2022">2021/2022</option>
                <option value="2020/2021">2020/2021</option>
                <option value="2019/2020">2019/2020</option>
            </select>
        <label for="Semester">Semester:</label>
            <select name="Semester" id="Semester">
                <option value="Ganjil">Ganjil</option>
                <option value="Genap">Genap</option>
            </select>
        
    <div class="table-box">
    <div class="table-row table-head">
        <div class="table-cell">
            <p>Praktikum</p>
        </div>
        <div class="table-cell">
            <p>Tahun Akademik</p>
        </div>
        <div class="table-cell">
            <p>Semester</p>
        </div>
        <div class="table-cell">
            <p>Peserta / Kuota</p>
        </div>
        <div class="table-cell">
            <p>Asisten / Slot</p>
        </div>
    </div>

    <div class="table-row">
        <div class="table-cell">
            <p>Pengolahan Sinyal DIgital</p>
            <p><button type="button"><span></span>Ubah</button><button type="button"><span></span>Hapus</button></p>
        </div>
        <div class="table-cell">
            <p>2022</p>
        </div>
        <div class="table-cell">
            <p>Genap</p>
        </div>
        <div class="table-cell">
            <p>1 / 100</p>
            <p><button type="button"><span></span>Daftar Peserta</button><button type="button"><span></span>Atur Jadwal</button><button type="button"><span></span>Kosongkan Jadwal</button></p>
        </div>
        <div class="table-cell">
            <p>1 / 100</p>
            <p><button type="button"><span></span>Lihat</button><button type="button"><span></span>Kosongkan</button></p>
        </div>
    </div>        

    <div class="table-row">
        <div class="table-cell">
            <p>Pengolahan Sinyal DIgital</p>
            <p><button type="button"><span></span>Ubah</button><button type="button"><span></span>Hapus</button></p>
        </div>
        <div class="table-cell">
            <p>2022</p>
        </div>
        <div class="table-cell">
            <p>Genap</p>
        </div>
        <div class="table-cell">
            <p>1 / 100</p>
            <p><button type="button"><span></span>Daftar Peserta</button><button type="button"><span></span>Atur Jadwal</button><button type="button"><span></span>Kosongkan Jadwal</button></p>
        </div>
        <div class="table-cell">
            <p>1 / 100</p>
            <p><button type="button"><span></span>Lihat</button><button type="button"><span></span>Kosongkan</button></p>
        </div>
    </div>

    <div class="table-row">
        <div class="table-cell">
            <p>Pengolahan Sinyal DIgital</p>
            <p><button type="button"><span></span>Ubah</button><button type="button"><span></span>Hapus</button></p>
        </div>
        <div class="table-cell">
            <p>2022</p>
        </div>
        <div class="table-cell">
            <p>Genap</p>
        </div>
        <div class="table-cell">
            <p>1 / 100</p>
            <p><button type="button"><span></span>Daftar Peserta</button><button type="button"><span></span>Atur Jadwal</button><button type="button"><span></span>Kosongkan Jadwal</button></p>
        </div>
        <div class="table-cell">
            <p>1 / 100</p>
            <p><button type="button"><span></span>Lihat</button><button type="button"><span></span>Kosongkan</button></p>
        </div>
    </div>