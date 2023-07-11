<!DOCTYPE html> 
<html>
<head> 
    <title>Tambah Praktikum - COLABS</title> 
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once 'connectDB.php';

    // Pengecekan database
    $stmt = $pdo->prepare("SELECT nama_matkulpra FROM list_matkulpra");
    $stmt->execute();  

    $sql_lst_matkulpra = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $list_matkulpra = $sql_lst_matkulpra;
    //Pengecekan Array
    if (is_array($list_matkulpra)) {
        $idx_list_matkulpra = sizeof($list_matkulpra);
    } else {
        $idx_list_matkulpra = 0;
    }

    $_SESSION['list_matkulpra_dipilih'] = array();

    //$_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/tambahasisten.css">'; //Link CSS Admin
        }else {
            session_write_close();
            header('Location: error403.php'); //Access Denied
            exit();
        }
    } else {
        session_write_close();
            header('Location: error403.php'); //Access Denied
            exit();
    }
    ?>
</head>
<body>
    <div class="banner">
        <div class="navbar">
        <a href="homepage_All.php"><img src="Image/logo.png" class="logo"></a>
            <ul>
                <!--Praktikum-->
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Praktikum</a></li>
                        <div class="dropdown-content">
                        <p><li><a href="kelola_daftar_praktikum_Ad.php">Kelola Praktikum</a></li></p>
                        <p><li><a href="kelola_kelas_Ad.php">Kelola Kelas</a></li></p>
                        <p><li><a href="masa_frs_Ad.php">Masa FRS</a></li></p>
                        <p><li><a href="jadwal_per_praktikum_Ad.php">Jadwal</a></li></p>
                        </div>
                    </ul>
                    </div>

                    <!--Rekapitulasi-->
                    <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Rekapitulasi</a></li>
                        <div class="dropdown-content">
                        <p><li><a href="rekap_nilai_mhs_Ad.php">Nilai Per Mahasiswa</a></li></p>
                        <p><li><a href="rekap_nilai_sms_Ad.php">Nilai Per Semester</a></li></p>
                        <p><li><a href="rekap_nilai_lab_Ad.php">Nilai Per Lab</a></li></p>
                        <p><li><a href="jadwal_asistensi_AdAsK.php">Asisten</a></li></p>
                        </div>
                    </ul>
                    </div>

                    <!--Pelaksanaan-->
                    <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Pelaksanaan</a></li>
                        <div class="dropdown-content">
                        <p><li><a href="daftar_pengguna_Ad.php">Daftar Koordinator</a></li></p>
                        <p><li><a href="tambah_koordinator_Ad.php">Tambah Koordinator</a></li></p>
                        <p><li><a href="login_mhs_Ad.php">Login Mahasiswa</a></li></p>
                        <p><li><a href="kelola_asisten_AdK.php">Kelola Asisten</a></li></p>
                        </div>
                    </ul>
                    </div>

                    <li><a href="download_Ad.php">Download</a></li>

                    <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Account</a></li>
                        <!--Logout-->
                        <form action="process_logout.php" method="post">
                        <div class="dropdown-content">
                            <a><p>Peran:</p></a>
                            <a><input type="radio" id="prak" name="Peran" value="Admin">
                            <label for="prak">Admin</label></a>
                            <li><button type="submit">Logout</button></li>
                        </div>
                        </form>
                    </ul>
                </div>
            </ul>
        </div>
    </div>

    <div class="content">
        <h1>TAMBAH PRAKTIKUM</h1>
        <div class="content2">
        <?php

        //MESSAGE BERHASIL ATAU ERROR
        if (isset($_SESSION['message'])):
        ?>
            <div class="message">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php
        endif;
        ?>
            <form method="post" action="proses_tambahpraktikum.php">
                <label for="nama_praktikum">Nama Praktikum</label>
                <input type="text" name="nama_praktikum" required><br><br>

                <label>Laboratorium</label><br><br>
                <input type="radio" name="nama_lab" value="B201" required>
                <label for="nama_lab">B201</label><br><br>
                <input type="radio" name="nama_lab" value="B401" required>
                <label for="nama_lab">B401</label><br><br>

                <label>Mata Kuliah Prasyarat:</label>
                <select name="matkul_prasyarat" id="matkulp">
                    <!--Contoh Option
                    <option value="Dasar Pemrograman">Dasar Pemrograman</option>-->
                    <?php
                    for ($i = 0; $i < $idx_list_matkulpra; $i++) {
                        echo '<option value="' . $list_matkulpra[$i]['nama_matkulpra'] . '">' . $list_matkulpra[$i]['nama_matkulpra'] . '</option>';
                    }
                    ?>
                </select>
                <button type="button" id="tbhbtn_matkulpra"><span></span>Tambah</button><br>
                <div class="table-box" id="tabel_matkulpra">
                    <div class="table-row table-head">
                        <div class="table-cell">
                            <p>Mata Kuliah Prasyarat</p>
                        </div>
                        <div class="table-cell">
                            <p>Aktivitas</p>
                        </div>
                    </div>
                    <!--Untuk tabel rownya ada di file proses_ajx_tambahpraktikum.php-->
                </div><br>

                <label">Jumlah Modul:</label>
                <input type="text" name="jumlah_modul"><br>

                <button type="submit" name="submit">Simpan</button>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Event listener untuk tombol tambah matkul pra
            $("#tbhbtn_matkulpra").on("click", function() {
                //Mengambil nilai opsi dari mata kulaih prasyarat
                var selected_option = $("#matkulp").val();

                //Mengirim permintaan AJAX ke file PHP
                $.ajax({
                    url: "proses_ajx_tambahpraktikum.php",
                    type: "POST",
                    data: { option: selected_option},
                    success: function(response) {
                        //Menangani respon dari server
                        if (response === "error") {
                            console.log("Gagal menambahkan tabel mata kuliah prasyarat")
                        } else {
                            //Menambahkan tabel baru ke dalam #tabel_matkulpra
                            $("#tabel_matkulpra").append(response);
                        }
                    }
                });
            });     

            // Event listener untuk tombol hapus matkul pra
            $("#tabel_matkulpra").on("click", ".hpsbtn_matkulpra", function() {
                var row = $(this).closest(".table-row"); // Mendapatkan baris tabel terdekat
                var value = row.attr("value"); //Mendapatkan value dari nama matkul prasayarat
                $.ajax({
                    url: "proses_ajx_tambahpraktikum.php",
                    type: "POST",
                    data: { action: "hapus", rowIndex: row.index(), val: value },
                    success: function(response) {
                        if (response === "success") {
                            // Menghapus baris tabel dari tampilan
                            row.remove();
                        } else {
                            console.log("Gagal menghapus baris tabel.");
                        }
                    }
                });
            });


        });
    </script>
    <?php
    $pdo = null;
    ?>
</body>
</html>