<html>
    <head>
    <title>Jadwal Asistensi - COLABS</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <?php
    session_start();
    $_SESSION['Peran'] = 'Asisten'; //Ini merupakan perubahan secara manual
    if(isset($_SESSION['Peran'])){
        if(($_SESSION['Peran'] == 'Asisten')){
            echo '<link rel="stylesheet" href="Style/Asisten/jadwalasistensi2.css">'; //Link style untuk asisten
        }else if(($_SESSION['Peran'] == 'Koordinator')){
            echo '<link rel="stylesheet" href="Style/Koordinator/jadwalasistensi2.css">'; //Link style untuk koordinator
        }else {
            //Error Tidak memiliki Akses
        }
    }else {
        //Error Tidak memiliki Akses
    }
    ?>
    </head>
    <body>
        <div class="banner">
            <div class="navbar">
            <img src="Image\logo.png" class="logo">
                <ul>
                    <li id="space"><a href="#">Asistensi</a></li>
                    <div class="dropdown">
                        <ul>
                            <li id="space"><a href="#">Account</a></li>
                            <div class="dropdown-content">
                                <form action="/action_page.php">
                                    <a><p>Peran:</p></a>
                                    <a><input type="radio" id="koor" name="Peran" value="Koordinator">
                                    <label for="koor">Koordinator</label></a>
                                    <a><input type="radio" id="asis" name="Peran" value="Asisten">
                                    <label for="asis">Asisten</label></a>
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
            <h1>JAWAL ASISTENSI</h1>
        <div class="table-box">
        <div class="table-row table-head">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Modul 3</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell last-cell">
                <p>Status</p>
            </div>
        </div>    

        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>502420XXXX</p>
                <p>Aaaaaaaaa</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell">
                <p>Lengkap</p>
            </div>
        </div>
        
        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p><button type="button"><span></span>Batal</button></p>
                <p>502420XXXX</p>
                <p>Eeeeeeeee</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Modul 3</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell">
                <p>Tidak Lengkap</p>
            </div>
        </div>
        
        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Modul 3</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell" >
                <p>Status</p>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <p>Modul 1</p>
            </div>
            <div class="table-cell">
                <p>Modul 2</p>
            </div>
            <div class="table-cell">
                <p>Modul 3</p>
            </div>
            <div class="table-cell">
                <p>Modul 4</p>
            </div>
            <div class="table-cell">
                <p>Modul 5</p>
            </div>
            <div class="table-cell">
                <p>Status</p>
            </div>
        </div>

        <div class="table-row">
            <div class="table-cell">
                <p>Hari, Tanggal</p>
            </div>
            <div class="table-cell">
                <p>Sesi</p>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <button type="button"><span></span>Isi</button>
            </div>
            <div class="table-cell">
                <p>Status</p>
            </div>
        </div>
    </body>
</html>
