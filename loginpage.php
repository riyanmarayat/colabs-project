<html>
<head> 
    <title>COLABS - Login</title> 
    <?php
    session_start();
    //$_SESSION['Peran'] = 'Asisten'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Praktikan') {
            header('Location: homepage_All.php');
        } else if ($_SESSION['Peran'] == 'Asisten') {
            header('Location: homepage_All.php');
        } else if ($_SESSION['Peran'] == 'Koordinator') {
            header('Location: homepage_All.php');
        } else if ($_SESSION['Peran'] == 'Admin') {
            header('Location: homepage_All.php');
        } else {
            echo '<link rel="stylesheet" href="Style/Login/loginpage.css">';
        }
    } else {
        echo '<link rel="stylesheet" href="Style/Login/loginpage.css">';
    }
    ?>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="logo.png" class="logo">
        </div>
    </div>

    <div class="content">
        <h1>COLABS</h1>
        <h1>TEKNIK KOMPUTER ITS</h1>

        <!-- Error Message -->
        <?php
        if (isset($_SESSION['error_message'])):
        ?>
            <div class="error-message">
                <?php
                echo $_SESSION['error_message'];
                unset($_SESSION['error_message']);
                ?>
            </div>
        <?php
        endif;
        ?>
        <form action="process_login.php" method="POST">
            <ul>
                <label for = "username">Username</label><br>
                <li><input type="text" id="username" name="username" required><br></li>
                <label for="password">Password</label><br>
                <li><input type="password" id="password" name="password" required><br></li>
            </ul>
            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>