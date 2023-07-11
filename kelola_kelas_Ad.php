<!DOCTYPE html>
<html>

<head>
    <title>Kelola Kelas - COLABS</title>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once 'connectDB.php';

    // Pengecekan database
    $stmt = $pdo->prepare("SELECT id, Nama_Praktikum, Tahun_Akademik, Semester, Jumlah_Peserta, Kuota_Peserta, Jumlah_Asisten, Kuota_Asisten FROM list_kelas");
    $stmt->execute(); 
    $sql_arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Pengecekan database 2
    $stmt2 = $pdo->prepare("SELECT Nama_Praktikum FROM list_Praktikum");
    $stmt2->execute(); 
    $sql_arr2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    //Menghitung Index Array SQL
    if (is_array($sql_arr)) {
        $idx_sql_arr = sizeof($sql_arr);
    } else {
        $idx_sql_arr = 0;
    }

    //Menghitung Index Array SQL 2
    if (is_array($sql_arr2)) {
        $idx_sql_arr2 = sizeof($sql_arr2);
    } else {
        $idx_sql_arr2 = 0;
    }

    //Mengambil data dari Database
    for ($i = 0; $i < $idx_sql_arr; $i++){
        $id_kelas[] = $sql_arr[$i]['id'];
        $nama_praktikum[] = $sql_arr[$i]['Nama_Praktikum'];
        $tahun_akademik[] = $sql_arr[$i]['Tahun_Akademik'];
        $semester[] = $sql_arr[$i]['Semester'];
        $jumlah_peserta[] = $sql_arr[$i]['Jumlah_Peserta'];
        $kuota_peserta[] = $sql_arr[$i]['Kuota_Peserta'];
        $jumlah_asisten[] = $sql_arr[$i]['Jumlah_Asisten'];
        $kuota_asisten[] = $sql_arr[$i]['Kuota_Asisten'];
    }

    //Mengambil data dari Database 2
    for ($i = 0; $i < $idx_sql_arr2; $i++){
        $list_praktikum[] = $sql_arr2[$i]['Nama_Praktikum'];
    }

    //$_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan secara manual
    if (isset($_SESSION['Peran'])) {
        if (($_SESSION['Peran'] == 'Admin')) {
            echo '<link rel="stylesheet" href="Style/Admin/kelolakelas.css">'; //Link style untuk Admin
        } else {
            //Error Tidak memiliki Akses
        }
    } else {
        //Error Tidak memiliki Akses
    }
    ?>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <img src="Image\logo.png" class="logo">
            <ul>
                <!--Praktikum-->
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Praktikum</a></li>
                        <div class="dropdown-content">
                            <p>
                                <li><a href="kelola_daftar_praktikum_Ad.php">Kelola Praktikum</a></li>
                            </p>
                            <p>
                                <li><a href="kelola_kelas_Ad.php">Kelola Kelas</a></li>
                            </p>
                            <p>
                                <li><a href="masa_frs_Ad.php">Masa FRS</a></li>
                            </p>
                            <p>
                                <li><a href="jadwal_per_praktikum_Ad.php">Jadwal</a></li>
                            </p>
                        </div>
                    </ul>
                </div>

                <!--Rekapitulasi-->
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Rekapitulasi</a></li>
                        <div class="dropdown-content">
                            <p>
                                <li><a href="rekap_nilai_mhs_Ad.php">Nilai Per Mahasiswa</a></li>
                            </p>
                            <p>
                                <li><a href="rekap_nilai_sms_Ad.php">Nilai Per Semester</a></li>
                            </p>
                            <p>
                                <li><a href="rekap_nilai_lab_Ad.php">Nilai Per Lab</a></li>
                            </p>
                            <p>
                                <li><a href="jadwal_asistensi_AdAsK.php">Asisten</a></li>
                            </p>
                        </div>
                    </ul>
                </div>

                <!--Pelaksanaan-->
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Pelaksanaan</a></li>
                        <div class="dropdown-content">
                            <p>
                                <li><a href="daftar_pengguna_Ad.php">Daftar Koordinator</a></li>
                            </p>
                            <p>
                                <li><a href="tambah_koordinator_Ad.php">Tambah Koordinator</a></li>
                            </p>
                            <p>
                                <li><a href="login_mhs_Ad.php">Login Mahasiswa</a></li>
                            </p>
                            <p>
                                <li><a href="kelola_asisten_AdK.php">Kelola Asisten</a></li>
                            </p>
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
                                <a>
                                    <p>Peran:</p>
                                </a>
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
        <h1>KELOLA KELAS</h1>
        <p><button type="button" id="btn-tbh-kelas"><span></span>Tambah Kelas</button></p>

        <?php
        //Penentuan Kurikulum
        $awal_kurikulum = "2022";
        $tahun_ini = date("Y");
        $selisih_kurikulum = $tahun_ini - $awal_kurikulum;
        ?>
        <label for="Kurikulum">Kurikulum:</label>
        <select name="Kurikulum" id="Kurikulum">
            <!--CONTOH KURKULUM-->
            <!-- <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option> -->

            <!-- Perulangan untuk menambahkan option kurikulum pada web -->
            <?php
            for ($i = $selisih_kurikulum; $i >= 0; $i--) {
                echo '<option value="' . ($awal_kurikulum + $i) . '">' . ($awal_kurikulum + $i) . '</option>';
            }
            ?>
        </select>

        <?php
        //Penentuan Tahun Akademik
        $awal_tahun_akademik = "2022";
        $selisih_tahun_akademik = $tahun_ini - $awal_tahun_akademik;
        $sekarang = date("Y-m-d");
        ?>
        <label for="TahunAkademik">Tahun Akademik:</label>
        <select name="TahunAkademik" id="TahunAkademik">
            <!-- Contoh Tahun Akademik -->
            <!-- <option value="2022/2023">2022/2023</option>
                <option value="2021/2022">2021/2022</option>
                <option value="2020/2021">2020/2021</option>
                <option value="2019/2020">2019/2020</option> -->

            <?php
            if ($sekarang >= ($tahun_ini . '08-01') && $sekarang < (($tahun_ini + 1) . '02-01')) {
                for ($i = $selisih_kurikulum; $i >= 0; $i--) {
                    echo '<option value="' . ($awal_tahun_akademik + $i) . '/' . ($awal_tahun_akademik + $i + 1) . '">' . ($awal_tahun_akademik + $i) . '/' . ($awal_tahun_akademik + $i + 1) . '</option>';
                }
            } else {
                for ($i = $selisih_kurikulum; $i >= 0; $i--) {
                    echo '<option value="' . ($awal_tahun_akademik + $i - 1) . '/' . ($awal_tahun_akademik + $i) . '">' . ($awal_tahun_akademik + $i - 1) . '/' . ($awal_tahun_akademik + $i) . '</option>';
                }
            }
            ?>
        </select>
        <label for="Semester">Semester:</label>
        <select name="Semester" id="Semester">
            <option value="Ganjil">Ganjil</option>
            <option value="Genap">Genap</option>
        </select>

        <div class="table-box" id="tabel_kelola_kelas">
            <!-- Tabel HEAD -->
            <div class="table-row table-head">
                <div class="table-cell">
                    <p>Praktikum</p>
                </div>
                <div class="table-cell">
                    <p>Tahun Akademik</p>
                </div>
                <div class="table-cell">
                    <p>Semester</p>
                </div>
                <div class="table-cell">
                    <p>Peserta / Kuota</p>
                </div>
                <div class="table-cell">
                    <p>Asisten / Slot</p>
                </div>
            </div>

            <!-- Contoh Tabel Row -->
            <div class="table-row">
                <div class="table-cell">
                    <p>Pengolahan Sinyal DIgital</p>
                    <p><button type="button" class="btn-ubah-prak"><span></span>Ubah</button><button type="button" class="btn-hps-prak"><span></span>Hapus</button></p>
                </div>
                <div class="table-cell">
                    <p>2022</p>
                </div>
                <div class="table-cell">
                    <p>Genap</p>
                </div>
                <div class="table-cell">
                    <p>1 / 100</p>
                    <p><button type="button" class="btn-dftr-peserta"><span></span>Daftar Peserta</button><button type="button" class="btn-atur-jadwal"><span></span>Atur Jadwal</button><button type="button" class="btn-kosong-jadwal"><span></span>Kosongkan Jadwal</button></p>
                </div>
                <div class="table-cell">
                    <p>1 / 100</p>
                    <p><button type="button" class="btn-lihat"><span></span>Lihat</button><button type="button" class="btn-kosongkan"><span></span>Kosongkan</button></p>
                </div>
            </div>

            <?php
            for ($i = 0; $i < $idx_sql_arr; $i++) {
                $new_table = '<div class="tabler-row">
                    <p>' . $nama_praktikum . '</p>
                    <p><button type="button" class="btn-ubah-prak"><span></span>Ubah</button><button type="button" class="btn-hps-prak"><span></span>Hapus</button></p>
                </div>
                <div class="table-cell">
                    <p>' . $tahun_akademik . '</p>
                </div>
                <div class ="table-cell">
                    <p>' . $semester .'</p>
                </div>
                <div class="table-cell">
                    <p>' . $jumlah_peserta . '/' . $kuota_peserta . '</p>
                    <p><button type="button" class="btn-dftr-peserta"><span></span>Daftar Peserta</button><button type="button" class="btn-atur-jadwal"><span></span>Atur Jadwal</button><button type="button" class="btn-kosong-jadwal"><span></span>Kosongkan Jadwal</button></p>
                </div>
                <div class="table-cell">
                    <p>' . $jumlah_asisten . '/' . $kuota_asisten . '</p>
                    <p><button type="button" class="btn-lihat"><span></span>Lihat</button><button type="button" class="btn-kosongkan"><span></span>Kosongkan</button></p>
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
            // Event listener untuk tombol tambah kelas
            $("#btn-tbh-kelas").on("click", function() {
                //Mengambil nilai data yang dibutuhkan
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
</body>

</html>