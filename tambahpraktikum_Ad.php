<!DOCTYPE html> 
<html>
<head> 
    <title>Tambah Praktikum - COLABS</title> 
    <?php
    session_start();
    $_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/tambahasisten.css">';
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
        <h1>TAMBAH PRAKTIKUM</h1>
        <div class="content2">
            <form>
                <a href="#"></a><label>Nama Praktikum : </label><input type="text"><br>
                <a href="#"></a><label></label><br>
                <a href="#"></a><label>Laboratorium :</label><br>
                <a href="#"></a><label></label><br>
                    <input type="radio" id="lab" name="labname" value="Lab 1">
                    <label for="lab">Lab 1</label></a><br>
                    <a href="#"></a><label></label><br>
                    <a><input type="radio" id="lab" name="labname" value="Lab 2">
                    <label for="prak">Lab 2</label></a><br>
                    <a href="#"></a><label></label><br>
                <a href="#"></a><label>Mata Kuliah Prasyarat : </label>
                <select name="matakuliahp" id="matkulp">
                    <option value="mk1">Mata Kuliah 1</option>
                    <option value="mk2">Mata Kuliah 2</option>
                    <option value="mk3">Mata Kuliah 3</option>
                    <option value="mk4">Mata Kuliah 4</option>
                </select>
                <button type="button"><span></span>Tambah</button><br>
                <div class="table-box">
                    <div class="table-row table-head">
                        <div class="table-cell">
                            <p>Mata Kuliah Prasyarat</p>
                        </div>
                        <div class="table-cell">
                            <p>Aktivitas</p>
                        </div>
                    </div>
                
                    <div class="table-row">
                        <div class="table-cell">
                            <p>Mata Kuliah 2</p>
                        </div>
                        <div class="table-cell">
                            <p><button type="button"><span></span>Hapus</button></p>
                        </div>
                    </div>
                </div>
                <a href="#"></a><label></label><br>
                <a href="#"></a><label>Jumlah Modul : </label><input type="text"><br>
                <button type="button"><span></span>Simpan</button><br>
            </form>
        </div>
    </div>
</body>
</html>