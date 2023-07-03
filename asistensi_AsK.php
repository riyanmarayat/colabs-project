<html>
<head> 
    <title>Asistensi - COLABS</title> 
    <?php
    session_start();
    $_SESSION['Peran'] = 'Asisten'; //Ini merupakan perubahan secara manual
    if(isset($_SESSION['Peran']){
        if(isset($_SESSION['Peran'] == 'Asisten')){
            echo '<link rel="stylesheet" href="Style/Asisten/asistensi.css">'; //Link style untuk asisten
        }else if(isset($_SESSION['Peran'] == 'Koordinator')){
            echo '<link rel="stylesheet" href="Style/Koordinator/asistensi.css">'; //Link style untuk koordinator
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
                <li id="space"><a href="#">Asistensi</a></li>
                <li id="space"><a href="#">Kelola Asisten</a></li>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Account</a></li>
                        <div class="dropdown-content">
                            <form action="/action_page.php">
                                <a><p>Peran:</p></a>
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
        <h1>ASISTENSI</h1>
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
                        <p>Kelas</p>
                    </div>
                    <div class="table-cell">
                        <p>Tanggal Mulai</p>
                    </div>
                    <div class="table-cell">
                        <p>Tanggal Selesai</p>
                    </div>
                    <div class="table-cell">
                        <p>Jumlah Asistensi</p>
                    </div>
                    <div class="table-cell">
                        <p>Aktivitas</p>
                    </div>
                </div>    
        
                <div class="table-row">
                    <div class="table-cell">
                        <p>Nama Praktikum</p>
                    </div>
                    <div class="table-cell">
                        <p>5 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Modul</p>
                    </div>
                    <div class="table-cell">
                        <button type="button"><span></span>Atur Jadwal Asistensi</button>
                    </div>
                </div>
                
                <div class="table-row">
                    <div class="table-cell">
                        <p>Nama Praktikum</p>
                    </div>
                    <div class="table-cell">
                        <p>5 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>-</p>
                    </div>
                    <div class="table-cell">
                        <button type="button"><span></span>Atur Jadwal Asistensi</button>
                    </div>
                </div>
                
                <div class="table-row">
                    <div class="table-cell">
                        <p>Nama Praktikum</p>
                    </div>
                    <div class="table-cell">
                        <p>5 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Modul</p>
                    </div>
                    <div class="table-cell">
                        <button type="button"><span></span>Atur Jadwal Asistensi</button>
                    </div>
                </div>
        
                <div class="table-row">
                    <div class="table-cell">
                        <p>Nama Praktikum</p>
                    </div>
                    <div class="table-cell">
                        <p>5 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Modul</p>
                    </div>
                    <div class="table-cell">
                        <button type="button"><span></span>Atur Jadwal Asistensi</button>
                    </div>
                </div>
        
                <div class="table-row">
                    <div class="table-cell">
                        <p>Nama Praktikum</p>
                    </div>
                    <div class="table-cell">
                        <p>5 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Juni 2023</p>
                    </div>
                    <div class="table-cell">
                        <p>10 Modul</p>
                    </div>
                    <div class="table-cell">
                        <button type="button"><span></span>Atur Jadwal Asistensi</button>
                    </div>
                </div>
    </div>
</body>
</html>