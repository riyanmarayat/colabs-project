<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur Jadwal - COLABS</title>
    <link rel="stylesheet" href="aturjadwal.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav>
            <img src="logo.png" class="logo">
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
            <h1 class="text-2xl p-4 w-full border-b">Modul X</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        <div class="w-[15%] h-full text-center">
                            <p>Tanggal Praktik</p>
                        </div>
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                    <div class="w-full h-1/4 flex px-6 mt-10">
                        <div class="w-[15%] h-full text-center">
                            <p>Sesi</p>
                        </div>
                        <ul class="w-[85%] h-full text-center">
                            <li><input type="radio" name="sesi">14.00</li>
                            <li><input type="radio" name="sesi">16.00</li>
                            <li><input type="radio" name="sesi">18.00</li>
                        </ul>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                    <div class="table w-3/4 border">
                        <div class="table-row">
                            <p class="table-cell p-0 pl-1 border-b bg-[#7de2e8] text-black">NRP</p>
                            <p class="table-cell pl-1 border-b border-l bg-[#7de2e8] text-black">Nama</p>
                        </div>
                        <div class="table-row">
                            <p class="table-cell pl-1">5024201070</p>
                            <p class="table-cell pl-1 border-l">Evan Kinanda</p>
                        </div>
                    </div>
                    <div class="w-3/4 mt-4 flex justify-start align-start">
                        <!-- <button class="border rounded px-2 py-1 mr-2 bg-sky-700">Simpan Jadwal</button>
                        <button class="border rounded px-2 py-1 mr-2 bg-red-500">Batalkan</button>
                        <button class="border rounded px-2 py-1 bg-green-600">Refresh</button> -->
                        <p><button type="button"><span></span>Simpan</button><button type="button"><span></span>Batalkan</button><button type="button"><span></span>Refresh</button></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-[90%] h-[40em] flex flex-col mx-auto my-12 border rounded-xl" onfocus="">
            <h1 class="text-2xl p-4 w-full border-b">Modul X</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        <div class="w-[15%] h-full text-center">
                            <p>Tanggal Praktik</p>
                        </div>
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                    <div class="w-full h-1/4 flex px-6 mt-10">
                        <div class="w-[15%] h-full text-center">
                            <p>Sesi</p>
                        </div>
                        <ul class="w-[85%] h-full text-center">
                            <li><input type="radio" name="sesi">14.00</li>
                            <li><input type="radio" name="sesi">16.00</li>
                            <li><input type="radio" name="sesi">18.00</li>
                        </ul>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                    <div class="table w-3/4 border">
                        <div class="table-row">
                            <p class="table-cell p-0 pl-1 border-b bg-[#7de2e8] text-black">NRP</p>
                            <p class="table-cell pl-1 border-b border-l bg-[#7de2e8] text-black">Nama</p>
                        </div>
                        <div class="table-row">
                            <p class="table-cell pl-1">5024201070</p>
                            <p class="table-cell pl-1 border-l">Evan Kinanda</p>
                        </div>
                    </div>
                    <div class="w-3/4 mt-4 flex justify-start align-start">
                        <!-- <button class="border rounded px-2 py-1 mr-2 bg-sky-700">Simpan Jadwal</button>
                        <button class="border rounded px-2 py-1 mr-2 bg-red-500">Batalkan</button>
                        <button class="border rounded px-2 py-1 bg-green-600">Refresh</button> -->
                        <p><button type="button"><span></span>Simpan</button><button type="button"><span></span>Batalkan</button><button type="button"><span></span>Refresh</button></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-[90%] h-[40em] flex flex-col mx-auto my-12 border rounded-xl" onfocus="">
            <h1 class="text-2xl p-4 w-full border-b">Modul X</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        <div class="w-[15%] h-full text-center">
                            <p>Tanggal Praktik</p>
                        </div>
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                    <div class="w-full h-1/4 flex px-6 mt-10">
                        <div class="w-[15%] h-full text-center">
                            <p>Sesi</p>
                        </div>
                        <ul class="w-[85%] h-full text-center">
                            <li><input type="radio" name="sesi">14.00</li>
                            <li><input type="radio" name="sesi">16.00</li>
                            <li><input type="radio" name="sesi">18.00</li>
                        </ul>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                    <div class="table w-3/4 border">
                        <div class="table-row">
                            <p class="table-cell p-0 pl-1 border-b bg-[#7de2e8] text-black">NRP</p>
                            <p class="table-cell pl-1 border-b border-l bg-[#7de2e8] text-black">Nama</p>
                        </div>
                        <div class="table-row">
                            <p class="table-cell pl-1">5024201070</p>
                            <p class="table-cell pl-1 border-l">Evan Kinanda</p>
                        </div>
                    </div>
                    <div class="w-3/4 mt-4 flex justify-start align-start">
                        <!-- <button class="border rounded px-2 py-1 mr-2 bg-sky-700">Simpan Jadwal</button>
                        <button class="border rounded px-2 py-1 mr-2 bg-red-500">Batalkan</button>
                        <button class="border rounded px-2 py-1 bg-green-600">Refresh</button> -->
                        <p><button type="button"><span></span>Simpan</button><button type="button"><span></span>Batalkan</button><button type="button"><span></span>Refresh</button></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-[90%] h-[40em] flex flex-col mx-auto my-12 border rounded-xl" onfocus="">
            <h1 class="text-2xl p-4 w-full border-b">Modul X</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        <div class="w-[15%] h-full text-center">
                            <p>Tanggal Praktik</p>
                        </div>
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                    <div class="w-full h-1/4 flex px-6 mt-10">
                        <div class="w-[15%] h-full text-center">
                            <p>Sesi</p>
                        </div>
                        <ul class="w-[85%] h-full text-center">
                            <li><input type="radio" name="sesi">14.00</li>
                            <li><input type="radio" name="sesi">16.00</li>
                            <li><input type="radio" name="sesi">18.00</li>
                        </ul>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                    <div class="table w-3/4 border">
                        <div class="table-row">
                            <p class="table-cell p-0 pl-1 border-b bg-[#7de2e8] text-black">NRP</p>
                            <p class="table-cell pl-1 border-b border-l bg-[#7de2e8] text-black">Nama</p>
                        </div>
                        <div class="table-row">
                            <p class="table-cell pl-1">5024201070</p>
                            <p class="table-cell pl-1 border-l">Evan Kinanda</p>
                        </div>
                    </div>
                    <div class="w-3/4 mt-4 flex justify-start align-start">
                        <!-- <button class="border rounded px-2 py-1 mr-2 bg-sky-700">Simpan Jadwal</button>
                        <button class="border rounded px-2 py-1 mr-2 bg-red-500">Batalkan</button>
                        <button class="border rounded px-2 py-1 bg-green-600">Refresh</button> -->
                        <p><button type="button"><span></span>Simpan</button><button type="button"><span></span>Batalkan</button><button type="button"><span></span>Refresh</button></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-[90%] h-[40em] flex flex-col mx-auto my-12 border rounded-xl" onfocus="">
            <h1 class="text-2xl p-4 w-full border-b">Modul X</h1>
            <div class="flex-1 flex">
                <div class="w-1/2 h-full px-4 py-6 flex flex-col justify-center items-center border-r">
                    <div class="w-full h-3/4 flex px-6">
                        <div class="w-[15%] h-full text-center">
                            <p>Tanggal Praktik</p>
                        </div>
                        <iframe class="w-[85%] h-full rounded-md" src="calendar.html"></iframe>
                    </div>
                    <div class="w-full h-1/4 flex px-6 mt-10">
                        <div class="w-[15%] h-full text-center">
                            <p>Sesi</p>
                        </div>
                        <ul class="w-[85%] h-full text-center">
                            <li><input type="radio" name="sesi">14.00</li>
                            <li><input type="radio" name="sesi">16.00</li>
                            <li><input type="radio" name="sesi">18.00</li>
                        </ul>
                    </div>
                </div>
                <div class="w-1/2 h-full py-6 flex flex-col justify-start items-center border-l">
                    <div class="table w-3/4 border">
                        <div class="table-row">
                            <p class="table-cell p-0 pl-1 border-b bg-[#7de2e8] text-black">NRP</p>
                            <p class="table-cell pl-1 border-b border-l bg-[#7de2e8] text-black">Nama</p>
                        </div>
                        <div class="table-row">
                            <p class="table-cell pl-1">5024201070</p>
                            <p class="table-cell pl-1 border-l">Evan Kinanda</p>
                        </div>
                    </div>
                    <div class="w-3/4 mt-4 flex justify-start align-start">
                        <!-- <button class="border rounded px-2 py-1 mr-2 bg-sky-700">Simpan Jadwal</button>
                        <button class="border rounded px-2 py-1 mr-2 bg-red-500">Batalkan</button>
                        <button class="border rounded px-2 py-1 bg-green-600">Refresh</button> -->
                        <p><button type="button"><span></span>Simpan</button><button type="button"><span></span>Batalkan</button><button type="button"><span></span>Refresh</button></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>