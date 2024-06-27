<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="bg-white w-64 min-h-screen shadow-md">
            <div class="p-6 flex items-center">
                <img src="assets/images/ulm.png" alt="Logo" class="h-12 w-12 mr-3">
                <div>
                    <h1 class="text-xl font-bold">Fakultas Teknik</h1>
                    <p class="text-gray-600 text-sm">Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <nav class="px-4 py-6">
                <ul>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-blue-500 font-bold">
                            <span class="text-lg">Dashboard</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">e-Services</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">e-Command Center</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">e-Response</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">e-Commerce</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">e-Office</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">Kuisioner</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">FAQ</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">Profile</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-gray-700">
                            <span class="text-lg">Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <header class="bg-white shadow-md py-4 mb-6">
                <div class="container mx-auto flex justify-between items-center px-4">
                    <div class="flex items-center">
                    </div>
                    <div class="flex items-center">
                        <input type="text" placeholder="Cari Layanan..." class="border border-gray-300 rounded-md py-2 px-4 mr-4">
                        <button class="relative mr-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A7.953 7.953 0 0018 10a7.953 7.953 0 00-1.595-5.595L15 4h5v5l-1.405-1.405A7.953 7.953 0 0018 10a7.953 7.953 0 001.595 5.595L20 17z"></path>
                            </svg>
                            <span class="absolute top-0 right-0 inline-flex items-center justify-center h-5 w-5 rounded-full bg-red-500 text-white text-xs">1</span>
                        </button>
                        <div class="flex items-center">
                            <span class="mr-4">Maulana</span>
                            <img src="assets/images/lego man.jpg" alt="Profile" class="h-10 w-10 rounded-full">
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <section class="bg-white p-6 rounded-md shadow-md mb-6">
                <div class="flex items-center justify-between bg-yellow-100 p-4 rounded-md mb-6">
                    <span>Kamu belum mengisi kuisioner pada periode semester ini, silahkan isi Kuisioner Disini!</span>
                    <a href="#" class="text-blue-500">Disini</a>
                </div>

                <div class="bg-blue-100 p-6 rounded-md">
                    <h2 class="text-xl font-semibold mb-2">Selamat Datang Maulana!</h2>
                    <p>Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
                </div>
            </section>

            <section class="grid grid-cols-1 lg:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded-md shadow-md text-center">
                    <h3 class="text-3xl font-bold">4</h3>
                    <p>Layanan diajukan</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md text-center">
                    <h3 class="text-3xl font-bold">2</h3>
                    <p>Menunggu persetujuan</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md text-center">
                    <h3 class="text-3xl font-bold">1</h3>
                    <p>Layanan disetujui</p>
                </div>
                <div class="bg-white p-4 rounded-md shadow-md text-center">
                    <h3 class="text-3xl font-bold">1</h3>
                    <p>Layanan ditolak</p>
                </div>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Mungkin yang kamu butuhkan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-md shadow-md">
                        <h3 class="text-lg font-bold">Surat Keterangan Lulus</h3>
                        <p class="mt-2">Dapatkan Surat Kelulusan dengan Mudah melalui layanan ini</p>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md">
                        <h3 class="text-lg font-bold">Surat Pengantar Izin PKL</h3>
                        <p class="mt-2">Berkas untuk PKL</p>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md">
                        <h3 class="text-lg font-bold">Surat Pengantar Izin Penelitian</h3>
                        <p class="mt-2">Berkas untuk Penelitian</p>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md">
                        <h3 class="text-lg font-bold">Permintaan Data MK/PKL/TA</h3>
                        <p class="mt-2">Surat Permintaan Data Mata Kuliah / Praktek Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM</p>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md">
                        <h3 class="text-lg font-bold">Surat Tugas PKL/TA</h3>
                        <p class="mt-2">Pengajuan Surat Tugas untuk Praktek Kerja Lapangan / Tugas Akhir</p>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md">
                        <h3 class="text-lg font-bold">MBKM FT ULM</h3>
                        <p class="mt-2">Layanan ini digunakan untuk pendaftaran dan pengajuan program MBKM Fakultas Teknik Universitas Lambung Mangkurat</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
