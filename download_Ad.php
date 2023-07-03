<!DOCTYPE html> 
<html>
<head> 
    <title>COLABS</title> 
    <?php
    session_start();
    $_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/download.css">';
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
            <img src="../Image/logo.png" class="logo">
            <ul>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Praktikum</a></li>
                        <div class="dropdown-content">
                            <p><li><a href="#">Kelola Praktikum</a></li></p>
                            <p><li><a href="#">Kelola Kelas</a></li></p>
                            <p><li><a href="#">Masa FRS</a></li></p>
                            <p><li><a href="#">Jadwal</a></li></p>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Rekapitulasi</a></li>
                        <div class="dropdown-content">
                            <p><li><a href="#">Nilai Per Mahasiswa</a></li></p>
                            <p><li><a href="#">Nilai Per Semester</a></li></p>
                            <p><li><a href="#">Nilai Per Lab</a></li></p>
                            <p><li><a href="#">Asisten</a></li></p>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Pelaksanaan</a></li>
                        <div class="dropdown-content">
                            <p><li><a href="#">Daftar Koordinator</a></li></p>
                            <p><li><a href="#">Tambah Koordinator</a></li></p>
                            <p><li><a href="#">Login Mahasiswa</a></li></p>
                            <p><li><a href="#">Kelola Asisten</a></li></p>
                        </div>
                    </ul>
                </div>
                <li><a href="#">Download</a></li>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Account</a></li>
                        <div class="dropdown-content">
                            <form action="/action_page.php">
                                <a><p>Peran:</p></a>
                                <a><input type="radio" id="prak" name="Peran" value="Admin">
                                <label for="prak">Admin</label></a>
                                <a><input type="radio" id="prak" name="Peran" value="Dosen">
                                <label for="prak">Dosen</label></a>
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
        <h1>DOWNLOAD</h1>
        <button type="button"><span></span>Add</button>
        <div class="table-box">
            <div class="table-row table-head">
                <div class="table-cell">
                    <p>Nama</p>
                </div>
                <div class="table-cell">
                    <p>Versi Tanggal</p>
                </div>
                <div class="table-cell">
                    <p>Ukuran</p>
                </div>
            </div>    
    
            <div class="table-row">
                <div class="table-cell">
                    <p>-</p>
                </div>
                <div class="table-cell">
                    <p>-</p>
                </div>
                <div class="table-cell">
                    <p>-</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>