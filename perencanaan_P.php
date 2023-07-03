<?php
session_start();
//Mengecek jika Pertama kali buka
if (!isset($_SESSION['databaseTerambil'])) {
    $_SESSION['databaseTerambil'] = false;
}
if (!isset($_SESSION['jarkomTerambil'])) {
    $_SESSION['jarkomTerambil'] = false;
}
if (!isset($_SESSION['proglanTerambil'])) {
    $_SESSION['proglanTerambil'] = false;
}
if (!isset($_SESSION['psdTerambil'])) {
    $_SESSION['psdTerambil'] = false;
}
if (!isset($_SESSION['rdigTerambil'])) {
    $_SESSION['rdigTerambil'] = false;
}
if (!isset($_SESSION['wortelTerambil'])) {
    $_SESSION['wortelTerambil'] = false;
}

$databaseTerambil = $_SESSION['databaseTerambil'];
$jarkomTerambil = $_SESSION['jarkomTerambil'];
$proglanTerambil = $_SESSION['proglanTerambil'];
$psdTerambil = $_SESSION['psdTerambil'];
$rdigTerambil = $_SESSION['rdigTerambil'];
$wortelTerambil = $_SESSION['wortelTerambil'];
//Mengecek apakah tombol sudah diklik
//Bagian Database
/*if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['databaseAmbil'])) {
    $_SESSION['databaseTerambil'] = false;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['databaseBatal'])) {
    $_SESSION['databaseTerambil'] = true;
}

//Bagian Jaringan Komputer
if (isset($_POST['jarkomAmbil'])) {
    $_SESSION['jarkomTerambil'] = true;
}
if (isset($_SESSION['jarkomBatal'])) {
    $_SESSION['jarkomTerambil'] = false;
}

//Bagian Pemrograman Lanjut
if (isset($_POST['proglanAmbil'])) {
    $_SESSION['proglanTerambil'] = true;
}
if (isset($_POST['proglanBatal'])) {
    $_SESSION['proglanTerambil'] = false;
}

//Bagian Pengolahan Sinyal Digital
if (isset($_POST['psdAmbil'])) {
    $_SESSION['psdTerambil'] = true;
}
if (isset($_POST['psdBatal'])) {
    $_SESSION['psdTerambil'] = false;
}

//Bagian Rangkaian Digital
if (isset($_POST['rdigAmbil'])) {
    $_SESSION['rdigTerambil'] = true;
}
if (isset($_POST['rdigBatal'])) {
    $_SESSION['rdigTerambil'] = false;
}

//Bagian Workshop Telematika
if (isset($_POST['wortelAmbil'])) {
    $_SESSION['wortelTerambil'] = true;
}
if (isset($_POST['wortelBatal'])) {
    $_SESSION['wortelTerambil'] = false;
}
*/
?>

<!DOCTYPE html>
<html>

<head>
    <title>Perencanaan - COLABS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Praktikan/perencanaan.css">
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
                            <form action="">
                                <a>
                                    <p>Peran:</p>
                                </a>
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
        <h1>RENCANA PRAKTIKUM</h1>
        <div class="table-box">
            <div class="table-row table-head">
                <div class="table-cell">
                    <p>Nama Praktikum</p>
                </div>
                <div class="table-cell">
                    <p>Status</p>
                </div>
                <div class="table-cell">
                    <p>Aktivitas</p>
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
                    <p>
                        <?php
                        if ($databaseTerambil == false) {
                            echo '<form method="POST" action="perencanaan.php">';
                            echo '<button type="submit" name="databaseAmbil"><span></span>Ambil</button>';
                            echo '</form>';
                        }
                        if ($databaseTerambil == true) {
                            echo '<form method="POST" action="colabs/prosses.php">';
                            echo '<button type="submit" name="databaseAtur"><span></span>Atur Jadwal</button><button type="submit" name="databaseBatal"><span></span>Batal Ambil</button>';
                            echo '</form>';
                        }
                        ?>
                    </p>
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
                    <p>
                        <?php
                        if ($_SESSION['jarkomTerambil'] == false) {
                            echo '<button type="button" name="jarkomAmbil"><span></span>Ambil</button>';
                        } else if ($_SESSION['jarkomTerambil'] == true) {
                            echo '<button type="button" name="jarkomAtur"><span></span>Atur Jadwal</button><button type="button" name="jarkomBatal"><span></span>Batal Ambil</button>';
                        }
                        ?>
                    </p>
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
                    <p>
                        <?php
                        if ($_SESSION['proglanTerambil'] == false) {
                            echo '<button type="button" name="proglanAmbil"><span></span>Ambil</button>';
                        } else if ($_SESSION['proglanTerambil'] == true) {
                            echo '<button type="button" name="proglanAtur"><span></span>Atur Jadwal</button><button type="button" name="proglanBatal"><span></span>Batal Ambil</button>';
                        }
                        ?>
                    </p>
                </div>
            </div>

            <div class="table-row">
                <div class="table-cell">
                    <p>Pengolahan Sinyal Digital</p>
                </div>
                <div class="table-cell">
                    <p>-</p>
                </div>
                <div class="table-cell">
                    <p>
                        <?php
                        if ($_SESSION['psdTerambil'] == false) {
                            echo '<button type="button" name="psdAmbil"><span></span>Ambil</button>';
                        } else if ($_SESSION['psdTerambil'] == true) {
                            echo '<button type="button" name="psdAtur"><span></span>Atur Jadwal</button><button type="button" name="psdBatal"><span></span>Batal Ambil</button>';
                        }
                        ?>
                    </p>
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
                    <p>
                        <?php
                        if ($_SESSION['rdigTerambil'] == false) {
                            echo '<button type="button" name="rdigAmbil"><span></span>Ambil</button>';
                        } else if ($_SESSION['rdigTerambil'] == true) {
                            echo '<button type="button" name="rdigAtur"><span></span>Atur Jadwal</button><button type="button" name="rdigBatal"><span></span>Batal Ambil</button>';
                        }
                        ?>
                    </p>
                </div>
            </div>
            <div class="table-row">
                <div class="table-cell">
                    <p>Workshop Telematika</p>
                </div>
                <div class="table-cell">
                    <p>-</p>
                </div>
                <div class="table-cell last-cell">
                    <p>
                        <?php
                        if ($_SESSION['wortelTerambil'] == false) {
                            echo '<button type="button" name="wortelAmbil"><span></span>Ambil</button>';
                        } else if ($_SESSION['wortelTerambil'] == true) {
                            echo '<button type="button" name="wortelAtur"><span></span>Atur Jadwal</button><button type="button" name="wortelBatal"><span></span>Batal Ambil</button>';
                        }
                        ?>
                    </p>
                </div>
            </div>
</body>

</html>