<?php
// Mendapatkan Data
if(isset($_POST['option'])){
    $selected_option = $_POST['option'];

    //Menghasilkan tabel baru berdasarkan nilai opsi yg ada
    $newTable = '<div class="table-row">
    <div class="table-cell">
    <p>' . $selected_option . '</p>
    </div>
    <div class="table-cell">
    <p><button type="button" class="hpsbtn_matkulpra"><span></span>Hapus</button></p>
    </div>
    </div>';
    
    //Mengirimkan tabel baru sebagai respon permintaan
    echo $newTable;
    exit();
} else if (isset($_POST['action']) && $_POST['action'] === "hapus") {
    $rowIndex = $_POST['rowIndex'];

    echo "success";
    exit();
} else if (isset($_POST['nama_matkul'])){
    $nama_matkul = $_POST['nama_matkul']; //Nama Matkul Prasyarat
    $list_matkulpra = $_POST['list_matkulpra']; //List Array Matkul Prasyarat
    $index = $_POST['index']; //Banyaknya list matkul prasyarat

    //Pengecekan sama tidaknya
    for ($i = 0; $i < $index; $i++){
        if (strtolower($nama_matkul) === strtolower($list_matkulpra[$i])) {
            echo "error";
            exit();
        }
    }

    //Menghasilkan option baru
    $new_option = '<option value="' . $nama_matkul . '">' . $nama_matkul . '</option>';

    //Mengirimkan opstion baru sebagai respon
    echo $new_option;
}
?>








