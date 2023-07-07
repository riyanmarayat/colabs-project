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
