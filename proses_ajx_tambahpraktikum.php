<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Mendapatkan Data
if(isset($_POST['option'])){
    $selected_option = $_POST['option'];
    if (is_array($_SESSION['list_matkulpra_dipilih'])) {
        $index = sizeof($_SESSION['list_matkulpra_dipilih']);
    } else {
        $index = 0;
    }

    for ($i = 0; $i < $index; $i++){
        if(is_array($_SESSION['list_matkulpra_dipilih'][$i])) {
            if(strtolower((implode($_SESSION['list_matkulpra_dipilih'][$i])) === strtolower($selected_option))) {
                echo "error";
                exit();
            }
        } else {
            if(strtolower($_SESSION['list_matkulpra_dipilih'][$i]) === strtolower($selected_option)) {
                echo "error";
                exit();
            }
        }
    }
    //Menghasilkan tabel baru berdasarkan nilai opsi yg ada
    $newTable = '<div class="table-row" value="' . $selected_option . '">
    <div class="table-cell">
    <p>' . $selected_option . '</p>
    </div>
    <div class="table-cell">
    <p><button type="button" class="hpsbtn_matkulpra"><span></span>Hapus</button></p>
    </div>
    </div>';
    
    //Mengirimkan tabel baru sebagai respon permintaan
    $_SESSION['list_matkulpra_dipilih'][] = $selected_option;
    echo $newTable;
    session_write_close();
    exit();
} else if (isset($_POST['action']) && $_POST['action'] === "hapus") {
    $rowIndex = $_POST['rowIndex'];
    $val = $_POST['val'];
    //Mendapatkan Index
    if (is_array($_SESSION['list_matkulpra_dipilih'])) {
        $index = sizeof($_SESSION['list_matkulpra_dipilih']);
    } else {
        $index = 0;
    }

    for ($i = 0; $i < $index; $i++){
        if(is_array($_SESSION['list_matkulpra_dipilih'][$i])) {
            if(strtolower((implode($_SESSION['list_matkulpra_dipilih'][$i])) === strtolower($val))) {
                unset($_SESSION['list_matkulpra_dipilih'][$i]);
            }
        } else {
            if(strtolower($_SESSION['list_matkulpra_dipilih'][$i]) === strtolower($val)) {
                unset($_SESSION['list_matkulpra_dipilih'][$i]);
            }
        }
    }

    echo "success";
    session_write_close();
    exit();
} else {
    session_write_close();
        header('Location: error403.php'); //Access Denied
        exit();
}
?>