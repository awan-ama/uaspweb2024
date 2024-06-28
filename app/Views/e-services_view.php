<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Services</title>
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
                            <a href="dashboard.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
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
                            <a href="e-services.html" class="flex items-center text-blue-500 font-bold bg-blue-100 p-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M3 15h18M3 19h18" />
                                </svg>
                                <span class="text-lg">e-Services</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="e-command-center.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                </svg>
                                <span class="text-lg">e-Command Center</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="e-response.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m-7 5h10a2 2 0 002-2v-3a2 2 0 00-2-2H5a2 2 0 00-2 2v3a2 2 0 002 2zM4 3h16a2 2 0 012 2v3a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2z" />
                                </svg>
                                <span class="text-lg">e-Response</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="e-commerce.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4z" />
                                </svg>
                                <span class="text-lg">e-Commerce</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="e-office.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
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
                            <a href="kuisioner.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h4m0 0H8m4 0l2 2m-2-2l2-2M8 12h4" />
                                </svg>
                                <span class="text-lg">Kuisioner</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="faq.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M8 14h8m-8 4h8" />
                                </svg>
                                <span class="text-lg">FAQ</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="profile.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-3.086 1.419-4.913 3-5.837C15.637 5.077 16 4.693 16 4a4 4 0 00-8 0c0 .693.363 1.077 1 1.163C10.581 6.087 12 7.914 12 11zm0 0c-1.084 0-1.92.364-2.403 1.02A4.385 4.385 0 009 14.31c0 1.27.51 2.586 1.597 3.41.646.488 1.432.78 2.403.78s1.757-.292 2.403-.78C15.49 16.897 16 15.58 16 14.31c0-1.27-.51-2.586-1.597-3.29-.483-.656-1.319-1.02-2.403-1.02zm0 0v.02V11z" />
                                </svg>
                                <span class="text-lg">Profile</span>
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="logout.html" class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-100">
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
            <header class="bg-white shadow-md py-4 mb-6 flex items-center sticky top-0 justify-between">
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

            <!-- e-Services Section -->
            <section class="mb-6">
                <h2 class="text-2xl font-semibold mb-4">Layanan e-Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Card 1 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 1" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Izin Penelitian TA Lulus FT</h3>
                            <p class="mt-2">Layanan ini digunakan untuk pengajuan Surat Izin Penelitian Tugas Akhir di laboratorium Fakultas Teknik ULM</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 2" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Kendali Kegiatan Ormawa</h3>
                            <p class="mt-2">layanan ini digunakn untuk pengajuan proposal atau laporan kegiatan organisasi mahasiswa FT ULM</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 3" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Keterangan Bebas Lab & Perpus</h3>
                            <p class="mt-2">Digunakan ntuk pengajuan Surat Keterangan Bebas Lab dan Perpus di lingkunan FT sebagai persyaratan Wisuda Mahasiswa FT ULM</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 4" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Kotak Pos FT</h3>
                            <p class="mt-2">Layanan ini disediakan untuk memberikan kemudahan bagi para pihak dalam menjalin komunikasi dengan pihak FT ULM</p>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 5" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Legalisir Akreditasi Program Studi</h3>
                            <p class="mt-2">Layanan ini digunakan untuk pengajuan legalisir Akreditasi Program Studi untuk kebutuhan Dokumen Legal Bertanda Tangan</p>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 6" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Legalisir Ijazah</h3>
                            <p class="mt-2">Layanan ini digunakan untuk pengajuan legalisir ijaszah secara online dan dapat diambil secara offline atau dikirim melalui COD</p>
                        </div>
                    </div>
                    <!-- Card 7 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 7" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Legalitas Transkrip Akademik</h3>
                            <p class="mt-2">Layanan ini digunakan untuk penggajuan</p>
                        </div>
                    </div>
                    <!-- Card 8 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 8" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">MBKM FT ULM</h3>
                            <p class="mt-2">Deskripsi layanan 8</p>
                        </div>
                    </div>
                    <!-- Card 9 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 9" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Permintaan Data MK/PKL/TA</h3>
                            <p class="mt-2">Deskripsi layanan 9</p>
                        </div>
                    </div>
                    <!-- Card 10 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 10" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Permintaan Tenaga Ahli</h3>
                            <p class="mt-2">Deskripsi layanan 10</p>
                        </div>
                    </div>
                    <!-- Card 11 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 11" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Pengurangan Kategori UKT</h3>
                            <p class="mt-2">Deskripsi layanan 11</p>
                        </div>
                    </div>
                    <!-- Card 12 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 12" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Aktif Kuliah</h3>
                            <p class="mt-2">Deskripsi layanan 12</p>
                        </div>
                    </div>
                    <!-- Card 13 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 13" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Keterangan Jomblo/Tunawisma</h3>
                            <p class="mt-2">Deskripsi layanan 13</p>
                        </div>
                    </div>
                    <!-- Card 14 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 14" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Keterangan Lulus</h3>
                            <p class="mt-2">Deskripsi layanan 14</p>
                        </div>
                    </div>
                    <!-- Card 15 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 15" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin Penelitian</h3>
                            <p class="mt-2">Deskripsi layanan 15</p>
                        </div>
                    </div>
                    <!-- Card 16 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 16" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Pengantar Izin PKL</h3>
                            <p class="mt-2">Deskripsi layanan 16</p>
                        </div>
                    </div>
                    <!-- Card 17 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 17" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Rekomendasi Mahasiswa</h3>
                            <p class="mt-2">Deskripsi layanan 17</p>
                        </div>
                    </div>
                    <!-- Card 18 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 18" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Tugas</h3>
                            <p class="mt-2">Deskripsi layanan 18</p>
                        </div>
                    </div>
                    <!-- Card 19 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 19" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Surat Tugas PKL/TA</h3>
                            <p class="mt-2">Deskripsi layanan 19</p>
                        </div>
                    </div>
                    <!-- Card 20 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 20" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Sertifikat Uji Plagiat Artikel Jurnal TA</h3>
                            <p class="mt-2">Deskripsi layanan 20</p>
                        </div>
                    </div>
                    <!-- Card 21 -->
                    <div class="bg-white p-4 rounded-md shadow-md card">
                        <img src="assets/images/orang.jpeg" alt="Layanan 21" class="rounded-t-md h-32 w-full object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-bold">Ujian Tugas Akhir</h3>
                            <p class="mt-2">Deskripsi layanan 21</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
