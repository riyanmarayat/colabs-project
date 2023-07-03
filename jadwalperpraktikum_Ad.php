<!DOCTYPE html>
<html>
    <head>
    <title>Jadwal Praktikum - COLABS</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <?php
    session_start();
    $_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan secara manual
    if(isset($_SESSION['Peran']){
        if(isset($_SESSION['Peran'] == 'Admin')){
            echo '<link rel="stylesheet" href="Style/Admin/jadwalperpraktikum.css">'; //Link style untuk Admin
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
                <img src="logo.png" class="logo">
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
            <h1>JADWAL PRAKTIKUM</h1>
            <p1>Nama Praktikum, Tahun, Kurikulum</p1>
        <div class="table-box">
        <div class="table-row table-head">
            <div class="table-cell">
                <p></p>
            </div>
            <div class="table-cell">
                <p></p>
            </div>
            <div class="table-cell">
                <p>Tanggal 1</p>
            </div>
            <div class="table-cell">
                <p>Tanggal 2</p>
            </div>
            <div class="table-cell">
                <p>Tanggal 3</p>
            </div>
            <div class="table-cell">
                <p>Tanggal 4</p>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Sesi 14.00</p>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
        </div>     

        <div class="table-row">
            <div class="table-cell">
                <p></p>
            </div>
            <div class="table-cell">
                <p></p>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Sesi 16.00</p>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p></p>
            </div>
            <div class="table-cell">
                <p></p>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Sesi 16.00</p>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
            <div class="table-cell-cb">
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 1</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 2</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="namamhs" name="namamhs" value="mahasiswa">
                <label for="namamhs">Nama Mahasiswa 3</label><br>
            </div>
        </div>
    </body>
</html>
