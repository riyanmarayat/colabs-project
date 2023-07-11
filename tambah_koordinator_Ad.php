<!DOCTYPE html> 
<html>
<head> 
    <title>Tambah Koordinator - COLABS</title> 
    <link rel="stylesheet" href="Style/Admin/tambahkoordinator.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="Image/logo.png" class="logo">
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
                        </div>
                    </ul>
                </div>
            </ul>
        </div>
    </div>

    <div class="content">
        <h1>TAMBAH KOORDINATOR</h1>
        <label for="Kurikulum">Kurikulum : </label>
            <select name="Kurikulum" id="Kurikulum">
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
            </select>
        <div class="content2">
            <form>
                <label>ID Pengguna : </label>
                <a href="#"></a><input type="text"><br></a>
                <a href="#"></a><label></label><br></a>
                <label>Peran</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="A" name="A" value="Admin">
                <label for="A">Admin</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="D" name="D" value="DosenPJ">
                <label for="D">Dosen Penanggung Jawab</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="K" name="K" value="Koor">
                <label for="K">Koordinator Asisten</label><br>
                <a href="#"></a><label></label><br></a>
                <input type="checkbox" id="As" name="As" value="Asisten">
                <label for="As">Asisten</label><br>
                <a href="#"></a><label></label><br></a>
                <button type="button"><span></span>Save</button>
            </form>
        </div>
    </div>

    <footer>
    <p>COLABS Copyright, 2023</p>
    </footer>
</body>
</html>