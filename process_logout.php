<?php
session_start();

// Hapus semua data session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lain yang diinginkan setelah logout
session_write_close();
header('Location: homepage_All.php');
exit();
?>
