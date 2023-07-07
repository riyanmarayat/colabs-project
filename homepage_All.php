<!DOCTYPE html>
<html>

<head>
    <title>COLABS</title>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    //$_SESSION['Peran'] = 'Asisten'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Praktikan') {
            echo '<link rel="stylesheet" href="Style/Praktikan/style.css">';
        } else if ($_SESSION['Peran'] == 'Asisten') {
            echo '<link rel="stylesheet" href="Style/Asisten/homepage.css">';
        } else if ($_SESSION['Peran'] == 'Koordinator') {
            echo '<link rel="stylesheet" href="Style/Koordinator/home.css">';
        } else if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/home.css">';
        }
    } else if (!isset($_SESSION['Peran'])){
        echo '<link rel="stylesheet" href="Style/Login/home.css">';
    }
    ?>

</head>

<body>
    <div class="banner">
        <div class="navbar">
            <a href="homepage_All.php"><img src="Image/logo.png" class="logo"></a>
            <ul>
                <?php
                if (isset($_SESSION['Peran'])) {
                    if ($_SESSION['Peran'] == 'Praktikan') {
                        echo '<li><a href="#">Perencanaan</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Pelaksanaan</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Jadwal</a></li></p>';
                        echo '<p><li><a href="#">Kelompok</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<li><a href="#">Nilai</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        //Proses Logout
                        echo '<form action="process_logout.php" method="post">';
                        echo '<div class="dropdown-content">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="prak" name="Peran" value="Praktikan">';
                        echo '<label for="prak">Praktikan</label></a>';
                        echo '<li><button type="submit">Logout</button></li>';
                        echo '</div>';
                        echo '</form>';
                        echo '</ul>';
                        echo '</div>';
                    } else if ($_SESSION['Peran'] == 'Asisten') {
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Asistensi</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Asistensi</a></li></p>';
                        echo '<p><li><a href="#">Jadwal</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        //Proses Logout
                        echo '<form action="process_logout.php" method="post">';
                        echo '<div class="dropdown-content">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="prak" name="Peran" value="Asisten">';
                        echo '<label for="prak">Asisten</label></a>';
                        echo '<li><button type="submit">Logout</button></li>';
                        echo '</div>';
                        echo '</form>';
                        echo '</ul>';
                        echo '</div>';
                    } else if ($_SESSION['Peran'] == 'Koordinator') {
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Asistensi</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Asistensi</a></li></p>';
                        echo '<p><li><a href="#">Jadwal</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<li><a href="#">Kelola Asisten</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        //Proses Logout
                        echo '<form action="process_logout.php" method="post">';
                        echo '<div class="dropdown-content">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="prak" name="Peran" value="Koordinator">';
                        echo '<label for="prak">Koordinator</label></a>';
                        echo '<li><button type="submit">Logout</button></li>';
                        echo '</div>';
                        echo '</form>';
                        echo '</ul>';
                        echo '</div>';
                    } else if($_SESSION['Peran'] == 'Admin') {
                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Praktikum</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Kelola Praktikum</a></li></p>';
                        echo '<p><li><a href="#">Kelola Kelas</a></li></p>';
                        echo '<p><li><a href="#">Masa FRS</a></li></p>';
                        echo '<p><li><a href="#">Jadwal</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';

                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Rekapitulasi</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Nilai Per Mahasiswa</a></li></p>';
                        echo '<p><li><a href="#">Nilai Per Semester</a></li></p>';
                        echo '<p><li><a href="#">Nilai Per Lab</a></li></p>';
                        echo '<p><li><a href="#">Asisten</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';

                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Pelaksanaan</a></li>';
                        echo '<div class="dropdown-content">';
                        echo '<p><li><a href="#">Daftar Koordinator</a></li></p>';
                        echo '<p><li><a href="#">Tambah Koordinator</a></li></p>';
                        echo '<p><li><a href="#">Login Mahasiswa</a></li></p>';
                        echo '<p><li><a href="#">Kelola Asisten</a></li></p>';
                        echo '</div>';
                        echo '</ul>';
                        echo '</div>';

                        echo '<li><a href="#">Download</a></li>';

                        echo '<div class="dropdown">';
                        echo '<ul>';
                        echo '<li id="space"><a href="#">Account</a></li>';
                        //Proses Logout
                        echo '<form action="process_logout.php" method="post">';
                        echo '<div class="dropdown-content">';
                        echo '<a><p>Peran:</p></a>';
                        echo '<a><input type="radio" id="prak" name="Peran" value="Admin">';
                        echo '<label for="prak">Admin</label></a>';
                        echo '<li><button type="submit">Logout</button></li>';
                        echo '</div>';
                        echo '</form>';
                        echo '</ul>';
                        echo '</div>';
                    }
                } else if(!isset($_SESSION['Peran'])) {
                    echo '<ul>';
                    echo '<li><a href="#">Login</a></li>';
                    echo '</ul>';
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="content">
        <h1>SISTEM INFORMASI PRAKTIKUM</h1>
        <p>Pengumuman Praktikum</p>
        <div>
            <button type="button"><span></span>Database</button>
            <button type="button"><span></span>Jaringan Komputer</button>
            <button type="button"><span></span>Pemrograman Lanjut</button>
            <button type="button"><span></span>Pengolahan SInyal Digital</button>
            <button type="button"><span></span>Rangkaian Digital</button>
            <button type="button"><span></span>Workshop Telematika</button>
        </div>
    </div>
</body>
</html>