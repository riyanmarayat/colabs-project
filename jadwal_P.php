<!DOCTYPE html>
<html>

<head>
    <title>Jadwal Praktikum - COLABS</title>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    echo '<link rel="stylesheet" href="Style/Praktikan/pelaksanaan.css">';
    ?>
</head>

<body>
    <header>
    <div class="banner">
        <div class="navbar">
        <img src="Image\logo.png" class="logo">
            <ul>
                <li><a href="#">Perencanaan</a></li>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Pelaksanaan</a></li>
                        <div class="dropdown-content">
                            <p>
                                <li><a href="#">Jadwal</a></li>
                            </p>
                            <p>
                                <li><a href="#">Kelompok</a></li>
                            </p>
                        </div>
                    </ul>
                </div>
                <li><a href="#">Nilai</a></li>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Account</a></li>
                        <div class="dropdown-content">
                            <form action="/action_page.php">
                                <a>
                                    <p>Peran:</p>
                                </a>
                                <a><input type="radio" id="prak" name="Peran" value="Praktikan">
                                    <label for="prak">Praktikan</label>
                                </a>
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
    </header>

    <main>
    <div class="content">
        <h1>JADWAL PRAKTIKUM</h1>
        <div class="table-box">
            <div class="table-row table-head">
                <div class="table-cell">
                    <p>Nama Praktikum</p>
                </div>
                <div class="table-cell">
                    <p>Modul</p>
                </div>
                <div class="table-cell">
                    <p>Tanggal</p>
                </div>
                <div class="table-cell">
                    <p>Waktu</p>
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
        </div>
    </div>
    </main>

    <footer>
        
    </footer>
</body>
<?php
session_destroy();
?>
</html>