<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .sticky {
            position: sticky;
            top: 0;
            z-index: 50;
            background-color: white;
        }
        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            height: 100%;
            overflow-y: auto;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="bg-white w-64 shadow-md sidebar-sticky">
            <div class="p-6 flex items-center">
                <img src="assets/images/ulm.png" alt="Logo" class="h-12 w-12 mr-3">
                <div>
                    <h1 class="text-xl font-bold">Fakultas Teknik</h1>
                    <p class="text-gray-600 text-sm">Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <nav class="px-4 py-6">
                <div class="mb-4">
                    <span class="text-gray-500 uppercase text-xs">Menu</span>
                    <ul>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-blue-500 font-bold bg-blue-100 p-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                                <span class="text-lg">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mb-4">
                    <span class="text-gray-500 uppercase text-xs">Layanan</span>
                    <ul>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M3 15h18M3 19h18" />
                                </svg>
                                <span class="text-lg">e-Services</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                <span class="text-lg">e-Command Center</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m-7 5h10a2 2 0 002-2v-3a2 2 0 00-2-2H5a2 2 0 00-2 2v3a2 2 0 002 2zM4 3h16a2 2 0 012 2v3a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2z" />
                                </svg>
                                <span class="text-lg">e-Response</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4z" />
                                </svg>
                                <span class="text-lg">e-Commerce</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v10l4-3 4 3V7H8z" />
                                </svg>
                                <span class="text-lg">e-Office</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <span class="text-gray-500 uppercase text-xs">Other</span>
                    <ul>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h4m0 0H8m4 0l2 2m-2-2l2-2M8 12h4" />
                                </svg>
                                <span class="text-lg">Kuisioner</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M8 14h8m-8 4h8" />
                                </svg>
                                <span class="text-lg">FAQ</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-3.086 1.419-4.913 3-5.837C15.637 5.077 16 4.693 16 4a4 4 0 00-8 0c0 .693.363 1.077 1 1.163C10.581 6.087 12 7.914 12 11zm0 0c-1.084 0-1.92.364-2.403 1.02A4.385 4.385 0 009 14.31c0 1.27.51 2.586 1.597 3.41.646.488 1.432.78 2.403.78s1.757-.292 2.403-.78C15.49 16.897 16 15.58 16 14.31c0-1.27-.51-2.586-1.597-3.29-.483-.656-1.319-1.02-2.403-1.02zm0 0v.02V11z" />
                                </svg>
                                <span class="text-lg">Profile</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12h5.5M15 12H9m6 0a4.5 4.5 0 00-9 0h9zm-6-3h5M9 12h6m-6 9V3h6v18H9z" />
                                </svg>
                                <span class="text-lg">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">
            <!-- Header -->
            <header class="bg-white shadow-md py-4 mb-6 flex items-center sticky justify-between">
                <div class="flex items-center">
                    <div>
                    </div>
                </div>
                <div class="flex items-center">
                    <input type="text" placeholder="Cari Layanan..." class="border border-gray-300 rounded-md py-2 px-4 mr-4 w-80">
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
            </header>

            <!-- Notification Section -->
            <section class="bg-yellow-100 p-4 rounded-md mb-6">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01m6.938 4H4.062c-.534 0-1.05-.21-1.425-.586A2.002 2.002 0 012 18.062V5.938c0-.534.21-1.05.586-1.425A2.002 2.002 0 014.062 4h15.876c.534 0 1.05.21 1.425.586A2.002 2.002 0 0122 5.938v12.124c0 .534-.21 1.05-.586 1.425A2.002 2.002 0 0119.938 20z"></path>
                    </svg>
                    <span class="text-gray-800 font-semibold">Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a href="#" class="text-blue-500">Disini</a></span>
                </div>
                <p class="text-gray-600 mt-2">Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas serta evaluasi layanan FT ULM.</p>
            </section>

            <!-- Welcome Section -->
            <section class="bg-blue-500 p-6 rounded-md mb-6">
                <h2 class="text-xl font-semibold mb-2 text-white">Selamat Datang Maulana!</h2>
                <p class="text-white">Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
            </section>

            <!-- Statistics Section -->
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

            <!-- Service Cards Section -->
            <section>
                <h2 class="text-xl font-semibold mb-4">Mungkin yang kamu butuhkan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Surat Keterangan Lulus" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Keterangan Lulus</h3>
                            <p class="mt-2">Dapatkan Surat Kelulusan dengan Mudah melalui layanan ini</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Surat Pengantar Izin PKL" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin PKL</h3>
                            <p class="mt-2">Berkas untuk PKL</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Surat Pengantar Izin Penelitian" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin Penelitian</h3>
                            <p class="mt-2">Berkas untuk Penelitian</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Permintaan Data MK/PKL/TA" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Permintaan Data MK/PKL/TA</h3>
                            <p class="mt-2">Surat Permintaan Data Mata Kuliah / Praktek Kerja Lapangan / Tugas Akhir Mahasiswa FT ULM</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Surat Tugas PKL/TA" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Tugas PKL/TA</h3>
                            <p class="mt-2">Pengajuan Surat Tugas untuk Praktek Kerja Lapangan / Tugas Akhir</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="MBKM FT ULM" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">MBKM FT ULM</h3>
                            <p class="mt-2">Layanan ini digunakan untuk pendaftaran dan pengajuan program MBKM Fakultas Teknik Universitas Lambung Mangkurat</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
