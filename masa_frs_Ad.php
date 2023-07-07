<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Masa FRS - COLABS</title>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    ?>
    <link rel="stylesheet" href="Style/Admin/masafrs.css"> <!--Link CSS Admin-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav>
            <img src="../Image/logo.png" class="logo">
            <ul>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Praktikum</a></li>
                        <div class="dropdown-content">
                            <p>
                                <li><a href="#">Kelola Praktikum</a></li>
                            </p>
                            <p>
                                <li><a href="#">Kelola Kelas</a></li>
                            </p>
                            <p>
                                <li><a href="#">Masa FRS</a></li>
                            </p>
                            <p>
                                <li><a href="#">Jadwal</a></li>
                            </p>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Rekapitulasi</a></li>
                        <div class="dropdown-content">
                            <p>
                                <li><a href="#">Nilai Per Mahasiswa</a></li>
                            </p>
                            <p>
                                <li><a href="#">Nilai Per Semester</a></li>
                            </p>
                            <p>
                                <li><a href="#">Nilai Per Lab</a></li>
                            </p>
                            <p>
                                <li><a href="#">Asisten</a></li>
                            </p>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Pelaksanaan</a></li>
                        <div class="dropdown-content">
                            <p>
                                <li><a href="#">Daftar Koordinator</a></li>
                            </p>
                            <p>
                                <li><a href="#">Tambah Koordinator</a></li>
                            </p>
                            <p>
                                <li><a href="#">Login Mahasiswa</a></li>
                            </p>
                            <p>
                                <li><a href="#">Kelola Asisten</a></li>
                            </p>
                        </div>
                    </ul>
                </div>
                <li><a href="#">Download</a></li>
                <div class="dropdown">
                    <ul>
                        <li id="space"><a href="#">Account</a></li>
                        <div class="dropdown-content">
                            <form action="/action_page.php">
                                <a>
                                    <p>Peran:</p>
                                </a>
                                <a><input type="radio" id="prak" name="Peran" value="Admin">
                                    <label for="prak">Admin</label></a>
                                <a><input type="radio" id="prak" name="Peran" value="Dosen">
                                    <label for="prak">Dosen</label></a>
                                <a><input type="radio" id="koor" name="Peran" value="Koordinator">
                                    <label for="koor">Koordinator</label></a>
                                <a><input type="radio" id="asis" name="Peran" value="Asisten">
                                    <label for="asis">Asisten</label></a>
                                <a><input type="radio" id="prak" name="Peran" value="Praktikan">
                                    <label for="prak">Praktikan</label></a>
                        </div>
                    </ul>
                </div>
            </ul>
            </div>
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