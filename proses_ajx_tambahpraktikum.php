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
} else if (isset($_POST['action']) && $_POST['action'] === "hapus") {
    $rowIndex = $_POST['rowIndex'];
    
    // Perform the necessary deletion operation using the row index

    // Send a success response if the deletion is successful
    echo "success";
    exit();
}
?>








