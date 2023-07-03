<html>
    <head>
    <title>Daftar Kelompok Praktikum - COLABS</title>
    <?php
    session_start();
    echo '<link rel="stylesheet" href="Style/Praktikan/pelaksanaan.css">';
    ?>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
                <img src="logo.png" class="logo">
                <ul>
                    <li><a href="#">Perencanaan</a></li>
                    <div class="dropdown">
                        <ul>
                            <li id="space"><a href="#">Pelaksanaan</a></li>
                            <div class="dropdown-content">
                                <p><li><a href="#">Jadwal</a></li></p>
                                <p><li><a href="#">Kelompok</a></li></p>
                            </div>
                        </ul>
                    </div>
                    <li><a href="#">Nilai</a></li>
                    <div class="dropdown">
                        <ul>
                            <li id="space"><a href="#">Account</a></li>
                            <div class="dropdown-content">
                                <form action="/action_page.php">
                                    <a><p>Peran:</p></a>
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
            <h1>DAFTAR KELOMPOK PRAKTIKUM</h1>
        <div class="table-box">
        <div class="table-row table-head">
            <div class="table-cell">
                <p>Nama Praktikum</p>
            </div>
            <div class="table-cell">
                <p>Modul</p>
            </div>
            <div class="table-cell">
                <p>NRP Anggota</p>
            </div>
            <div class="table-cell">
                <p>Nama Anggota</p>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>Database</p>
            </div>
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

        <div class="table-row">
            <div class="table-cell">
                <p>Jaringan Komputer</p>
            </div>
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

        <div class="table-row">
            <div class="table-cell">
                <p>Pemrograman Lanjut</p>
            </div>
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

        <div class="table-row">
            <div class="table-cell">
                <p>Pengolahan SInyal Digital</p>
            </div>
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

        <div class="table-row">
            <div class="table-cell">
                <p>Rangkaian Digital</p>
            </div>
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
        
        <div class="table-row">
            <div class="table-cell">
                <p>Workshop Telematika</p>
            </div>
            <div class="table-cell">
                <p>-</p>
            </div>
            <div class="table-cell">
                <p>-</p>
            </div>
            <div class="table-cell last-cell">
                <p>-</p>
            </div>
        </div>
    </body>
</html>
