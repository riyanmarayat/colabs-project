<!DOCTYPE html>
<html>
    <head>
    <title>Daftar Praktikum - COLABS</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    include_once 'connectDB.php';

    // Pengecekan database
    $stmt = $pdo->prepare("SELECT Nama_Praktikum, Lab_Praktikum FROM list_praktikum");
    $stmt->execute();
    $sql_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Menghitung Index Array SQL
    if (is_array($sql_arr)) {
        $idx_sql_arr = sizeof($sql_arr);
    } else {
        $idx_sql_arr = 0;
    }
    
    for ($i = 0; $i < $idx_sql_arr; $i++){
        $list_nama_praktikum[] = $sql_arr[$i]['Nama_Praktikum'];
        $lab_praktikum[] = $sql_arr[$i]['Lab_Praktikum'];
    }

    $_SESSION['list_nama_praktikum'] = $list_nama_praktikum;

    //Menghitung kurikulum
    $hari_ini = date("Y-m-d");
    $tahun = date("Y");
    $tahun1 = date("Y") . '-08-01';
    $tahun2 = date("Y") + 1 . '-02-01';
    $tahun3 = date("Y") . '-02-01';
    if ($tahun1 <= $hari_ini && $hari_ini < $tahun2) {
        $kurikulum = $tahun . '/' . $tahun + 1;
    } else {
        $kurikulum = $tahun - 1 . '/' . $tahun; 
    }


    //$_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/keloladaftarpraktikum.css">'; //Link CSS Admin
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
            <h1>DAFTAR PRAKTIKUM</h1>
            <p><button type="button";"><span></span><a href="tambahpraktikum_Ad.php" style="color:inherit; text-decoration:none;">Tambah Praktikum</a></button><button type="button"><span></span><a href="masa_frs_Ad.php" style="color:inherit; text-decoration:none;">Masa FRS</a></button></p>
            <div class="table-box" id="table_praktikum">
                <div class="table-row table-head">
                    <div class="table-cell">
                        <p>No.</p>
                    </div>
                    <div class="table-cell">
                        <p>Nama Praktikum</p>
                    </div>
                    <div class="table-cell">
                        <p>Laboratorium</p>
                    </div>
                    <div class="table-cell">
                        <p>Tahun Kurikulum</p>
                    </div>
                    <div class="table-cell">
                        <p>Aktivitas</p>
                    </div>
                </div>

                <!-- CONTOH TABLE ROWNYA -->
                <!-- <div class="table-row">
                    <div class="table-cell" value="Rangkaian Digital">
                        <p>1</p>
                    </div>
                    <div class="table-cell">
                        <p>Rangkaian Digital</p>
                    </div>
                    <div class="table-cell">
                        <p>Lab. AJ 403</p>
                    </div>
                    <div class="table-cell">
                        <p>2023</p>
                    </div>
                    <div class="table-cell">
                        <p><button type="button" class="btn-ubah-prak"><span></span>Ubah</button><button type="button" class="btn-hps-prak"><span></span>Hapus</button></p>
                    </div>
                </div>         -->

                <?php
                //Perulangan untuk menghasilkan tabel
                for ($i = 0; $i < $idx_sql_arr; $i++) {
                    $new_table ='<div class="table-row" value="' . $_SESSION['list_nama_praktikum'][$i] . '">
                        <div class="table-cell">
                            <p>' . ($i + 1) . '</p>
                        </div>
                        <div class="table-cell">
                            <p>' . $_SESSION['list_nama_praktikum'][$i] . '</p>
                        </div>
                        <div class="table-cell">
                            <p>' . $lab_praktikum[$i] . '</p>
                        </div>
                        <div class="table-cell">
                            <p>' . $kurikulum . '</p>
                        </div>
                        <div class="table-cell">
                            <p><button type="button" class="btn-ubah-prak"><span></span>Ubah</button><button type="button" class="btn-hps-prak"><span></span>Hapus</button></p>
                        </div>
                    </div>';
                    echo $new_table;
                }
                ?>
            </div>
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Event listener untuk tombol Hapus Praktikum
            $("#table_praktikum").on("click", ".btn-hps-prak", function() {
                //Mengambil nilai opsi dari mata kulaih prasyarat
                var row = $(this).closest(".table-row"); //Mendapatkan baris tabel terdekat
                var nama_praktikum = row.attr("value"); //Mendapatkan nilai nama praktikum dari tabel

                //Mengirim permintaan AJAX ke file PHP
                $.ajax({
                    url: "proses_ajx_kelola_daftar_praktikum.php",
                    type: "POST",
                    data: { action: "hapus", rowIndex: row.index(), nama: nama_praktikum},
                    success: function(response) {
                        //Menangani respon dari server
                        if (response === "success") {
                            // Menghapus baris tabel dari tampilan
                            row.remove();
                            console.log("Berhasil menghapus");
                        } else {
                            console.log("Gagal menghapus baris tabel.");
                            console.log(response);
                        }
                    }
                });
            });     

            // Event listener untuk tombol hapus matkul pra
            $("#tabel_matkulpra").on("click", ".hpsbtn_matkulpra", function() {
                var row = $(this).closest(".table-row"); // Mendapatkan baris tabel terdekat
                var value = row.attr("value");
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
