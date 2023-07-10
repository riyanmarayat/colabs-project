<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Masa FRS - COLABS</title>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    //$_SESSION['Peran'] = 'Admin'; //Ini merupakan perubahan Peran secara Manual
    if (isset($_SESSION['Peran'])) {
        if ($_SESSION['Peran'] == 'Admin') {
            echo '<link rel="stylesheet" href="Style/Admin/masafrs.css">'; //Link CSS Admin
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
    <!-- <script src="https://cdn.tailwindcss.com"></script> Online -->
    echo '<link rel="stylesheet" href="Style/output.css">'; //Link Tailwind offline

</head>

<body>
    <header>
        <nav>
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
        </nav>
    </header>

    <main>
        <section class="w-[90%] h-[40em] flex flex-col mx-auto my-12 border rounded-xl" onfocus="">
            <h1 class="text-2xl p-4 w-full border-b">Mulai Registrasi Praktikum</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                <p><label for="Hour">Jam</label>
            <select name="Hour" id="Hour">
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
            </select>
        <label for="Minute">Menit : </label>
            <select name="Minute" id="Minute">
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>           
            </select></p>
            </div>
        </section>
        <section class="w-[90%] h-[40em] flex flex-col mx-auto my-12 border rounded-xl" onfocus="">
            <h1 class="text-2xl p-4 w-full border-b">Batas Registrasi Praktikum</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                <p><label for="Hour">Jam</label>
            <select name="Hour" id="Hour">
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
            </select>
        <label for="Minute">Menit : </label>
            <select name="Minute" id="Minute">
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>           
            </select></p>
            </div>
        </section>
        <section class="w-[90%] h-[40em] flex flex-col mx-auto my-12 border rounded-xl" onfocus="">
            <h1 class="text-2xl p-4 w-full border-b">Mulai Registrasi Jadwal</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                <p><label for="Hour">Jam</label>
            <select name="Hour" id="Hour">
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
            </select>
        <label for="Minute">Menit : </label>
            <select name="Minute" id="Minute">
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>           
            </select></p>
            </div>
        </section>
        <section class="w-[90%] h-[40em] flex flex-col mx-auto my-12 border rounded-xl" onfocus="">
            <h1 class="text-2xl p-4 w-full border-b">Batas Registrasi Jadwal</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                <p><label for="Hour">Jam</label>
            <select name="Hour" id="Hour">
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
            </select>
        <label for="Minute">Menit : </label>
            <select name="Minute" id="Minute">
                <option value="00">00</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>           
            </select></p>
            </div>
        </section>
    </main>
</body>

</html>